@extends('layouts.default')

@section('content')


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">



		<div class="row">

			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contact us</h1>
				</header>

				<p>
					If you having trouble with this service, please <a href="mailto:ayukotang@yahoo.com">ask for help</a>.
				</p>
				<br>
					<form action="{{route('contactStore')}}" method="POST" role="form" novalidate enctype="multipart/form-data">
                        @csrf
						<div class="row">
							<div class="col-sm-4 {{$errors->has('name') ? 'has-error' : ''}}">
								<input class="form-control @error('name') is-invalid @enderror" name="name" type="text" required placeholder="Name">
                                @error('name')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
							<div class="col-sm-4 {{$errors->has('email') ? 'has-error' : ''}}">
								<input class="form-control" name="email" type="text" required placeholder="Email">
                                @error('email')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
							<div class="col-sm-4 {{$errors->has('phone') ? 'has-error' : ''}}">
								<input class="form-control" name="phone" type="text" required placeholder="Phone">
                                @error('phone')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12 {{$errors->has('message') ? 'has-error' : ''}}">
								<textarea placeholder="Type your message here..." required name="message" class="form-control" rows="9"></textarea>
                                @error('message')
                                <span class="help-block" role="alert">{{$message}}</span>
                                @enderror
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
							</div>
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Send message">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">
                <h3>The good way for you</h3>
                <br>
                <img src="{{  asset('images/logoENAVI.jpg')}}" alt="">

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->

	<section class="container-full top-space">
		<div id="map"></div>
	</section>

@stop
