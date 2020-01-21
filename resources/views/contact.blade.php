@extends('layouts.default')
@section('extra-js')
    {!! NoCaptcha::renderJs() !!}
@stop

@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">



		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>

				<p>
					If you having trouble with this service, please <a href="mailto:ayukotang@yahoo.com">ask for help</a>.
				</p>
				<br>
					<form action="" method="POST" role="form" novalidate enctype="multipart/form-data">
                        @csrf
						<div class="row">
							<div class="col-sm-4 {{$errors->has('name') ? 'has-error' : ''}}">
								<input class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" type="text" required placeholder="Name">
                                @error('name')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
							<div class="col-sm-4 {{$errors->has('email') ? 'has-error' : ''}}">
								<input class="form-control" name="email" value="{{old('email')}} "type="text" required placeholder="Email">
                                @error('email')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
							<div class="col-sm-4 {{$errors->has('phone') ? 'has-error' : ''}}">
								<input class="form-control" name="phone" value="{{old('phone')}}" type="text" required placeholder="Phone">
                                @error('phone')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 {{$errors->has('msg') ? 'has-error' : ''}}">
								<textarea placeholder="Type your message here..." required name="msg" class="form-control" rows="9">{{old('msg')}}</textarea>
                                @error('msg')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
						</div>
						<br>
						<div class="row">
                            <div class="col-sm-6">
                                {!! NoCaptcha::display() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-6 text-right">
                                <input class="btn btn-action" type="submit" value="Send message">
                            </div>
                        </div>
                    </form>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">
                <br>
                <img src="{{  asset('images/logoENAVI.jpg')}}" alt="">

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
    <br>
    <br>
    <br>
	<section class="container-full top-space">
		<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d656.3298605254201!2d10.415753483336895!3d5.479595207467001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc83b3b18ee747b96!2sClinique%20de%20la%20Solidarit%C3%A9!5e0!3m2!1sfr!2scm!4v1579489658381!5m2!1sfr!2scm" width="1200" height="453" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
	</section>

@stop
