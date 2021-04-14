<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" ></script>
    <script src="{{ asset('fortawesome/fontawesome-free/js/all.min.js') }}"></script>


    @yield('contenido_js')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pangolin&display=swap');
    </style>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styleTemplate.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <style>
    .navbar {
        background: linear-gradient(0.25turn, #3f87a6, rgba(35, 192, 35,0.9), #3f87a6) !important;
        color: white !important;
    }
}

.bg-black {
    background-color: #000
}


    .active {
    background-color: green;
    color: white !important
}


.nav-link {
    color: inherit !important
}

.nav-item {
    padding: 10px 20px;
    color: #fff
}

.nav-item:hover {
    background-color: #fff;
    color: #000 !important
}

.right {
    margin-left: auto
}

.navbar-collapse.collapse.in {
    display: block !important
}

@media (max-width: 992px) {
    .right {
        margin-left: 0
    }
}
    </style>
@yield('contenido_cSS')

</head> 
<body>

    @php
        $stringRuta = \Request::route()->getName();
    @endphp

    <div id="app">

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="navbar-toggler-icon"></span> </button> <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('asset/logo-busvid19.png') }}" width="50px"  alt=""></a>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item active"> <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a> </li> --}}
                    <li style="font-weight: bold" class="nav-item @if($stringRuta == 'showAllBus') active @endif"> <a class="nav-link" href="{{ route('showAllBus') }}">CONSULTA</a> </li>
                </ul>
                <div style="width:100%;font-size:30px;font-family: Pangolin" class="d-flex justify-content-center text-center">
                    BUSVID-19

                </div>
                {{-- <form class="form-inline"> <input class="form-control mr-sm-2" type="text" /> <button class="btn btn-primary my-2 my-sm-0" type="submit"> Search </button> </form> --}}
                <ul class="navbar-nav ml-md-auto">
                        @guest
                            @if (Route::has('login'))
                                <li style="font-weight: bold "class="nav-item @if($stringRuta == 'login') active @endif">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li style="font-weight: bold" class="nav-item @if($stringRuta == 'register') active @endif">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRO') }}</a>
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>

        </nav>



        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">



            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        <main class="py-4 content-main-layout">
            <br>
            <br>
            @yield('content')
        </main>
    </div>
    @yield('contenido_abajo_js')

</body>
    
</html>
