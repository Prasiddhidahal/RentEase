<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Notifications\VerifyUser;
use App\Notifications\BlockedUser;
use App\Notifications\UnverifyUser;
use App\Notifications\UnblockedUser;
use App\Notifications\LikeNotification;
use App\Notifications\CommentNotification;
use App\Notifications\ChatRequestNotification;


class NotificationController extends Controller
{
    
    public function blocked_user($userId){
       
        $user=User::where('id', $userId)->first();
        
        $messages['hi']= "Hey {$user->user_name}";
        $messages['text']= "Your Account have been blocked due to your suspious activities. 
        If your have any problem you can contact to our office in this number: 98******* or you can mail us in this email:sa*********@gmail.com";

        $user->notify(new BlockedUser($messages));
       
    }
    public function unblocked_user($userId){
       
        $user=User::where('id', $userId)->first();
        
        $messages['hi']= "Hey {$user->user_name}";
        $messages['text']= "Your Account have been unblocked and Please takecare in the future to not repeat the same activities. 
        If your have any problem you can contact to our office in this number: 98******* or you can mail us in this email:sa*********@gmail.com";

        $user->notify(new UnblockedUser($messages));
       
    }
    public function unverify_user($userId){
       
        $user=User::where('id', $userId)->first();
        
        $messages['hi']= "Hey {$user->user_name}";
        $messages['text']= "Your Account haven't been verified please check your details and update it. 
        If your have any problem you can contact to our office in this number: 98******* or you can mail us in this email:sa*********@gmail.com";

        $user->notify(new UnverifyUser($messages));
       
    }
    public function verify_user($userId){
       
        $user=User::where('id', $userId)->first();
        
        $messages['hi']= "Hey {$user->user_name}";
        $messages['text']= "Your Account have been vefified and from now onwards you can post your properties. 
        If your have any problem you can contact to our office in this number: 98******* or you can mail us in this email:sa*********@gmail.com";

        $user->notify(new VerifyUser($messages));
       
    }
    public function chatrequest($clientId,$ownerId,$property){
       
        
            $user=User::where('id', $clientId)->first();
            $owner=User::where('id', $ownerId)->first();
            $owner->notify(new ChatRequestNotification($user,$property));
        
        // return view('dashboard');
       
    }
    public function like($clientId,$owner,$property){
       
        
        $user=User::where('id', $clientId)->first();
       
        $owner->notify(new LikeNotification($user,$property));
    
    // return view('dashboard');
   
}
public function comment($clientId,$owner,$property){
       
        
    $user=User::where('id', $clientId)->first();
    
    $owner->notify(new CommentNotification($user,$property));

// return view('dashboard');

}
public function delete($id){

    Notification::where('id', $id)->delete();
    return back()->with('message','Notification Successfully Deleted');
   
    
}
public function markasread(){

    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back()->with('message','Notifications Read Successfully');
   
    
}
// public function markread($id){
//     auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
//     // return response()->json(['message' => 'Notification marked as read']);
//     // $notification = auth()->user()->unreadNotifications->find($id);
//     // $notification->markAsRead();
//     return redirect()->back()->with('message','Notification Read Successfully');
// }
public function markread($id){
    // dd($id);
    auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
    return redirect()->back()->with('message','Notifications Read Successfully');

}
}
