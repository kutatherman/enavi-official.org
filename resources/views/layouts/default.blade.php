<!DOCTYPE html>
<html lang="en" xmlns:g="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>{{env('APP_NAME')}} | Ayukotang Vision Institute </title>

    <link rel="shortcut icon" href="{{asset('images/gt_favicon.png')}}">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero-slider.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/templatemo-main.css')}}">--}}



    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.css')}}" media="screen" >
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/notify.css')}}">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=" {{asset('js/html5shiv.js')}} "></script>
    <script src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->

    <style>
        .navbar-default{background-color:#1E6EE8;}
    </style>
    <div class="navbar navbar-inverse navbar-default navbar-fixed-top bg-light headroom" >
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand " href="{{route('index')}}"><img src="{{asset('images/Logo.jpg')}}" width="50" alt="{{env('APP_NAME')}}">
                    <span class="ml-3">AYUKOTANG VISION INSTITUTE </span>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('leftSidebar')}}">Left Sidebar</a></li>
                            <li class="active"><a href="{{route('rightSidebar')}}">Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Authentification<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="{{route('signin')}}">Se Connecter </a></li>
                            <li class="active"><a href="{{route('register')}}">S'enrégistrer </a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
   <div class="mt-5">

   </div>

    @yield('content')
</head>

<body class="home">
<div id="app">
    <!-- Fixed navbar -->



    <main class="py-5">
        <br> <br> <br><br><br><br>




    </main>

    @include('notify::messages')


    <footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+237 600 00 00 00<br>
                            <a href="mailto:#">some.email@somewhere.com</a><br>
                            <br>
                            237 Bafoussam
                        </p>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-2 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>


            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="#">Home</a> |
                            <a href="about.blade.php">About</a> |
                            <a href="sidebar-right.blade.php">Sidebar</a> |
                            <a href="contact.blade.php">Contact</a> |
                            <b><a href="signup.blade.php">Sign up</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2019, AN.Ayukotang Vision Institute - All right reserve
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{asset('js/headroom.min.js')}}"></script>
<script src="{{asset('js/jQuery.headroom.min.js')}}"></script>
<script src="{{asset('js/template.js')}}"></script>
<script src="{{asset('js/notify.js')}}"></script>




</div>
</body>
</html>
