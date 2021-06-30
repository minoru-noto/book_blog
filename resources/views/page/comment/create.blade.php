@extends('layouts.app')

@section('content')

<div class="bg-white w-100 position-relative border border-dark" style="height:700px;">
   
   
   
   
   <div class="container mt-4">
       
            @if (session('comment_success'))
                <div class="p-3 mb-3 mt-5 bg-success text-white w-50 mx-auto  rounded">
                    <div class="text-center">
                    {{ session('comment_success') }}
                    </div>
                </div>
            @endif
       
       
       <div class="text-center">
           <h4>評価と感想</h4>
       </div>
       
       
       <div class="mt-5">
           <form action="{{route('comment.store')}}" method="POST">
            @csrf
            <input type="hidden" name="postItem_id" value="{{$comment_id}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            
            <div class="">
                <h5 class="ml-2">評価(1～5)</h5>
                <select class="form-select form-control" name="rank" aria-label="Default select example">
                  <option selected>選択してください</option>
                  <option value="1">☆</option>
                  <option value="2">☆☆</option>
                  <option value="3">☆☆☆</option>
                  <option value="4">☆☆☆☆</option>
                  <option value="5">☆☆☆☆☆</option>
                </select>
            </div>
            
            <div class="mt-5">
                <h5 class="ml-2">感想(100文字以内)</h5>
                <textarea class="form-control" name="content" rows="10"></textarea>
            </div>
            
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary w-75"><i class="far fa-edit mr-2"></i>投稿する</button>
            </div>
            
           </form>
       </div>
   </div>
 
 
    
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
