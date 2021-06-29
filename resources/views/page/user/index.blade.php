@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:800px;">
   
  <div class="container mt-3 border-bottom pb-5">
      
      <div class="row">
          <div class="offset-md-1 col-md-2 text-center">
              <img src="{{asset('img/user_08.png')}}" class="rounded-circle border border-dark img_size">
          </div>
          <div class="col-md-8 pt-2">
              <h5><a href="#">{{Auth::user()->name}}さん&nbsp;&nbsp;＞</a></h5>
              <div class="mt-3">
                  <a class="btn btn-outline-dark">本棚紹介の編集</a>
              </div>
              <div class="text-right mt-3">
                  <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                  
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fas fa-cog"></i>  設定</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i>  プロフィール編集</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
  <!--<div>-->
    
  <!--  <div class="container">-->
  <!--    <div class="row">-->
  <!--      <div class="col-md-"></div>-->
  <!--    </div>-->
  <!--  </div>-->
    
  <!--</div>-->
  
  <div class="mt-2" style="height:520px;">
      
      <div class="container">
          
          <div class="row">
              
              @foreach($readItems as $readItem)
              <div class="col-md-4 text-center mb-3 pb-2 pt-2 border-bottom">
                <a href="{{route('postItem.show',$readItem->postItem_id)}}">
                  <img src="{{asset($readItem->postItem->img_url)}}" class="img-fluid book_img">
                </a>
              </div>
              @endforeach
             
              
          </div>
          
      </div>
      
  </div>
   
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
