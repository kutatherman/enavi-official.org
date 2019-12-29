@extends('layouts.default')

@section('content')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="../index.blade.php">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">

			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Connectez-vous </h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Connectez-vous à votre compte</h3>
							<p class="text-center text-muted">Vous n'avez pas de compte? <a href="{{route('register')}}">Enrégistrer vous</a> </p>
							<hr>

							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="top-margin">
									<label>{{ __('E-Mail Address') }} <span class="text-danger"> *</span></label>
									<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								</div>
								<div class="top-margin">
									<label> {{ __('Password') }}<span class="text-danger"> *</span></label>
									<input type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<b> @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif </b>
									</div>
									<div class="col-lg-4 text-right">
                                        <button type="submit" class="btn btn-action">
                                            {{ __('Login') }}
                                        </button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
@stop














<!-- Carousel Fixed Height -->
<section class="carousel-fixed-height">
    <div id="carousel-fixed-height" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-fixed-height" data-slide-to="0" class=""></li>
            <li data-target="#carousel-fixed-height" data-slide-to="1" class=""></li>
            <li data-target="#carousel-fixed-height" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
            <div class="item">
                <!-- The only change from the original bootstrap carousel is the "item" divs. I am using this in a CMS so I use inline styles for the background divs so I can set the background image files within the loop.  Just easier for my purposes.  Change the img tag to a div as follows: -->
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/woman-camera.jpg" alt="First slide">
                <div style="background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/woman-camera.jpg') center center; background-size:cover;" class="slider-size">
                    <div class="carousel-caption">
                        <h3>A woman with a camera</h3>
                        <p>She is probably taking a picture</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/spiderweb.jpg" alt="Second slide">
                <div style="background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/spiderweb.jpg') center center; background-size:cover;" class="slider-size">
                    <div class="carousel-caption">
                        <h3>Down came the rain</h3>
                        <p>And washed the spider out</p>
                    </div>
                </div>
            </div>
            <div class="item active">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg" alt="Third slide">
                <div style="background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg') center center; background-size:cover;" class="slider-size">
                    <div class="carousel-caption">
                        <h3>Making love</h3>
                        <p>She is probably taking a picture</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-fixed-height" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-fixed-height" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- /end Carousel Fixed Height -->


<!-- Carousel Default -->
<section class="carousel-default">
    <div id="carousel-default" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-default" data-slide-to="0" class=""></li>
            <li data-target="#carousel-default" data-slide-to="1" class=""></li>
            <li data-target="#carousel-default" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- NOTE: Bootstrap v4 changes class name to carousel-item -->
            <div class="item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/guitar.jpg" alt="First slide">
                <div class="carousel-caption">
                    <h3>A woman with a camera</h3>
                    <p>She is probably taking a picture</p>
                </div>
            </div>
            <div class="item">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/spiderweb.jpg" alt="Second slide">
                <div class="carousel-caption">
                    <h3>Down came the rain</h3>
                    <p>And washed the spider out</p>
                </div>
            </div>
            <div class="item active">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/158072/hearthand.jpg" alt="Third slide">
                <div class="carousel-caption">
                    <h3>Making love</h3>
                    <p>She is probably taking a picture</p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-default" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-default" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- /end Carousel Default -->
