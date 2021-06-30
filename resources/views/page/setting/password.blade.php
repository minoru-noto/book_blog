@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:700px;">
   
  <div class="container mt-5">
      
      <div class="text-center">
          <h4><i class="fas fa-key mr-2"></i>パスワード変更</h4>
      </div>
      
      <div class="mt-5 w-75 mx-auto">
          
          <form action="{{route('setting.update',Auth::user()->id)}}" method="POST">
          <input type="hidden" name="_method" value="PUT">
        　<input type="hidden" name="_token" value="{{ csrf_token() }}">
        　
              <div class="text-center">
                  <p>新しいパスワード</p>
                  <input type="password" name="password" class="form-control">
              </div>
              
              <div class="mt-5 text-center">
                  <p>確認用パスワード</p>
                  <input type="password" name="confirm_password" class="form-control">
              </div>
              
              <div class="text-center mt-5">
                  <button type="submit" class="btn btn-success w-75">変更</button>
              </div>
              
          </form>
          
      </div>
      
  </div>
   
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
