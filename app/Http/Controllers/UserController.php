<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\DropDownLocationController;

class UserController extends Controller
{
    protected $cid;
    public function manage_profile(User $user){
        $cities= DropDownLocationController::getCities();
        $areas= Area::select()->get();
        return view('dashboard.manage_profile',[
            'users'=> $user,
            
            'cities'=>$cities,
            'areas'=>$areas,
        ]);
    }
    public function profile(User $user){
        return view('dashboard.viewprofile',[
            'users'=> $user
        ]);
    }
     public function dashboard(){
        return view('dashboard.dashboard');
     }
     public function update_profile(Request $request){
       
        
        // Save the uploaded file to storage/app/public/avatars
       
    
        // Update the user's avatar in the database
        
        
    
        $formField= $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'nullable','string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
           
            'date_of_birth' => ['required','date_format:Y-m-d'],
            'street_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            
            'area' => ['required', 'string', 'max:255'],
            'email'=>'required|email|unique:users,email,'.auth()->user()->id,
            'phone_number'=>'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            

        ]);
        $city_name = \App\Models\City::where('id', $request->city)->first();
            $area_name = \App\Models\Area::where('id', $request->area)->first();
            $formField['city']=  $city_name->city_name;
            $formField['area']=  $area_name->area_name;
        $user = User::find(auth()->user()->id);
       if(request()->hasfile('avatar')){
        unlink($user->avatar);
        $avatar_name = time().'.'. $request->avatar->extension();
        $path='users/'.$avatar_name;
       $request->avatar->move(public_path('users'),$avatar_name);
       }
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
       if($request->has('middle_name')){
        $formField['middle_name']=$request->middle_name;
       }
        $user->first_name = $formField['first_name'];
        $user->middle_name = $formField['middle_name']?? null;
        $user->last_name = $formField['last_name'];

        $user->street_name = $formField['street_name'];
        $user->city = $formField['city'];
        $user->area = $formField['area'];

        $user->date_of_birth = $formField['date_of_birth'];
        $user->email = $formField['email'];
        $user->phone_number = $formField['phone_number'];
        $user->avatar = $path ??   $user->avatar;
        $user->document = $document_path ??   $user->document;
        $user->verification= 0;
        $user->save();
       
        return back()->with('message','Profile updated successfully!');
    }
}
