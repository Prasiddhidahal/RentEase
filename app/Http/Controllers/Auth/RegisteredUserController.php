<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\DropDownLocationController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Carbon\Carbon;

Validator::extend('age', function ($attribute, $value, $parameters, $validator) {
    $minAge = Carbon::now()->subYears(18);
    if (Carbon::createFromFormat('Y-m-d', $value) > $minAge) {
        return false;
    }
    return true;
}, 'The :attribute must be 18 years or older.');



class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $cities= DropDownLocationController::getCities();
           
        return view('auth.register',[
            'cities'=>$cities,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate( [
            'first_name' => ['required', 'string', 'max:255'],
            // 'middle_name' => [ 'nullable','string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'date_of_birth' => ['required', 'date_format:Y-m-d','age'],
            'street_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            
            'area' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_name' => ['required', 'string', 'max:255', 'unique:users'],
            'phone_number' =>  ['required', 'string', 'regex:/^9\d{9}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed','regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/'],
            
            'gender' => ['required', 'string', 'in:Male,Female,other'],
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'document.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            

        ]);
        $city_name = \App\Models\City::where('id', $request->city)->first();
        $area_name = \App\Models\Area::where('id', $request->area)->first();
     
// dd($request);
      
        if($request->hasfile('avatar')){
            $avatar_name = time().'.'.$request->avatar->extension();
            $path='users/'.$avatar_name;
            $request->avatar->move(public_path('users'),$avatar_name);
        }
// dd($request);

        $document = array();
            if($request->hasfile('document')){
                $request->validate([
                    'document.*' => 'image',
                ]);
                foreach ($request->file('document') as $photo) {
                
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($photo->getClientOriginalExtension());
                    $image_full_name = $image_name . '.' . $ext;
                    $upload_path = 'public/storage/documents/';
                    $image_url = $upload_path . $image_full_name;
                    $photo->move($upload_path, $image_full_name);
                    $document[] = $image_url;
            
    
            }
             $document_path=implode('|',$document);
            
                
        }
       
      
// dd($request);
      
        $user = User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name?? null,
            'last_name' => $request->last_name,
            'date_of_birth' => $request->date_of_birth,
            'street_name' => $request->street_name,
            'city' => $city_name->city_name,
            'area' => $area_name->area_name,
            'user_name'=>$request->user_name, 
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'avatar' => $path ?? NULL,
            'document' =>$document_path ?? NULL,

        ]);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('message','Account Successfully Created');
    }
}
