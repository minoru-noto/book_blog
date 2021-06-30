@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:auto;">
   
   @if (session('read_success'))
    <div class="p-3 mb-3 mt-5 bg-success text-white w-50 mx-auto  rounded">
        <div class="text-center">
        <i class="fas fa-book-open"></i>  {{ session('read_success') }}
        </div>
    </div>
    @endif
    
   @if (session('read_miss'))
    <div class="p-3 mb-3 mt-5 bg-danger text-white w-50 mx-auto  rounded">
        <div class="text-center">
        <i class="fas fa-book-open"></i>  {{ session('read_miss') }}
        </div>
    </div>
    @endif
    
    
    @if (session('password_success'))
    <div class="p-3 mb-3 mt-5 bg-success text-white w-50 mx-auto  rounded">
        <div class="text-center">
        <i class="fas fa-lock"></i>  {{ session('password_success') }}
        </div>
    </div>
    @endif
   
    
   @if (session('password_miss'))
    <div class="p-3 mb-3 mt-5 bg-danger text-white w-50 mx-auto  rounded">
        <div class="text-center">
        <i class="fas fa-lock"></i>  {{ session('password_miss') }}
        </div>
    </div>
    @endif
    
    
    <div style="height:auto;margin-bottom:100px;">
        
        @foreach($readItems as $readItem)
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
                        <a href="#" class="text-secondary"><i class="far fa-comment-alt mr-1"></i>コメント</a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="text-secondary"><i class="far fa-heart mr-1"></i>いいね！</a>
                    </div>
                </div>
            </div>
            
        </div>
        @endforeach
        
    </div>
   
   
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
