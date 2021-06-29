<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReadItem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $readItems = ReadItem::orderBy('created_at','desc')->get();
        $readItems->load('postItem','user');
        
        return view('home',[
            'readItems'=> $readItems    
        ]);
    }
}
