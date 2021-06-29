<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReadItem;

class ReadItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        
        $same_readItem = ReadItem::where('postItem_id',$request->postItem_id)
                                   ->where('user_id',\Auth::user()->id)
                                   ->get();
        

        if(count($same_readItem) == 1){
            return redirect(route('home'))->with('read_miss','その本はすでに読み終わっています。');
        }
        
        $readItem = new ReadItem();
        
        $readItem->user_id = $request->input('user_id');
        $readItem->postItem_id = $request->input('postItem_id');
        $readItem->save();
        
        return redirect(route('home'))->with('read_success','本棚に追加しました');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
