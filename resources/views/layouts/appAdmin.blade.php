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
        /* background: linear-gradient(0.25turn, rgba(31, 171, 31,0.9), rgba(38, 210, 38,0.9), rgba(31, 171, 31,0.9)) !important; */
        /* background-color: rgba(0, 0, 0, 0.7) !important;  */
        background: radial-gradient(circle at 50% -20.71%, #b7f4ff 0, #6c90d8 0%, #2c3750 100%);
        color: white !important;
    }
}

.bg-black {
    background-color: #000
}


    .active {
    background-color: rgba(195, 195, 195, 0.8);
    color: black !important
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


  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="fa fa-bars"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="https://thumbs.dreamstime.com/b/retrato-masculino-del-icono-del-perfil-del-hombre-de-negocios-plano-47075259.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">Administrador</a></h1>
        <h6 class="text-light text-center">


            <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Cerrar Sesion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>



        </h6>
        <h6 class="text-light text-center">
            <a class="" href="{{ route('perfilUserNow') }}">
                Mi Perfil
            </a>
    
        </h6>

      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="{{ route('userAdminClient.create') }}"><i class="bx bx-user"></i> <span>Registrar Clientes</span></a></li>
          <li ><a href="{{ route('userAdminClient.edit.personalize') }}"><i class="bx bx-file-blank"></i> <span>Modificar Clientes</span></a></li>
          <li><a href="{{ route('userAdminClient.delete.personalize') }}"><i class="bx bx-server"></i> Eliminar Clientes</a></li>
          <li><a href="{{ route('home') }}"><i class="bx bx-server"></i> Ir a la pagina</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

    <div id="app">
        <main class="py-4 content-main-layout">
            @yield('content')
        </main>
    </div>
    @yield('contenido_abajo_js')

</body>
    
</html>
