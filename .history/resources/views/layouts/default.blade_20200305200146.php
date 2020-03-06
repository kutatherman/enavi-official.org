<!DOCTYPE html>
<html class="h-100" lang="en" xmlns:g="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title> {{isset($title) ? $title . ' | ' : '' }} {{env('APP_NAME')}}</title>

    <link rel="shortcut icon" href="{{asset('images/gt_favicon.png')}}">
    

    {{--    Extrat-js--}}
    @yield('extra-js')


    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero-slider.css')}}">

    {{--  DROP ZONE--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.css">
    @yield( 'team-css')
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
{{--    <script src="{{asset('js/gallery.js')}}"></script>--}}

    <style>
        .navbar-default{background-color:#1E6EE8;}
    </style>
    <div class="navbar navbar-inverse navbar-default navbar-fixed-top bg-light headroom" >
        <div class="container-fluid">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand " href="{{route('index')}}"><img src="{{asset('images/Logo.jpg')}}" width="50" alt="{{env('APP_NAME')}}">
                    <span class="ml-3">ENAVI </span>
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="{{set_active_route('index')}}"><a href="{{route('index')}}">Home</a></li>
                    <li class="{{set_active_route('dashboard.about')}}"><a href="{{route('dashboard.about')}}">About</a></li>
                    <li class="{{set_active_route('dashboard.donate')}}"><a href="{{route('dashboard.donate')}}">Donate</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="{{set_active_route('dashboard.index')}}"><a href="{{route('dashboard.index')}}">Our team</a></li>
                            <li class="{{set_active_route('dashboard.contact')}}"><a href="{{route('dashboard.contact')}}">Contact</a></li>
                            <li class="{{set_active_route('galleryIndex')}}"><a href="{{route('gallery')}}">Gallery</a></li>
                            <li><a href="#news">Gallery</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Language<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Option<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @guest()

                            <li class="active"><a href="{{route('signin')}}">Se Connecter </a></li>
                            @endguest
                            @auth()
                                    <li class="active"><a href="{{route('register')}}">S'enrégistrer </a></li>
                                    <li class="active"><a href="{{route('createMember')}}">Add member</a></li>
                                    <li class="active"><a href="{{route('dashboard.contactIndex')}}">Messages</a></li>
                                @endauth
                                @auth()
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                                @endauth
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

<body class="home d-flex flex-column h-100">
<div id="app">
    <!-- Fixed navbar -->



    <main class="py-5">
        <br> <br> <br><br><br><br>




    </main>

    @include('notify::messages')


    <footer id="footer" class="top-space ">

    <div class="footer1 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
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

                <div class="col-sm-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>+237 674 652 651<br>
                            <a href="mailto:infos@enavi-official.org">infos@enavi-official.org</a><br>
                            <br>
                            Sens Interdit,Bafoussam,Cameroon.

                         <a class="badge badge-infos" href="http://share.here.com/r/mylocation/e-eyJuYW1lIjoiRS5OLkF5dWtvdGFuZyBWaXNpb24gSW5zdGl0dXRlIFwiZW5hdmlcIiIsImFkZHJlc3MiOiJTZW5zIEludGVyZGl0LEJhZm91c3NhbSxDYW1lcm9vbi4sIEJhZm91c3NhbSIsImxhdGl0dWRlIjo1LjQ3OTMzLCJsb25naXR1ZGUiOjEwLjQxNDY5LCJwcm92aWRlck5hbWUiOiJmYWNlYm9vayIsInByb3ZpZGVySWQiOjEwNDg1MDQ5MTAzMzQ5MX0=?link=directions&fb_locale=fr_FR&ref=facebook&fbclid=IwAR0XC4ThgdOOcweXjJAxnYwz8H3Gjm6YU4B9qUk7sJmOZRIIluQeo2Zcu48" >
                             Obtenir l’itinéraire
                         </a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-2"></div>

                <div class="col-sm-4  widget">
                    <h3 class="widget-title">Follow</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href="https://twitter.com/e_enavi"><i class="fa fa-twitter fa-2"></i></a>
                            <a href="https://www.facebook.com/ENAyukotang-Vision-Institute-enavi-104850491033491/"><i class="fa fa-facebook fa-2"></i></a>
                            <a href="https://www.linkedin.com/company/e-n-ayukotang-vision-institute"><i class="fa fa-linkedin fa-2"></i></a>
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
                            <a href="{{route('index')}}">Home</a> |
                            <a href="{{route('dashboard.about')}}">About</a> |
                            <a href="{{route('dashboard.contact')}}">Contact</a> |
                            <b><a href="{{route('signin')}}">Sign up</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; {{date('Y')}} ENAVI-official . All right reserve
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
<script src="{{asset('js/larails.js')}}"></script>

{{-- DROP ZONE --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>

</div>
</body>
</html>
