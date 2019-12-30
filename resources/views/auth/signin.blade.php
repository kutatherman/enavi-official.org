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
