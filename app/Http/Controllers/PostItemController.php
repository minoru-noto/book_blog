<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostItem;

class PostItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('page.postItem.search');
        
    }
    
    public function search(Request $request)
    {
        
        
        $input_search = $request->input('search');
        
        
        $input_results = PostItem::where('name','like','%'.$input_search.'%')
                                ->orWhere('author','like','%'.$input_search.'%')
                                ->get();
                                
        // dd(count($input_results));
        
        if(count($input_results) == 0){
            
            return redirect(route('postItem.index'))->with('search_miss','そのような本は見つかりませんでした。');
            
        }
        
        
        return view('page.postItem.search_show',[
              'input_results' => $input_results,
              'input_search' => $input_search
        ]);
        
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postItem = PostItem::find($id);
        
        return view('page.postItem.show',[
            'postItem' => $postItem
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
