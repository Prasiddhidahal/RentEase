<?php

use App\Models\ChatRequest;
use App\Models\Property_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\CommentController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ChatRequestController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\LoginSecurityController;
use App\Http\Controllers\DropDownLocationController;
use Illuminate\Notifications\Notification;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Home
//Guest home
Route::get('/', function () {
    
        return view('home',[
            'property_details'=> Property_detail::latest()->filter(request(['search']))->paginate(6),
            'designs'=> Property_detail::latest()->inRandomOrder()
            ->limit(5)
            ->get(),
            'most_liked' => Property_detail::select()
                ->orderBy('likes', 'desc')
                ->paginate(6),
            'most_viewed' => Property_detail::select()
                ->orderBy('count', 'desc')
                ->paginate(6),
            
            
        ]);
    
 
});
Route::get('/home', function () {
    
    return view('property.home',[
        'property_details'=> Property_detail::latest()->filter(request(['search']))->paginate(6),
        'designs'=> Property_detail::latest()->inRandomOrder()
        ->limit(5)
        ->get(),
        'most_liked' => Property_detail::select()
            ->orderBy('likes', 'desc')
            ->paginate(6),
        'most_viewed' => Property_detail::select()
            ->orderBy('count', 'desc')
            ->paginate(6),
        
        
    ]);


})->middleware(['auth', '2fa','verified']);
Route::get('/about', function () {
    
    return view('about');


});

Route::get('/dashboarduser',[UserController::class,'dashboard'])->middleware(['auth', '2fa','verified']);

//Login
Route::get('/login/show', [LoginController::class, 'showLoginForm'])->name('login_show');
// Route::post('/login/validate', [LoginController::class, 'authenticate'])->name('login_store');
Route::post('/logout/user', [LoginController::class, 'logout']);



// //Logged in home
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Notification
// Route::get('/notify/{id}',[ChatRequestController::class, 'sendChatRequest'])->name('chatrequest.notify');
// Route::get('/notifications',[ChatRequestController::class, 'notification']);


// Property
//All property info
Route::get('/allproperty',[PropertyController::class, 'all'])->name('allproperty');
   
    
       
              
    
    
   

//Rent properties info
Route::get('/rent',[PropertyController::class, 'showRent']);
//Buy properties info
Route::get('/buy',[PropertyController::class, 'showBuy']);
//single property info
Route::get('/single/{property_detail}',[PropertyController::class, 'show']);
//Show Edit Form
Route::get('/property/{property_detail}/edit',[PropertyController::class, 'edit'])->middleware(['auth']);
// Update property
Route::put('/property/{property_detail}',[PropertyController::class, 'update'])->middleware(['auth']);
// Delete property
Route::delete('/property/{property_detail}',[PropertyController::class, 'destroy'])->middleware(['auth']);
//Create property
Route::get('/property/create',[PropertyController::class, 'create'])->middleware(['auth', '2fa','verified']);
//Store property data
Route::post('/property',[PropertyController::class, 'store'])->middleware(['auth', '2fa','verified']);
//Manage property
Route::get('/property_manage',[PropertyController::class,'manage'])->middleware('auth');

//Drop Down

Route::get('areas', [DropDownLocationController::class, 'getAreas'])->name('getAreas');

Route::get('cities', [DropDownLocationController::class, 'getCities'])->name('getCities');

// //Auth
// Auth::routes([
//     'login'=> '/components/modal/login',
//     'verify' => true
// ]);
// // Chat
// Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
// Route::get('/messages', [ChatController::class, 'getMessages'])->name('chat.messages');
// Route::post('/messages', [ChatController::class, 'sendMessage'])->name('chat.sendMessage');

//Chat request
//Send chat request
Route::get('/chat/{id}', [ChatRequestController::class, 'send']);
//delete chat request
Route::delete('/request/{chatrequest}',[ChatRequestController::class, 'destroy'])->middleware('auth')->name('request.destroy');
Route::put('/request/accept/{chatrequest}',[ChatRequestController::class, 'accept'])->middleware('auth')->name('request.accept');
Route::put('/request/decline/{chatrequest}',[ChatRequestController::class, 'decline'])->middleware('auth')->name('request.decline');

//Manage Chat request
Route::get('/request',[ChatRequestController::class,'manage'])->middleware('auth');

//User
//manage user
Route::get('/profile',[UserController::class,'profile'])->middleware(['auth', '2fa','verified']);

Route::get('/manage_profile',[UserController::class,'manage_profile'])->middleware(['auth', '2fa','verified'])->name('manage_profile');
// Route::put('/update_profile',[UserController::class,'update_profile'])->middleware(['auth', '2fa','verified'])->name('update_profile');
Route::match(['put', 'patch'], '/update_profile', [UserController::class,'update_profile'])
    ->middleware(['auth', '2fa','verified'])
    ->name('update_profile');

//Google authenticator
Route::group(['prefix'=>'2fa'], function(){
    Route::get('/',[LoginSecurityController::class,'show2faForm']);
    Route::post('/generateSecret',[LoginSecurityController::class,'generate2faSecret'])->name('generate2faSecret');
    Route::post('/enable2fa',[LoginSecurityController::class,'enable2fa'])->name('enable2fa')->middleware('web');
    Route::post('/disable2fa',[LoginSecurityController::class,'disable2fa'])->name('disable2fa')->middleware('web');

    // 2fa middleware
    Route::match(['get', 'post'], '/2faVerify', function () {
        if (URL::previous() !== route('2faVerify')) {
            return redirect(URL::previous());
        } else {
            return redirect('/home');
        }
    })->name('2faVerify')->middleware(['2fa']);
    
});

// Route::post('/chat/create', [ChatController::class, 'create'])->name('chat.create');


//favorite
Route::get('/fav/{proId}',[PropertyController::class,'fav'])->middleware('auth');

Route::get('/fav',[PropertyController::class,'favShow'])->middleware('auth');

// Route for adding a new comment to a post
Route::post('/add_comment', [HomeController::class,'add_comment'])->middleware(['auth', '2fa','verified'])->name('add_comment');
Route::post('/add_reply', [HomeController::class,'add_reply'])->middleware(['auth', '2fa','verified'])->name('add_reply');
// Delete commet
Route::delete('/comment/{comment_id}',[HomeController::class, 'destroy_comment'])->middleware(['auth']);
Route::delete('/reply/{reply_id}',[HomeController::class, 'destroy_reply'])->middleware(['auth']);



// Route for deleting a comment
// Route::delete('/comments/{comment}', CommentController::class,'destroy')->name('comments.destroy');
Route::delete('/noti/destrory/{id}',[NotificationController::class,'delete'])->name('notifications.destroy');
Route::get('/noti/markasread',[NotificationController::class,'markasread'])->name('notifications.markasread');
Route::get('/noti/markasread/{id}',[NotificationController::class,'markread'])->name('notification.markasread');


// ADMIN Route
Route::prefix('admin')->group(function(){
   Route::get('/login',[AdminController::class,'loginShow'])->name('login_admin');
   Route::post('/login/owner',[AdminController::class,'login'])->name('admin.login');
   // Home
   Route::get('/home',[AdminController::class,'index'])->name('admin.index')->middleware('admin');
   // User Home
   Route::get('/user_home',function () {
    return view('admin.property.home',[
        'property_details'=> Property_detail::latest()->filter(request(['search']))->paginate(6),
        'designs'=> Property_detail::latest()->inRandomOrder()
        ->limit(5)
        ->get(),
        'most_liked' => Property_detail::select()
            ->orderBy('likes', 'desc')
            ->paginate(6),
        'most_viewed' => Property_detail::select()
            ->orderBy('count', 'desc')
            ->paginate(6),
        
        
    ]);


})->middleware('admin');
   //Property
    //single property info
    Route::get('/property/show/{property_detail}',[AdminController::class, 'show'])->middleware('admin');
    //Show Edit Form
    Route::get('/property/{property_detail}/edit',[AdminController::class, 'edit'])->middleware('admin');
    // Update property
    Route::put('/property/{property_detail}',[AdminController::class, 'update'])->middleware('admin');
    // Delete property
    Route::delete('/property/{property_detail}',[AdminController::class, 'destroy'])->middleware('admin');
    //Create property
    Route::get('/property/create',[AdminController::class, 'create'])->middleware('admin');
    //Store property data
    Route::post('/property',[AdminController::class, 'store'])->middleware('admin');
    //Manage property
    Route::get('/property_manage',[AdminController::class,'manage'])->middleware('admin');
    //All property info
Route::get('/allproperty', [AdminController::class,'allproperty']);

    // User manage
    Route::get('/user_manage',[AdminController::class,'manage_user'])->middleware('admin');
    //verify
    Route::get('/verify',[AdminController::class,'verify'])->middleware('admin');

    //view user detail
    Route::get('/profile/{user_id}',[AdminController::class,'profile'])->middleware('admin');
 //Block user 
 Route::get('/verify/{userId}/{status}',[AdminController::class,'verify_user'])->middleware('admin');
    // Update User
    Route::get('/{user_id}/edit',[AdminController::class, 'manage_profile'])->middleware('admin');
    Route::match(['put', 'patch'], '/update_profile/{user_id}', [AdminController::class,'update_profile'])->middleware('admin');
 // Delete User
 Route::delete('delete/{user}',[AdminController::class, 'destroy_user'])->middleware('admin');

    //Block user
    Route::get('/block/{userId}/{status}',[AdminController::class,'block_user'])->middleware('admin');
});
// ADMIN Route end

//Notification
Route::get('/blockuser-notification',[NotificationController::class,'blocked_user']);
Route::get('/chatrequest-notification',[NotificationController::class,'chatrequest']);

