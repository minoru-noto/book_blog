@extends('layouts.app')

@section('content')

<div class="bg-white w-100 position-relative border border-dark" style="height:800px;">
   
 
 <div class="mt-4">
     
     <div class="container">
         
         <div class="row border-bottom pb-3">
             <div class="offset-md-1 col-md-3">
                 <img src="{{asset($postItem->img_url)}}" width="100%" height="100%"  class="img-fluid">
             </div>
             <div class="col-md-8 mt-3">
                 <h4>{{$postItem->name}}</h4>
                 <p><a href="#">{{$postItem->author}}</a></p>
                 <p class="text-muted">ジャンル　：　本</p>
                 <div class="mt-5">
                     <a href="#" class="btn btn-info text-white w-75">詳細を見る</a>
                 </div>
             </div>
         </div>
         
         <div class=" border-bottom pb-3">
             <h5 class="font-weight-bold pt-3 pl-4">作品紹介</h5>
             <div class="pl-4 pr-4">
                 <p>
                     {{$postItem->content}}
                 </p>
             </div>
         </div>
         
     </div>
     
 </div>
  
    
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
