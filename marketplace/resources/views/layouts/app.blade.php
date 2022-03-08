

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
    
    <!--Get User role -->
@php
    if (Auth::check()){        
        switch ($role = Auth::user()->role) {
            case 'A':
                $home = 'admin.home';
                break;
                case 'U':
                $home = 'admin.home';
                break;
                case 'C':
                $home = 'admin.home';
                break;            
            default:
                $home = 'home';
                break;
        }
    }
@endphp
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('Застрахуй братуху') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if(isset($navMenu))
                            <li class="nav-item">
                                <div class="btn-success container ml-3 pl-3">                        
                                    <a href="/companys" type="button" class="btn btn-success"> Компании </a>                        
                                </div>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">                       
                        
                            @if (isset($navMenu))
                                @while (current($navMenu))
                                    <li class="nav-item">
                                        <div class="btn-group container">
                                            <a href="/category/{{current($navMenu)['id']}}" type="button" class="btn btn-primary">{{key($navMenu)}}</a>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                                            </button>
                                        <div class="dropdown-menu">      
                                        @foreach (current($navMenu)['types'] as $subId => $subMenu)
                                            <a class="dropdown-item" href="/type/{{$subId}}">{{$subMenu}}</a>        
                                        @endforeach
                                        @php next($navMenu) @endphp
                                    </li>                          
                                @endwhile
                            @endif
                        
                        
                        <pre>  </pre>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item pl-3">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">                                  

                                    <a class="dropdown-item" href="{{ route('home') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('home-form').submit();">
                                     {{ __('Личный кабинет') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                    <form id="home-form" action="{{ route($home) }}" method="GET" class="d-none">                                        
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if($errors->any())
            <div class="alert-danger alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>        
            </div>
        @endif

        @if(!empty($info))
        <div class="alert-success">
            <ul>
                @foreach($info as $inf)
                    <li>{{$inf}}</li>
                @endforeach
            </ul>        
        </div>
    @endif

        <main class="container mt-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
