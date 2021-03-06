<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Comics | DC</title>
    <link rel="icon" href="{{ asset('img/logo.ico') }}">

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

        <main>
            @yield('content')
        </main>
        <footer>
            {{-- SECTION FOOTER LINKS --}}
            <section id="footer_links">
                <div class="container_80 d_flex">
                    <div class="footer_menu">
                        <div class="links d_flex">
                            <div>
                                <h5>DC COMICS</h5>
                                <ul>
                                    <li> 
                                        <a href="#">Characters</a> 
                                    </li>
                                    <li>
                                        <a href="#">Comics</a>
                                    </li>
                                    <li>
                                        <a href="#">Movies</a>
                                    </li>
                                    <li>
                                        <a href="#">TV</a>
                                    </li>
                                    <li>
                                        <a href="#">Games</a>
                                    </li>
                                    <li>
                                        <a href="#">Videos</a>
                                    </li>
                                    <li>
                                        <a href="#">News</a>
                                    </li>
                                </ul>
                                <h5>SHOP</h5>
                                <ul>
                                    <li>
                                        <a href="#">Shop DC</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop DC Collectibles</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5>DC</h5>
                                <ul>
                                    <li>
                                        <a href="#">Terms Of Use</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy (New)</a>
                                    </li>
                                    <li>
                                        <a href="#">Advertising</a>
                                    </li>
                                    <li>
                                        <a href="#">Jobs</a>
                                    </li>
                                    <li>
                                        <a href="#">Sunscriptions</a>
                                    </li>
                                    <li>
                                        <a href="#">Talent Workshop</a>
                                    </li>
                                    <li>
                                        <a href="#">CPSC Certificates</a>
                                    </li>
                                    <li>
                                        <a href="#">Ratings</a>
                                    </li>
                                    <li>
                                        <a href="#">Shop Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h5>SITES</h5>
                                <ul>
                                    <li>
                                        <a href="#">DC</a>
                                    </li>
                                    <li>
                                        <a href="#">MAD Magazine</a>
                                    </li>
                                    <li>
                                        <a href="#">DC Kids</a>
                                    </li>
                                    <li>
                                        <a href="#">DC Univers</a>
                                    </li>
                                    <li>
                                        <a href="#">DC Shop</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="copyright">
                            All Site Content &trade; and &copy; <?php echo date("Y"); ?> DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <a href="#">Cookies Settings</a> 
                        </div>
                    </div>
                    <div class="logo">
                        <img src="{{asset('img/footer/logo-background-v2.png')}}" alt="">
                    </div>
                </div>
            </section>
            {{-- SECTION LOWER FOOTER --}}
            <section id="footer_lower" class="d_flex">
                <div class="container_80 d_flex">
                    <div>
                        <a class="button" href="#">SIGN-UP NOW!</a>
                    </div>
                    <div class=" socials d_flex">
                        <span>FOLLOW US</span>
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>
                        </a>
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>
</html>
