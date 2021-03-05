<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Comics | DC</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>

            {{-- NAVBAR TOP --}}
            <nav id="navbar_top">
                <div class="navbar_top d_flex">
                    <div id="admin_menu">
                        <!-- Admin menu -->
                        <ul class="d_flex">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.index') }}">
                                            Admin
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    {{-- NAVBAR TOP RIGHT --}}
                    <div id="navbar_top_right" class="d_flex">
                        <div class="oblique active">
                            <a href="#"><img src="{{ asset('img/navbar_top/logo.png') }}" alt=""></a>
                        </div>
                        <div class="oblique">
                            <a href="#"><img src="{{ asset('img/navbar_top/DCUI_desktop.svg') }}" alt=""></a>
                        </div>
                        <div class="oblique">
        
                            <a href="#"><img src="{{ asset('img/navbar_top/DC_SHOP_desktop.svg') }}" alt=""></a>
                        </div>
                        <div class="oblique">
        
                            <a href="#"><img src="{{ asset('img/navbar_top/DC_community.svg') }}" alt=""></a>
                        </div>
                        <div class="oblique">
        
                            <a href="#"><img src="{{ asset('img/navbar_top/DC_on_HBOMAX_desktop.svg.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </nav>
            {{-- MAIN NAVBAR  --}}
            <nav class="navbar_main">
                <div id="navbar_main" class="d_flex container_80">
                    {{-- LOGO --}}
                    <div class="logo_nav">
                        <img src="{{ asset('img/navbar_top/logo.png') }}" alt="">
                    </div>
                    {{-- LINKS --}}
                    <div class="links">
                        <ul class="d_flex">
                            <li><a href="#">CHARACTERS</a></li>
                            <li><a href="#">COMICS</a></li>
                            <li><a href="#">MOVIES</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">GAMES</a></li>
                            <li><a href="#">VIDEOS</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            SHOP
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">
                                                Something
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Something
                                            </a>
                                        </div>
                                    </li>
                        </ul>
                    </div>
                    {{-- SEARCH BAR --}}
                    <div class="search_input d_flex">
                        <input type="search" name="" id="" placeholder="Search">
                        <i class="fas fa-search "></i>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
