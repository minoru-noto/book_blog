@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:auto;">
   
 
 <div class="position-relative" style="height:auto;margin-bottom:400px;">
     
     
      <div class="mt-3 border-bottom pb-3">
            
            <div class="row">
                <div class="ml-4 col-md-1">
                    <img src="{{asset('img/user_08.png')}}" class="rounded-circle border border-dark img_size">
                </div>
                <div class="col-md-7">
                    <a href="{{route('user.show',$readItem->user_id)}}" class="text-dark">
                        {{$readItem->user->name}}
                    </a>
                </div>
                <div class="col-md-3">
                    {{$readItem->created_at->format('Y年m月d日')}}
                </div>
            </div>
            
            <div class="">
                
                <div class="card w-75 mx-auto">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{route('postItem.show',$readItem->postItem_id)}}">
                                <img src="{{asset($readItem->postItem->img_url)}}"  style="width:110px;height:140px;" class="">
                            </a>
                        </div>
                        <div class="col-md-8 mt-2">
                            <h5>{{$readItem->postItem->name}}</h5>
                            <p><a href="#">{{$readItem->postItem->author}}</a></p>
                        </div>
                    </div>
                  </div>
                </div>
                
            </div>
            
            <div class="mt-2 container">
                
                <div class="row">
                    <div class="offset-md-1 col-md-3 text-center">
                        <a href="{{route('comment_readItem.show',$readItem->id)}}" class="text-secondary"><i class="far fa-comment-alt mr-1"></i>コメント {{$comment_counts}}</a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="text-secondary"><i class="far fa-heart mr-1"></i>いいね！</a>
                    </div>
                </div>
            </div>
      
  </div>
  
    @foreach($comment_read_items as $comment_read_item)
    <div class="mt-3 border-bottom pb-3">
        
        <div class="row">
                <div class="ml-4 col-md-1">
                    <img src="{{asset('img/user_08.png')}}" class="rounded-circle border border-dark img_size">
                </div>
                <div class="col-md-7">
                    <a href="{{route('user.show',$comment_read_item->user_id)}}" class="text-dark">
                        {{$comment_read_item->user->name}}
                    </a>
                </div>
                <div class="col-md-3">
                    {{$comment_read_item->created_at->format('Y年m月d日')}}
                </div>
            </div>
            
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <p>{{$comment_read_item->content}}</p>
                </div>
            </div>
        
    </div>
    @endforeach
  
    <div class="container position-absolute" style="bottom:-300px;">
           <form action="{{route('comment_readItem.store')}}" method="POST">
               @csrf
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
               <input type="hidden" name="readItem_id" value="{{$id}}">
               
               <div class="row">
                   <div class="offset-md-1 col-md-9">
                       <textarea name="content" class="form-control"></textarea>
                   </div>
                   <div class="col-md-2">
                     <button type="submit" class="btn btn-primary p-3"><i class="fas fa-paper-plane text-white"></i></button>
                   </div>
               </div>
           </form>
       </div>
 </div>
      
     
      
  
  
   
   
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
