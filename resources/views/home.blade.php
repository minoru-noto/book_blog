@extends('layouts.app')

@section('content')
<div class="bg-white w-100 position-relative border border-dark" style="height:700px;">
   
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
   
   
   @component('components.bottombar')
   @endcomponent
   
</div>
@endsection
