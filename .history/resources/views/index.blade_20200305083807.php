@extends('layouts.default',['title' => 'Home'])

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
        <p><strong>CEO of ENAVI-OFFICIAL</strong>
	</div>
	<!-- /Intro-->
    <br><br>
    <div class="container">
        <div class="row">
            <h2 class="text-center">Welcome video french and english version</h2>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/WEV5TgUVEAA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-md-6">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/uVSNBZQg480" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <br> <br>

	<!-- container -->
	<div class="container">
<h1 class="text-center">question fréquemment posé</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{__('messages.headSection1')}}</h3>
                        <p class="card-text">{{__('messages.contentSection1')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{__('messages.question1')}}</h3>
                        <p class="card-text">{{__('messages.question2')}}</p>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{__('messages.question3')}}</h3>
                    <p class="card-text">{{__('messages.question4')}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{__('messages.question5')}}</h3>
                    <p class="card-text">{{__('messages.question6')}}</p>
                </div>
            </div>
        </div>
    </div>

</div>	<!-- /container -->


 {{-- ACTUALITY STAR --}}
<div class="container carousel">  

    @auth
    <form class="form-horizontal">
        <fieldset>
        <legend>Ajouter un évenement</legend>
        <div class="form-group">
          <label class="col-md-4 control-label" for="title">Title</label>  
          <div class="col-md-4">
          <input id="title" name="title" type="text" placeholder="Enter the title" class="form-control input-md">
          </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Image</label>  
            <div class="col-md-4">
            <input  name="img" type="file" placeholder="Select your" class="form-control input-md">
            </div>
          </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="description">Description</label>
          <div class="col-md-4">                     
            <textarea class="form-control" id="description" name="description">Enter the description</textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for=""></label>
          <div class="col-md-4">
            <button class="btn btn-success">submit</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        @endauth
<br>
        <div class="row well"> <div class="col-xs-8 col-sm-6 col-md-6">
            <h2>Vertical Slider</h2>
                    <div id="myCarousel" class="vertical-slider carousel vertical slide col-md-12" data-ride="carousel">
                <div class="row">
                    <div class="col-md-4">
                        <span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
                            style="font-size: 30px"></span>  
                    </div>
                    <div class="col-md-8"> 
                    </div>
                </div>
                <br />
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class=""
                                    alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet..
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                    <div class="item ">
                        <div class="row">
                            <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class="thumbnail"
                                    alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet..
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                    <div class="item ">
                        <div class="row">
                          <div class="col-xs-6 col-sm-5 col-md-5">
                                <a href="http://dotstrap.com/"> <img src="http://placehold.it/150x150" class="thumbnail"
                                    alt="Image" /></a>
                            </div>
                            <div class="col-xs-6 col-sm-7 col-md-7">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet..
                            </div>
                        </div>
                        <!--/row-fluid-->
                    </div>
                    <!--/item-->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
                            style="color: Black; font-size: 30px"></span>
                    </div>
                    <div class="col-md-8">
                    </div>
                </div>
            </div>
    </div>
        </div>
</div>
 {{-- ACTUALITY END --}}

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
