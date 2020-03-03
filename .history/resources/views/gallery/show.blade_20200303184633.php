<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('gallery/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('gallery/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('gallery/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{asset('gallery/css/style.css')}}">

</head>
<body>
   


<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="header-bar d-flex d-lg-flex align-items-center inner-page-header" data-aos="fade-down">
        <div class="site-logo">
          
            <p>{{ $description ?? '' }}</p>
          
        </div>

        <div class="d-inline-block d-xl-block ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span> <span style="position: relative;top: -4px; text-transform: uppercase;">Menu</span></a></div>

        <div class="main-menu d-none">
            <ul class="js-clone-nav">
                <form action="{{url('gallery')}}" class="dropzone" >
                    {{csrf_field()}}
                </form>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('index')}}">Home</a></li>
                {{-- <li><a href="{{route('photosCreate')}}">Create</a></li> --}}
            </ul>
        </div>
    </header>


    <main class="main-content">
        <div class="container-fluid photos">
            
            <div class="row align-items-stretch">
                <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{asset('images/gallery/secretary/15.jpg')}}" class="d-block photo-item" data-fancybox="gallery">
                        <img src="{{asset('images/gallery/secretary/15.jpg')}}" alt="Image" class="img-fluid">
                        <div class="photo-text-more">
                            <span class="icon icon-search"></span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </main>

    

</div> <!-- .site-wrap -->

<script src="{{asset('gallery/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('gallery/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('gallery/js/jquery-ui.js')}}"></script>
<script src="{{asset('gallery/js/popper.min.js')}}"></script>
<script src="{{asset('gallery/js/bootstrap.min.js')}}"></script>
<script src="{{asset('gallery/js/owl.carousel.min.js')}}"></script>
<!-- <script src="js/jquery.stellar.min.js"></script> -->
<script src="{{asset('gallery/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('gallery/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('gallery/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('gallery/js/aos.js')}}"></script>

<script src="{{asset('gallery/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('gallery/js/swiper.min.js')}}"></script>
<script src="{{asset('gallery/js/jquery.scrollbar.js')}}"></script>
<script src="{{asset('gallery/js/main.js')}}"></script>



</body>
</html>
