<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="../plugins/fancybox/jquery.fancybox.min.css">
    <script src="../plugins/fancybox/jquery.fancybox.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                      <!--  <li><a href="{{ route('services.index') }}">Servicios</a></li>
                         <li><a href="{{ route('ofertas.index') }}">Ofertas</a></li>
                          <li><a href="{{ route('videos.index') }}">Videos</a></li>
                           <li><a href="{{ route('PostMejor.index') }}">Mejores diseños</a></li>
                           <li><a href="{{ route('categories.index') }}">Categorías</a></li>
                           <li><a href="{{ route('posts.index')}}">Diseños</a></li>
                           <li><a href="{{ url('/home') }}">Inicio Admin</a></li>
                           <li><a href="{{ url('/') }}">Mi pagina</a></li>-->
                           <li><a href="{{ url('/home') }}">Dashboard</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if (session('info'))
                 <div class="container">
                     <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="alert alert-success">
                                 {{ session('info') }}
                             </div>
                         </div>
                     </div>
                 </div>
             @endif

             @if(count($errors))
                 <div class="container">
                     <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                             <div class="alert alert-success">
                                 <ul>
                                     @foreach($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             @endif





        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
