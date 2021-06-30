@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:700px;">
   
  <div class="mt-5">
      
      <div>
          <h5 class="text-muted ml-3">ブクログの設定</h5>
      </div>
      
      <div>
          
          <div class="container border-top border-bottom pt-3 pb-2">
              
              <div class="row">
                  <div class=" offset-md-1 col-md-9">
                    <p><a href="{{route('setting.edit',Auth::user()->id)}}" class="text-dark"><i class="fas fa-key mr-2"></i>パスワード変更</a></p>
                  </div>
                  <div class="col-md-2">
                    <p><a href="{{route('setting.edit',Auth::user()->id)}}" class="text-dark"><i class="fas fa-chevron-right"></i></a></p>
                  </div>
              </div>
              
          </div>
          
          <div class="container border-bottom pt-3 pb-2">
              
              <div class="row">
                  <div class=" offset-md-1 col-md-9">
                    <p>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="text-dark"><i class="fas fa-sign-out-alt mr-2"></i>ログアウト</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </p>
                  </div>
                  <div class="col-md-2">
                    <p>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="text-dark"><i class="fas fa-chevron-right"></i></i></a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </p>
                  </div>
              </div>
              
          
      </div>
          <div class="container border-bottom pt-2 pb-1">
              
              <div class="row">
                  <div class=" offset-md-1 col-md-9">
                    <p>
                      <form action="{{route('user.destroy',Auth::user()->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <button type="submit" class="text-dark" id="out_btn" style="appearance:none;border:none;background-color: transparent;"><i class="fas fa-ban mr-2"></i>退会する</button>
                      </form>
                    </p>
                  </div>
                  <div class="col-md-2">
                    <p>
                      <form action="{{route('user.destroy',Auth::user()->id)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <button type="submit" class="text-dark" id="out_btn" style="appearance:none;border:none;background-color: transparent;"><i class="fas fa-chevron-right"></i></button>
                      </form>
                    </p>
                  </div>
              </div>
              
          </div>
      
  </div>
   
   @component('components.bottombar')
   @endcomponent
   
</div>


<script>
  
   document.getElementById('out_btn').addEventListener('click',function() {
    
     var result = window.confirm('本当に退会します？')
    
     if(result) {
    
     }else{
       
     }
    
   });
  
  
</script>


@endsection
