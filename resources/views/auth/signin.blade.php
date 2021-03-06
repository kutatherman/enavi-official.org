@extends('layouts.default')

@section('content')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">


		<div class="row">

			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Connectez-vous </h1>
				</header>

				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Remplire les champs pour vous connecter</h3>
							<hr>

							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="top-margin">
									<label>{{ __('Username') }} <span class="text-danger"> *</span></label>
									<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  autocomplete="username" autofocus>

                                    @error('username')
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
{{--									<div class="col-lg-8">--}}
{{--										<b> @if (Route::has('password.request'))--}}
{{--                                                <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                                </a>--}}
{{--                                            @endif </b>--}}
{{--									</div>--}}
									<div class="col-lg-12 text-right">
                                        <button type="submit" class="btn btn-action btn-block">
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
