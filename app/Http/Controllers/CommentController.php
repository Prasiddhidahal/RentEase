<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;

use Illuminate\Http\Request;
use App\Models\Property_detail;
use App\Models\UserPropertyInteraction;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($property_id)
    {
        $comments = Comment::where('property_detail_id',$property_id);
        return view('property.show', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
        //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    // dd($request);
    
        $validatedData = $request->validate([
            'body' => 'required|string',
            'property_detail_id' => 'required|exists:property_details,id'
        ]);
       
               
        $property= Property_detail::where('id',$validatedData['property_detail_id'])->first();
        $owner=User::where('id', $property->user_id)->first();
        $notificationController = new NotificationController;
        $notificationController->comment(auth()->user()->id,$owner,$property);
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->property_detail_id = $validatedData['property_detail_id'];
        $comment->body = $validatedData['body'];
        $comment->save();
        UserPropertyInteraction::create([
            'user_id' => auth()->user()->id,
            'property_id' => $validatedData['property_detail_id'],
            'interaction_type' => 'comment', // Adjust based on your needs
        ]);
    
        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
        //
    // }/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
