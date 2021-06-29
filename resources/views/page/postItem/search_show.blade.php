@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:1100px;">
    
    
    <div class="container mt-3">
        
        <div class="text-center">
            <p>{{$input_search}}の検索結果</p>
        </div>
        
        @foreach($input_results as $input_result)
        <div class="row border p-3">
            
            <div class="col-md-2">
                <a href="{{route('postItem.show',$input_result->id)}}">
                    <img src="{{asset($input_result->img_url)}}" style="height:130px;width:120px;" class="img-fluid">
                </a>
            </div>
            
            <div class="col-md-9">
                <h5>{{$input_result->name}}</h5>
                <p class="text-muted">{{$input_result->author}}　　本</p>
                
                <div class="d-flex">
                    <div class="mr-2">
                        <p><i class="far fa-user mr-2"></i>300</p>
                    </div>
                    <div>
                        <p><i class="far fa-comment mr-2"></i>100</p>
                    </div>
                </div>
                
                <div class="">
                    
                    <div class="d-flex justify-content-end">
                        <div class="mr-3">
                            <button type="button" class="btn btn-outline-primary"><i class="fas fa-pencil-alt mr-2"></i>書く</button>
                        </div>
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            読み終わった
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form action="{{route('readItem.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="postItem_id" value="{{$input_result->id}}">
                            
                             <button type="submit" class="dropdown-item">読み終わった</button>
                            </form>
                            <a class="dropdown-item" href="#">積読</a>
                          </div>
                        </div>
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
