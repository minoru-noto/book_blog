<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $message = new Message();
        
        $message->user_id = $request->input('user_id');
        $message->to_user_id = $request->input('to_user_id');
        $message->content = $request->input('content');
        $message->save();
        
        return redirect(route('message.show',$message->to_user_id));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // dd($id);
        
        $user = User::find($id);
        
        $messages = Message::where('user_id',\Auth::user()->id)
                           ->where('to_user_id',$id)
                           ->orwhere('user_id',$id)
                           ->where('to_user_id',\Auth::user()->id)
                           ->get();
                           
        $messages->load('user');
                           
        // dd($messages);
        
       
        
        return view('page.message.show',[
            'user' => $user,
            'messages' => $messages,
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

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
