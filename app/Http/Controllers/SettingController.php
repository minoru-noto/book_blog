<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.setting.index');
    }
    
    public function edit($id)
    {
        return view('page.setting.password');
    }
    
    public function update(Request $request)
    {
        
        // dd($request);
        
        $user = User::find(\Auth::user()->id);
        
        if($request->input('password') == $request->input('confirm_password')){
            
            $user->password = Hash::make($request->input('password'));
            
            return redirect(route('home'))->with('password_success','パスワードを変更しました');
            
        }else{
            
            return redirect(route('home'))->with('password_miss','パスワードと確認用パスワードが違います');
            
        }
        
    }

    
    
}
