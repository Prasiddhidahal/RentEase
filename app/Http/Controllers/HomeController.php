<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Reply;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Property_detail;
use PhpParser\Builder\Property;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', '2fa','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('property.home'
        ,[
            'property_details'=> Property_detail::latest()->filter(request(['address','search']))->paginate(6),
            'designs'=> Property_detail::latest()->inRandomOrder()
        ->limit(5)
        ->get(),
            'most_liked' => Property_detail::select()
            ->orderBy('likes', 'desc')
            ->paginate(6),
            'most_viewed' => Property_detail::select()
            ->orderBy('count', 'desc')
            ->paginate(6),
        
        ]
        
    )->with('message','Logged in successfully!');
    }
    public function add_comment(Request $request)
    {
        $post=Property_detail::find($request->property_id);
        $update = ['comments' =>$post->comments + 1,];
        Property_detail::where('id',$post->id)->update($update);
       
        $owner=User::where('id', $post->user_id)->first();
        $notificationController = new NotificationController;
        $notificationController->comment(auth()->user()->id,$owner,$post);
    $comment = new comment;
    $comment->name=Auth::user()->user_name;
    $comment->property_detail_id=$request->property_id;
    $comment->user_id=Auth::user()->id;
    $comment->comment=$request->comment;
    $comment->save();
    return redirect()->back()->with('success', 'Comment added successfully.');
    }
    public function add_reply(Request $request)
    {
        // dd($request);
        $post=Property_detail::find($request->property_id);
        $update = ['comments' =>$post->comments + 1,];
        Property_detail::where('id',$post->id)->update($update);
    $reply = new reply;
    $reply->name=Auth::user()->user_name;
    $reply->user_id=Auth::user()->id;
    $reply->property_detail_id=$request->property_id;
    $reply->comment_id=$request->commentId;
    $reply->reply=$request->reply;
    $reply->save();
    
    return redirect()->back()->with('message','Commented successfully!');
    }
    //Delete comment
    public function destroy_comment($id){
        $comment=Comment::find($id);
        //Make sure logged in user is owner
        if($comment->user_id != auth()->user()->id){
            abort(403,'Unauthorized Action');
        }
        $id=$comment->property_detail_id;
        
        
        $comment->delete();
        $post=Property_detail::find($id);
        $comment_count=Comment::where('property_detail_id',$id)->count();


$reply_count=Reply::where('property_detail_id',$id)->count();

        $total=$comment_count+ $reply_count;
        
        
            $update = ['comments' => $total];
            Property_detail::find($post->id)->update($update);
        return back()->with('message','Comment Deleted Successfully');
    }
// public function destroy_comment($id){
//     $comment=Comment::find($id);
//     //Make sure logged in user is owner
//     if($comment->user_id != auth()->user()->id){
//         abort(403,'Unauthorized Action');
//     }
//     $post=Property_detail::find($comment->property_detail_id);
//     // dd($comment, $post);
//     $comment_count=Comment::where('property_detail_id',$comment->property_detail_id)->count();
//     $reply_count=Reply::where('property_detail_id',$comment->property_detail_id)->count();
//     $total=$comment_count+ $reply_count;
//     $update = ['comments' =>$total,];
//     Property_detail::find($post->id)->update($update);
//     $comment->delete();
       
//     return back()->with('message','Comment Deleted Successfully');
// }

   //Delete reply
//    public function destroy_reply($id){
//     // dd($comment);
//     $reply=Reply::find($id);
//     //Make sure logged in user is owner
//     if($reply->user_id != auth()->user()->id){
//        abort(403,'Unauthorized Action');
//    }
//    $post=Property_detail::find($reply->property_id);
//         $update = ['comments' =>$post->comments - 1,];
//         Property_detail::where('id',$post->id)->update($update);
//    $reply->delete();
//    return back()->with('message','Reply Deleted Successfully');
// }
public function destroy_reply($id){
    $reply = Reply::find($id);

    //Make sure logged in user is owner
    if($reply->user_id != auth()->user()->id){
        abort(403,'Unauthorized Action');
    }

    $post = Property_detail::find($reply->property_id);

    if ($post) {
        $update = ['comments' => $post->comments - 1];
        Property_detail::where('id', $post->id)->update($update);
    }

    $reply->delete();
    return back()->with('message', 'Reply Deleted Successfully');
}
}
