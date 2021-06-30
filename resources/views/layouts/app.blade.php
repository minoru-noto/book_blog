<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app w-50 mx-auto">
        
        @auth
        <nav class="navbar navbar-expand-md navbar-light bg-primary shadow-sm w-50 mx-auto mt-3">
            <div class="container">
                
                <div class="w-100 text-center">
                    <a class="navbar-brand text-white " href="{{ url('/home') }}">
                        <i class="fas fa-book-open mr-2"></i>BookCart
                    </a>
                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="dropdown">
                    <a href="#" class="text-white" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></a>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/home"><i class="fas fa-home"></i> ホーム</a>
                        <a class="dropdown-item" href="{{route('user.index')}}"><i class="fas fa-book-reader"></i> 本棚</a>
                        <a class="dropdown-item" href="{{route('postItem.index')}}"><i class="fas fa-search"></i> さがす</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-fire-alt"></i> 注目</a>
                        <a class="dropdown-item" href="{{route('setting.index')}}"><i class="fas fa-cog"></i> 設定</a>
                    </div>
                            
                </div>
                
            </div>
        </nav>
        @endauth

        <main class="w-50 mx-auto">
            @yield('content')
        </main>
    </div>
</body>
</html>
