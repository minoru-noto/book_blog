@extends('layouts.app')

@section('content')

<div class="bg-white w-100 position-relative border border-dark" style="height:auto;">
   
 
 <div class="mt-4">
     
     <div class="container" style="height:auto;margin-bottom:150px;">
         
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
         
         <div class="">
          
             <div class="row">
              <div class="col-md-8">
                <h5 class="font-weight-bold pt-3 pl-4">読者の感想</h5>
              </div>
              <div class="col-md-4 pt-3">
                 <a href="{{route('comment.create',['id' => $postItem->id ])}}" class="btn btn-outline-info"><i class="fas fa-pen mr-2"></i>コメントする</a>
              </div>
             </div>
             
             
             @foreach($commentItems as $commentItem)
             <div class="pl-4 pr-4 mt-4 border-bottom pb-3">
              
                 <div class="row ">
                    <div class="col-md-1">
                      <img src="{{asset('img/user_08.png')}}" class="rounded-circle border border-dark img_size">
                    </div>
                    <div class="col-md-7 ml-2 pt-2">
                     <a href="#">{{$commentItem->user->name}}</a>
                    </div>
                    <div class="col-md-3 pt-2">
                      <p class="text-muted">{{$commentItem->created_at->format('Y年m月d日')}}</p>
                    </div>
                 </div>
                 
                 
                 <div class="bg-light p-3 mt-2" style="height:auto">
                   <div class="">
                    <p>
                        
                        @for($i = 0; $i < $commentItem->rank; $i++)
                            <i class="far fa-star text-warning"></i>
                        @endfor
                        
                    </p>
                  </div>
                    <p>
                      {{$commentItem->content}}
                   </p>
                 </div>
                 
            </div>
            @endforeach
             
             
             
         </div>
         
     </div>
     
 </div>
  
    
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
