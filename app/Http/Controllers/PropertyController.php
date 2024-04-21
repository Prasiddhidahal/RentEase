<?php

namespace App\Http\Controllers;


use App\Models\Area;
use App\Models\User;
use App\Models\Reply;
use App\Models\Comment;

use Illuminate\Http\Request;
use App\Models\Property_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer_property_fav;
use App\Models\UserPropertyInteraction;

class PropertyController extends Controller
{
    public function all(Request $request){



    $query = Property_detail::query();

   $sort_txt='';
        if($request->sort =='1'){
            $property_details=$query->orderBy('created_at', 'asc')->filter(request(['search']))->paginate(18);
            $sort_txt='1';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='2'){
            $property_details=$query->where('sale_type', 'rent')->filter(request(['search']))->paginate(18);
            $sort_txt='2';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='3'){
            $property_details=$query->where('sale_type', 'sale')->filter(request(['search']))->paginate(18);
            $sort_txt='3';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        if($request->sort =='4'){
            $property_details=$query->where('type_of_property', 'Agriculture')->filter(request(['search']))->paginate(18);
            $sort_txt='4';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='5'){
            $property_details=$query->where('type_of_property', 'Residential')->filter(request(['search']))->paginate(18);
            $sort_txt='5';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='6'){
            $property_details=$query->where('category_of_property', 'House')->filter(request(['search']))->paginate(18);
            $sort_txt='6';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='7'){
            $property_details=$query->where('category_of_property', 'Land')->filter(request(['search']))->paginate(18);
            $sort_txt='7';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        if($request->sort =='8'){
            $property_details=$query->where('category_of_property', 'Flat')->filter(request(['search']))->paginate(18);
            $sort_txt='8';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='9'){
            $property_details=$query->where('category_of_property', 'Apartment')->filter(request(['search']))->paginate(18);
            $sort_txt='9';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='10'){
            $property_details=$query->where('category_of_property', 'Hostel')->filter(request(['search']))->paginate(18);
            $sort_txt='10';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='11'){
            $property_details=$query->orderBy('price', 'asc')->filter(request(['search']))->paginate(18);
            $sort_txt='11';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if($request->sort =='12'){
            $property_details=$query->orderBy('price', 'desc')->filter(request(['search']))->paginate(18);
            $sort_txt='12';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }
        else if(empty($request->category)){
            $property_details=$query->latest()->filter(request(['search']))->paginate(18);
            $sort_txt='';
            return view('property.allproperty' ,compact('property_details','sort_txt'));
        }

    $property_details=$query->latest()->filter(request(['search']))->paginate(18);
    return view('property.allproperty' ,compact('property_details','sort_txt'));

    }
    //show single Property
    public function show($id){

        if(Auth::check()){
        $currentuserid = Auth::user()->id;
        $id_check = Property_detail::find($id);

        if($currentuserid != $id_check->user_id){

            $post = Property_detail::find($id);
            $update = ['count' =>$post->count + 1,];
            Property_detail::where('id',$post->id)->update($update);

            $property_detail = DB::table('property_details')->where('id',$id)->get();
            $comments=Comment::orderby('id','desc')->get();
            $replies=Reply::all();
            $properties=Property_detail::all();
            // new
            UserPropertyInteraction::create([
                'user_id' => auth()->user()->id,
                'property_id' => $id,
                'interaction_type' => 'view', // Adjust based on your needs
            ]);
            $userInteractions = UserPropertyInteraction::all();

            // Implement your collaborative filtering logic here to get similar property IDs
            $similarPropertyIds = $this->getUserBasedSimilarProperties($userInteractions, $id);
    
            // Retrieve the actual property details for the similar property IDs
            $similarProperties = Property_detail::whereIn('id', $similarPropertyIds)->get();
          

            return view('property.single',compact('property_detail','comments','replies','properties', 'similarProperties'));

    }
        else{
            $property_detail = DB::table('property_details')->where('id',$id)->get();
            $comments=Comment::orderby('id','desc')->get();
            $replies=Reply::all();
            $properties=Property_detail::all();
            // new
            // new
            UserPropertyInteraction::create([
                'user_id' => auth()->user()->id,
                'property_id' => $id,
                'interaction_type' => 'view', // Adjust based on your needs
            ]);
            $userInteractions = UserPropertyInteraction::all();

            // Implement your collaborative filtering logic here to get similar property IDs
            $similarPropertyIds = $this->getUserBasedSimilarProperties($userInteractions, $id);
    
            // Retrieve the actual property details for the similar property IDs
            $similarProperties = Property_detail::whereIn('id', $similarPropertyIds)->get();
            
            return view('property.single',compact('property_detail','comments','replies','properties', 'similarProperties'));
        }
        }
        else{
            $post = Property_detail::find($id);
            $update = ['count' =>$post->count + 1,];
            Property_detail::where('id',$post->id)->update($update);

            $property_detail = DB::table('property_details')->where('id',$id)->get();
            $comments=Comment::orderby('id','desc')->get();
            $replies=Reply::all();
            $properties=Property_detail::all();
            // new
            $userInteractions = UserPropertyInteraction::all();

            // calling the algorithm function
            $similarPropertyIds = $this->getUserBasedSimilarProperties($userInteractions, $id);
    
            // Retrieve the actual property details for the similar property IDs
            $similarProperties = Property_detail::whereIn('id', $similarPropertyIds)->get();
           
            return view('property.single',compact('property_detail','comments','replies','properties', 'similarProperties'));
        }
    }
//collaborative filtering algorithm function
    private function getUserBasedSimilarProperties($userInteractions, $targetPropertyId)
    {
        // Get interactions of users who have interacted with the target property
        $targetPropertyInteractions = $userInteractions->where('property_id', $targetPropertyId);
    
        $similarUsers = $userInteractions
    ->whereIn('property_id', $targetPropertyInteractions->pluck('property_id'))
    ->where('user_id', '!=', Auth::id()) // Exclude the target user
    ->groupBy('user_id')
    ->map(function ($grouped) {
        return $grouped->count();
    })
    ->sortDesc()
    ->keys()
    ->toArray();
    // dd( $similarUsers);
        // Find property IDs that the similar users have interacted with
        $similarPropertyIds = $userInteractions
        ->whereIn('user_id', $similarUsers)
        ->where('property_id', '!=', $targetPropertyId) // Exclude the target property
        ->groupBy('property_id')
        ->map(function ($grouped) {
            return $grouped->count();
        })
        ->sortDesc()
        ->keys()
        ->toArray(); // Convert the result to an array
    // dd($similarPropertyIds);
        return $similarPropertyIds;
    }
    //show create form
    public function create(){
        if(auth()->user()->verification==1){
            $cities= DropDownLocationController::getCities();

            return view('property.create',[
                'cities'=>$cities,
            ]);

        }
        return back()->with('warning',"Please have your acccount Verified First");
    }
    //store Property data
    // 'road_size',
        // 'road_type',
        // 'build_year',
        // 'total_floor',
        // 'furnishing',
        // 'kitchen',
        // 'bed_room',
        // 'bath_room',
        // 'living_room',
        // 'parking',
        // 'amenities',

    public function store(Request $request){

        $formField= $request->validate([

        'sale_type'=>'required',
        'type_of_property'=>'required',
        'category_of_property'=>'required',
        'street_name'=>'required',
        'city'=>'required',
        'area'=>['required', 'integer'],
        'total_area'=>['required', 'integer'],
        'property_facing'=>'required',
        'property_photo.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'title'=>'required',
        'description'=>'required',
        'price_label'=>'required',
        'price'=>['required', 'integer'],
        'latitude'=>['required', 'numeric'],
        'longitude' => ['required', 'numeric'],


        ]);

        $city_name = \App\Models\City::where('id', $request->city)->first();
        $area_name = \App\Models\Area::where('id', $request->area)->first();
        $formField['city']=  $city_name->city_name;
        $formField['area']=  $area_name->area_name;
        $formField['province']=  $city_name->province;
        $property_photo = array();
        if($request->hasFile('property_photo')){
            if($req= $request->file('property_photo')){
            foreach($req as $r){

            $image_name=md5(rand(1000,10000));
            $ext=strtolower($r->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/storage/property_photos/';
            $image_url= $upload_path.$image_full_name;
            $r->move($upload_path,$image_full_name);
            $property_photo[]=$image_url;
        }

        }
         $formField['property_photo']=implode('|',$property_photo);
        }
         if($request->has('road_size')!=NULL){
            $formField['road_size'] = $request->road_size . ' ' . $request->road_size_type;

        }
        // dd($formField['road_size']);
        if($request->has('road_type')!=NULL){
            $formField['road_type']=  $request->road_type;

        }
        if ($request->has('built_area') && $request->built_area != null) {
            $formField['built_area'] = $request->built_area . ' ' . $request->built_area_type;
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
            $formField['amenities'] = implode(",", $request->amenities);


        }
        $formField['total_area']= $request->total_area. ' ' . $request->total_area_type;
            $formField['user_id']= auth()->id();

            // dd($formField);

            Property_detail::create($formField);
            // dd($request);

            return redirect('/home')->with('message','Property created successfully!');
        }


        //Show Edit Form
        public function edit(Property_detail $property_detail){
            $cities= DropDownLocationController::getCities();
            $areas= Area::select()->get();
            return view('property.edit',[
                'property_detail'=>$property_detail,
                'cities'=>$cities,
                'areas'=>$areas,
            ]);
        }
        //store property data
        public function update(Request $request,Property_detail $property_detail){
            //Make sure logged in user is owner
            if($property_detail->user_id != auth()->id()){
                abort(403,'Unauthorized Action');
            }

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
        $formField['total_area']= $request->total_area. ' ' . $request->total_area_type;
        $formField['user_id']= auth()->id();
        $property_detail->update($formField);

            return redirect('/property_manage')->with('message','Property updated successfully!');
        }
        //Delete property
        public function destroy(Property_detail $property_detail){
             //Make sure logged in user is owner
             if($property_detail->user_id != auth()->id()){
                abort(403,'Unauthorized Action');
            }

            $property_detail->delete();
            return back()->with('message','Property Deleted Successfully');
        }
        //Manage property
        public function manage(){
            return view('property.manage',[
                'properties' =>auth()->user()->properties()->get()
            ]);
        }

        public function fav($property_id){
            $fav_check= Customer_property_fav::where('property_detail_id',$property_id)->where('user_id',Auth::id())->first();
            if(isset($fav_check)){
                Customer_property_fav::where('property_detail_id',$property_id)->where('user_id',Auth::id())->delete();
                $post=Property_detail::find($property_id);
                $update = ['likes' =>$post->likes - 1,];
                Property_detail::where('id',$post->id)->update($update);
                $done='delete';
            }
            else{
                Customer_property_fav::create([
                    'user_id'=>auth()->id(),
                    'property_detail_id'=> $property_id

                ]);
                $property= Property_detail::where('id',$property_id)->first();
                $owner=User::where('id', $property->user_id)->first();
                $notificationController = new NotificationController;
                $notificationController->like(auth()->user()->id,$owner,$property);
                $post=Property_detail::find($property_id);
                $update = ['likes' =>$post->likes + 1,];
                Property_detail::where('id',$post->id)->update($update);
                $done='liked';
                UserPropertyInteraction::create([
                    'user_id' => auth()->id(),
                    'property_id' => $property_id,
                    'interaction_type' => 'like', // You can add more types like 'like', 'comment', etc.
                ]);

            }
            if($done=='liked'){
                return back()->with('message','Liked successfully!');

            }
            else {
                return back()->with('message','Liked Removed successfully!');

            }
        }
        public function favShow(){
            $fav= Customer_property_fav::where('user_id',Auth::id())->get();

            return view('dashboard.fav',[
                'favs'=>$fav,
                'fav_count'=>Customer_property_fav::where('user_id',Auth::id())->count()
        ]);
        }
        //Delete property
        public function fav_delete($property_id){
            Customer_property_fav::where('property_detail_id',$property_id)->where('user_id',Auth::id())->delete();
            $post=Property_detail::find($property_id);
            $update = ['likes' =>$post->likes - 1,];
            Property_detail::where('id',$post->id)->update($update);
           return back()->with('message','Favourite Removed Successfully');
       }

}
?>
