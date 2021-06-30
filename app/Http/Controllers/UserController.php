<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReadItem;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $readItems = ReadItem::where('user_id',\Auth::user()->id)->get();
        $readItems->load('postItem');
        
        // dd($readItems);
        
        return view('page.user.index',[
            'readItems' => $readItems
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $readItems = ReadItem::where('user_id',$id)->get();
        $readItems->load('postItem');
        
        $user = User::where('id',$id)->first();
        
        // dd($readItems);
        
        return view('page.user.show',[
            'readItems' => $readItems,
            'user' => $user
        ]);
        
        
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::destroy($id);
        
        return redirect('/login');
        
    }
}
