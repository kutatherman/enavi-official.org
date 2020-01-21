@extends('layouts.default')

@section('content')

	<!-- Header -->
	<header id="head" >
        <div class="container">
            <div class="row">
                <h1 class="lead">EN.AYUKOTANG VISION INSTITUTE</h1>
                <p class="tagline">{{ __('messages.slogan') }}</p>
                <p><a class="btn btn-action btn-lg" role="button" href="{{route('dashboard.about')}}">MORE INFO</a></p>
            </div>
        </div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container ">
		<br> <br>
		<h2 class="thin"></h2>
		<p class="">{!! __('messages.sloganSection1') !!}</p>
		<p class="">{!! __('messages.sloganSection2') !!}</p>
		<p class="">{!! __('messages.sloganSection3') !!}</p>
		<p class="">{!! __('messages.sloganSection4') !!}</p>
		<p class="">{!! __('messages.sloganSection5') !!}</p>
		<p class="">{!! __('messages.sloganSection6') !!}</p>
        <p><strong>Dr.Enowntai Nkongho AYUKOTANG, OD (KNUST-Ghana), MPHEC (LSHTM, London-UK), PhD Student(UKZN-South Africa).</strong></p>
        <p><strong>CEO of ENAVI-OFFICIAL</strong>/p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">EN.AYUKOTANG VISION INSTITUTE</h3>

			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>some thing here</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Fat-free</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Creative Commons</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Author's support</h4></div>
					<div class="h-body text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
					</div>
				</div>
			</div> <!-- /row  -->

		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">{{__('messages.section1')}}</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
                <h3>{{__('messages.headSection1')}}</h3>
				<p>{{__('messages.contentSection1')}}</p>
			</div>
			<div class="col-sm-6">
				<h3>How does the eye work?</h3>
				<p>
                    When you take a picture, the lens in the front of the camera allows light through and focuses that light on the film that covers the back inside wall of the camera. When the light hits the film, a picture is taken. The eye works in much the same way. The front parts of the eye (the cornea, pupil and lens) are clear and allow light to pass through. The light also passes through the large space in the center of the eye called the vitreous cavity. The vitreous cavity is filled with a clear, jelly-like substance called the vitreous or vitreous gel. The light is focused by the cornea and the lens onto a thin layer of tissue called the retina, which covers the back inside wall of the eye. The retina is like the film in a camera. It is the seeing tissue of the eye. When the focused light hits the retina, a picture is taken. Messages about this picture are sent to the brain through the optic nerve. This is how we see.</p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>What Is visual acuity?</h3>
				<p>
                    Acuity is the measure of the eye's ability to distinguish the smallest identifiable letter or symbol, its details and shape, usually at a distance of 20 feet. This measurement is usually given in a fraction. The top number refers to the testing distance measured in feet and the bottom number is the distance from which a normal eye should see the letter or shape. So, perfect vision is 20/20. If your vision is 20/60, that means what you can see at a distance of 20 feet, someone with perfect vision can see at a distance of 60 feet.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Is pink-eye contagious?</h3>
				<p>Yes, viral conjunctivitis (pink-eye) is very common and is extremely contagious. Avoid touching eyes with your hands, wash hands frequently, do not share towels, and avoid work, school or daycare activities for a least five days or as long as discharge is present.</p>
			</div>
		</div> <!-- /row -->

{{--		<div class="jumbotron top-space">--}}
{{--			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>--}}
{{--     		<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>--}}
{{--  		</div>--}}

</div>	<!-- /container -->

	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
@stop
