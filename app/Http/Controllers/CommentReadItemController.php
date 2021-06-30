<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReadItem;
use App\CommentReadItems;

class CommentReadItemController extends Controller
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
        
        $comment_read_item = new CommentReadItems();
        
        $comment_read_item->user_id = $request->input('user_id');
        $comment_read_item->readItem_id = $request->input('readItem_id');
        $comment_read_item->content = $request->input('content');
        $comment_read_item->save();
        
        return redirect(route('comment_readItem.show',$comment_read_item->readItem_id));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $readItem = ReadItem::find($id);
        $readItem->load('postItem','user');
        
        $comment_read_items = CommentReadItems::where('readItem_id',$id)->get();
        $comment_read_items->load('user');
        
        $comment_counts = count($comment_read_items);
        
        // dd($comment_count);
        
        return view('page.comment_readItem.show',[
            'readItem' => $readItem,
            'comment_read_items' => $comment_read_items,
            'comment_counts' => $comment_counts,
            'id' => $id,
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
