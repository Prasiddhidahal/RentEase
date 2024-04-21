<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use App\Models\Reply;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Property_detail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DropDownLocationController;
use App\Http\Controllers\NotificationController;

class AdminController extends Controller
{
    public function loginShow(){
        return view('admin.login');
    }
    public function login(Request $request){
        
        $check=$request->all();
        if(Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password']])){
            //remember admin email and password with cookies
            // dd($request);
            // echo "<pre>"; print_r($check); die;
            if(isset($check['remember'])&& !empty($check['remember'])){
                setcookie("email",$check['email'],time()+3600);
                setcookie("password",$check['password'],time()+3600);

            }
            else{
                setcookie("email","");
                setcookie("password","");
            }
            return view('admin.dashboard')->with('message','Admin login successfully');
        }
        return back()->with('error','Invalid credential');
        
    }
    //Home Page
    public function index(){
        
        return view('admin.dashboard')->with('message','Welcome to Admin Dashboard');
    }
   
    //Property
    //show single property
    public function show($id){
       
                $property_detail = DB::table('property_details')->where('id',$id)->first();
                $comments=Comment::orderby('id','desc')->get();
                $replies=Reply::all();
                return view('admin.property.single',[
                    'property_detail'=> $property_detail,
                    'comments'=>$comments,
                    'replies'=>$replies
                ]);
          
        
       
    }
    //show create form
    public function create(){
        $cities= DropDownLocationController::getCities();
        $areas= Area::select()->get();
        return view('admin.property.create',[
            'cities'=>$cities,
                'areas'=>$areas,
        ]);
    }
    
        //Show Edit Form
        public function edit(Property_detail $property_detail){
            $cities= DropDownLocationController::getCities();
            $areas= Area::select()->get();
            return view('admin.property.edit',[
                'property_detail'=>$property_detail,
            'cities'=>$cities,
            'areas'=>$areas,]);
        }
        //store listing data
        public function update(Request $request,Property_detail $property_detail){
            //Make sure logged in user is owner
           
            $formField= $request->validate([
                'sale_type'=>'required',
        'type_of_property'=>'required',
        'category_of_property'=>'required',
        'street_name'=>'required',
        'city'=>'required',
        'area'=>'required',
        'total_area'=>'required',
        'property_facing'=>'required',
        
        'title'=>'required',
        'description'=>'required',
        'price'=>'required',
        'price_label'=>'required',
        'latitude'=>'required',
        'longitude'=>'required',
    
            ]);
            $city_name = \App\Models\City::where('id', $request->city)->first();
            $area_name = \App\Models\Area::where('id', $request->area)->first();
            $formField['city']=  $city_name->city_name;
            $formField['area']=  $area_name->area_name;

            $property_photo = array();
            if($request->hasFile('property_photo')){
                foreach ($request->file('property_photo') as $photo) {
                
                    $image_name = md5(rand(1000,10000));
                    $ext = strtolower($photo->getClientOriginalExtension());
                    $image_full_name = $image_name . '.' . $ext;
                    $upload_path = 'public/storage/property_photos/';
                    $image_url = $upload_path . $image_full_name;
                    $photo->move($upload_path, $image_full_name);
                    $property_photo[] = $image_url;
            
    
            }
             $formField['property_photo']=implode('|',$property_photo);
            
                
        }
        else{
            // $user = User::find(auth()->user()->id);
            $formField['property_photo']=$property_detail->property_photo;
            
        }
        if($request->has('road_size')!=NULL){
            $formField['road_size'] = $request->road_size . ' ' . $request->road_size_type;
          
        }
        // dd($formField['road_size']);
        if($request->has('road_type')!=NULL){
            $formField['road_type']=  $request->road_type;
            
        }
        if($request->has('built_area')!=NULL){
            $formField['built_area']= $request->built_area. ' ' . $request->built_area_type;
            
        }
         if($request->has('build_year')!=NULL){
            $formField['build_year']= $request->build_year;
            
        }
        if($request->has('total_floor')!=NULL){
            $formField['total_floor']= $request->total_floor;
            
        }
        if($request->has('furnishing')!=NULL){
            $formField['furnishing']= $request->furnishing;
            
        }
        if($request->has('kitchen')!=NULL){
            $formField['kitchen']= $request->kitchen;
            
        }

        if($request->has('bed_room')!=NULL){
            $formField['bed_room']= $request->bed_room;
            
        }
         if($request->has('bath_room')!=NULL){
            $formField['bath_room']= $request->bath_room;
            
        }
        if($request->has('living_room')!=NULL){
            $formField['living_room']= $request->living_room;
            
        }
        if($request->has('parking')!=NULL){
            $formField['parking']= $request->parking;
            
        }
        if($request->has('amenities')!=NULL){
            $formField['amenities']= $request->amenities;
            
        }
                $formField['user_id']= $property_detail->user_id;
                

            // Property_detail::update($formField);
            $property_detail->update($formField);
          
            return redirect('/admin/property_manage')->with('message','Property updated successfully!');
        }
        //Delete property
        public function destroy(Property_detail $property_detail){
             //Make sure logged in user is owner
            
            $property_detail->delete();
            return redirect('/admin/property_manage')->with('message','Property Deleted Successfully');
        }
        //Manage property
        public function manage(){
            return view('admin.property.manage',[
                'properties' => Property_detail::Paginate(6),
                'total_properties' => Property_detail::count()
            ]);
        }

        // User
        //Manage user
        public function manage_user(){
            return view('admin.user.manage',[
                'users' => User::Paginate(6),
                'total_users' => User::count()
            ]);
        }
        //verify
        public function verify(){
            return view('admin.user.verify_user',[
                'users' => User::where('verification','0')->Paginate(6),
                'total_users' => User::where('verification','0')->count()
            ]);
        }
        public function verify_user($userId,$status){
            $update_verification=User::whereId($userId)->update([
             'verification'=>$status,
            ]);
            if($status==2){
                $notificationController = new NotificationController;
                $notificationController->unverify_user($userId);
                return back()->with('message','User Unverified');
               }
               else if($status==1){
                $notificationController = new NotificationController;
                $notificationController->verify_user($userId);
                return back()->with('message','User Verified');
               }
            if($update_verification){
             return back()->with('message','User Verified ');
            }
            return back()->with('message','User Verification Failed ');
 
         }
          //Block user
          public function block_user($userId,$status){
           $update_status=User::whereId($userId)->update([
            'status'=>$status,
           ]);
        //    dd($status);
           if($status==2){
            $notificationController = new NotificationController;
            $notificationController->blocked_user($userId);
            return back()->with('message','User Blocked');
           }
           else if($status==1){
            $notificationController = new NotificationController;
            $notificationController->unblocked_user($userId);
            return back()->with('message','User UnBlocked');
           }

           if($update_status){
            return back()->with('message','User Status Successfully Updated');
           }
           return back()->with('message','User Status Failed to Update');

        }
        public function profile($user_id){
            return view('admin.user.viewprofile',[
                'users'=> $user_id
            ]);
        }
        public function manage_profile($user_id){
            $cities= DropDownLocationController::getCities();
            $areas= Area::select()->get();
            return view('admin.user.manage_profile',[
                'users'=> $user_id,
                'cities'=>$cities,
                'areas'=>$areas,
            ]);
        }
        public function update_profile(Request $request, $user_id){
       
        
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
                'email'=>'required|email|unique:users,email,'. $user_id,
                'phone_number'=>'required',
                'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
    
            ]);
            $user = User::find( $user_id);
           if(request()->hasfile('avatar')){
            unlink($user->avatar);
            $avatar_name = time().'.'. $request->avatar->extension();
            $path='users/'.$avatar_name;
           $request->avatar->move(public_path('users'),$avatar_name);
           }
           $city_name = \App\Models\City::where('id', $request->city)->first();
           $area_name = \App\Models\Area::where('id', $request->area)->first();
           $formField['city']=  $city_name->city_name;
           $formField['area']=  $area_name->area_name;

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
           if($request->has('middle_name')!=NULL){
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
            $user->save();
           
            return redirect('/admin/user_manage')->with('message','Profile updated successfully!');
        }
        
        public function destroy_user(User $user){
            //Make sure logged in user is owner
            
           $user->delete();
           return back()->with('message','Property Deleted Successfully');
       }

       //all property
       public function allproperty(Request $request){

 
    
        $query = Property_detail::query();
       
       $sort_txt='';
            if($request->sort =='1'){
                $property_details=$query->orderBy('created_at', 'desc')->filter(request(['address','search']))->paginate(18);
                $sort_txt='1';
                return view('admin.property.allproperty' ,compact('property_details','sort_txt'));
            }
            else if($request->sort =='2'){
                $property_details=$query->where('sale_type', 'rent')->filter(request(['address','search']))->paginate(18);
                $sort_txt='2';
                return view('admin.property.allproperty' ,compact('property_details','sort_txt'));
            }
            else if($request->sort =='3'){
                $property_details=$query->where('sale_type', 'sale')->filter(request(['address','search']))->paginate(18);
                $sort_txt='3';
                return view('admin.property.allproperty' ,compact('property_details','sort_txt'));
            }
            else if(empty($request->category)){
                $property_details=$query->latest()->filter(request(['address','search']))->paginate(18);
                $sort_txt='';
                return view('admin.property.allproperty' ,compact('property_details','sort_txt'));
            }
        
        $property_details=$query->latest()->filter(request(['address','search']))->paginate(18);
        return view('admin.property.allproperty' ,compact('property_details','sort_txt'));
    
        }
        
}

