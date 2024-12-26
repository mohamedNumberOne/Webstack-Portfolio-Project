<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show_msg()
    {
        $all_msg = Message::all() ;
        return view("show_msgs" , compact('all_msg') ) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add_msg(StoreMessageRequest $request)
    {
 
        Message::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'subject' => $request ->subject ,
            'message' => $request->message,
            'about' => $request->about,
            'ip_user' => $request-> ip()  

        ]) ;
       return redirect()-> back()-> with("success" , "The message was sent successfully !  " ) ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
