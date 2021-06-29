@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:700px;">
    
    @if (session('search_miss'))
        <div class="p-3 mb-3 mt-5 bg-danger text-white w-50 mx-auto  rounded">
            <div class="text-center">
            <i class="fas fa-book-open"></i>  {{ session('search_miss') }}
            </div>
        </div>
    @endif
    
    <div style="margin-top:100px;">
        
    <div class="container mt-5">
        <div class="row">
            <div class="offset-md-3 col-md-1 text-center pt-2">
                <h4><i class="fas fa-search fa-2x"></i></h4>
            </div>
            <div class="col-md-8">
                <p class="text-size-lg">作品・著者・タグ<br>キーワードでさがす</p>
            </div>
        </div>
    </div>
   
   
   <!-----------------------------検索フォーム-------------------------------->
   <div class="container">
    <br/>
    	<div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12">
                
                <form action="{{route('postItem.search')}}" method="POST" class="card card-sm">
                    @csrf
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" name="search" type="search" placeholder="本のタイトル、著者名、タグ">
                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit">検索</button>
                        </div>
                        <!--end of col-->
                    </div>
                </form>
                
            </div>
            <!--end of col-->
        </div>
    </div>  
    </div>
    
    
    
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
