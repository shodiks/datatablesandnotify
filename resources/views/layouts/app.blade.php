<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Seminggu Bodoh') }}</title>
        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstraphero.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
        
        <!-- style yajra -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.css')}}">
        
        <!-- Scripts -->

        <!-- sweet alert tes -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
        
       
        <!-- end -->
        
        <script>
        window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
        </script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        
                        <ul class="nav navbar-nav">
                            @if (Auth::check())
                            <li><a href="{{url('/home')}}" >Dasbord</a></li>
                            @endif
                            @role('admin')
                            <li><a href="{{route('authors.index')}}" >Penulis</a></li>
                            @endrole
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Daftar</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{asset('js/jquery-3.1.1.min.js')}}" type="text/javascript" ></script>
        
        <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript" ></script>
        <!-- js yajra -->
        <script src="{{asset('js/dataTables.bootstrap.min.js')}}" type="text/javascript" ></script>
        <script src="{{asset('js/jquery.dataTables.min.js')}}" type="text/javascript" ></script>
        <!-- sweet alaert -->
         <script src="{{asset('js/sweetalert.min.js')}}" type="text/javascript" ></script>
       
        
 
        @yield('scripts')
   <script type="text/javascript">
        @if(notify()->ready())
        swal({
            title: '{!! notify()->message() !!}',
            type: '{!! notify()->type() !!}',
            html: true
        });
        @endif
    </script>
       
        
    </body>
</html>