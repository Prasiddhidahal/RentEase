<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ChatRequest;
use App\Models\Property_detail;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Notification;

class ChatRequestController extends Controller
{


public function sendChatRequest(Request $request,$id) {
   $sender_id = Auth::id(); // Assuming you're using Laravel's built-in authentication
   $recipient_id = $id; // Assuming you're passing the recipient's ID via the form or AJAX request
   $sender_name = User::find($sender_id)->name; // Get the sender's name

   // Create a new notification for the recipient
//    $notification = new Notification();
//    $notification->user_id = $recipient_id;
//    $notification->message = "You have a new chat request from " . $sender_name;
//    $notification->save();

   // You can also return a response or redirect to a success page
   return back()->with('success', 'Chat request sent successfully!');
}
    //show single listing
public function send($id){
    $property_detail=Property_detail::where('id', $id)->first();
    // dd($property_detail);
    $notificationController = new NotificationController;
    $notificationController->chatrequest(auth()->user()->id,$property_detail->user_id,$property_detail);
    $chat= new ChatRequest();
    $chat->client_id = auth()->user()->id;
    $chat->owner_id = $property_detail->user_id;
    $chat->Status=0;
    $chat->property_id = $property_detail->id;
    $chat->save();
    return back()->with('message','Request Sent Successfully');
    // return redirect()->route('chatrequest.notify', ['id' => $property_detail->user_id]);

    // return redirect()->route('chatrequest.notify',['id'=>$property_detail->user_id]);
    // return redirect('/notify/{{}}');

}
public function manage(){
    return view('request.message',
    [
        'sents' =>auth()->user()->chatrequestsents()->get(),
        'receiveds' =>auth()->user()->chatrequestreceiveds()->get()
        // 'properties'=>
    ]
);
}
public function destroy($chatrequest) {

    ChatRequest::where('id', $chatrequest)->delete();
    return back()->with('message', 'Request Deleted Successfully');
}


public function accept($chatrequest) {


    $chat=ChatRequest::where('id', $chatrequest)->first();
    $chat->Status=2;
    $chat->update();
    return back()->with('message', 'Request Accepted Successfully');
}


public function decline($chatrequest) {

    $chat=ChatRequest::where('id', $chatrequest)->first();
    $chat->Status=1;
    $chat->update();
    return back()->with('message', 'Request Declined Successfully');
}

// public function notify($id)
// {
//     if (auth()->user()) {
//         $user = User::whereId($id)->first();
//         auth()->user()->notify(new ChatRequestNotification($user));
//     }

//     return redirect(URL::previous())->with('message', 'Message request sent successfully!');
// }
public function markAsRead(Request $request)
{
    $user = $request->user();
    $chatRequests = $user->chatrequestreceiveds()->where('status', 'pending')->get();

    if(isset($chatRequests)) {
        foreach($chatRequests as $chatRequest) {
            $chatRequest->status = 'read';
            $chatRequest->save();
        }
    }

    return response()->json(['success' => true]);
}

public function notification() {

    return view('notification');
}
}
?>
