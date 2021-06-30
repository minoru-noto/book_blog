@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:auto;">
   
   <div class="d-flex pb-2 mt-4 border-bottom">
       
       <div class="ml-4 mr-4">
           <a href="{{route('user.show',$user->id)}}">＞戻る</a>
       </div>
   
       <div class="">
           <h5>{{$user->name}}さんへメッセージ</h5>
       </div>
       
    </div>
    
    <div class="mt-3 position-relative" style="height:auto;margin-bottom:200px;">
        
        @foreach($messages as $message)
        
        @if(Auth::user()->id !== $message->user_id)
           <div class="container">
               
               <div class="row">
                   <div class="col-md-1">
                       <img src="{{asset('img/user_08.png')}}" class="rounded-circle border border-dark img_size">
                    </div>
                   <div class="col-md-4 pt-2">
                       <p>{{$message->user->name}}</p>
                   </div>
               </div>
               
               <div class="row">
                   <div class="offset-md-1 col-md-7 p-3 mb-2 bg-success text-white rounded">
                      <p>{{$message->content}}</p>
                   </div>
               </div>
               <div class="row">
                   <div class="offset-md-6 col-md-3" style="">
                       <p class="text-size text-muted">{{$message->created_at->format('Y年m月d日')}}</p>
                   </div>
               </div>
               
           </div>
           
           @else
           
           <div class="container">
               
               <div class="row mb-1">
                   <div class="offset-md-9 col-md-2 text-right pt-2" style="">
                       <p>{{Auth::user()->name}}</p>
                    </div>
                   <div class="col-md-1" style="margin-left:-15px;">
                       <img src="{{asset('img/user_08.png')}}" class="rounded-circle border border-dark img_size">
                   </div>
               </div>
               
               <div class="row">
                   <div class="offset-md-4 col-md-7 p-3 mb-2 bg-success text-white rounded">
                      <p>{{$message->content}}</p>
                   </div>
               </div>
               <div class="row">
                   <div class="offset-md-8 col-md-3 text-right" style="">
                       <p class="text-size text-muted">{{$message->created_at->format('Y年m月d日')}}</p>
                   </div>
               </div>
               
           </div>
           
           
           @endif
           
           @endforeach
          
           
        
       
       <div class="container position-absolute" style="bottom:-100px;">
           <form action="{{route('message.store')}}" method="POST">
               @csrf
               <input type="hidden" name="to_user_id" value="{{$user->id}}">
               <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
               
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
