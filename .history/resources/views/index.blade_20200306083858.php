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

    {{-- ACTUALITY STAR --}}
 <div class="container">
    <div id="myCarousels" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
              <li data-target="#myCarousels" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousels" data-slide-to="1"></li>
            <li data-target="#myCarousels" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="https://images.pexels.com/photos/238211/pexels-photo-238211.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Second slide">
                <!-- Static Header -->
                <div class="header-text text-center ">
                   <div class="main_title ">
                        <p>Ceo of Ngouache 2015</p>
                   </div>  
                        <div class="">
                            <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                        </div>
                </div><!-- /header-text -->
            </div>
            
                <img src="https://images.pexels.com/photos/167676/pexels-photo-167676.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Second slide">
                <!-- Static Header -->
                <div class="header-text text-center ">
                   <div class="main_title ">
                        <h2>Paris <span>Top</span> Tours</h2>
                        <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
                   </div>
                   <div class="">
                            <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a>
                        </div>
            
                </div><!-- /header-text -->
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousels" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#myCarousels" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div><!-- /carousel -->
 </div>
    {{-- ACTUALITY END --}}

    {{-- ACTUALITY STAR --}}
<div class="container carousel">  

    @auth
    <br>
<form action="{{route('news.store')}}" class="form-horizontal" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
        <legend class="text-primary font-weight-bold">Ajouter un évenement</legend>
        <div class="form-group {{$errors->has('title') ? 'has-error' : ''}}">
            <label class="col-md-4 control-label" for="title">Title</label>  
            <div class="col-md-4">
                <input id="title" name="title" type="text" value="{{old('title')}}"  placeholder="Enter the title" class="form-control input-md">
                @error('title')
                    <span class="help-block" role="alert">{{$message}}</span>
                @enderror 
            </div>
        </div>
        <div class="form-group {{$errors->has('img') ? 'has-error' : ''}}">
            <label class="col-md-4 control-label" for="title">Image</label>  
            <div class="col-md-4">
            <input  name="img" type="file"  class="form-control input-md">
            @error('img')
                <span class="help-block" role="alert">{{$message}}</span>
            @enderror
            </div>
          </div>
          <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
            <label class="col-md-4 control-label" for="description">Description</label>
            <div class="col-md-4">                     
                <textarea class="form-control" id="description" name="description">{{old('name')}} </textarea>
                @error('description')
                    <span class="help-block" role="alert">{{$message}}</span>
                @enderror
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

    @if(count($news) > 0)
    <h1 class="text-center" id="news">News and Anctuality</h1>
    <div id="mixedSlider">
        <div class="MS-content">
            @foreach ($news as $new)
            <div class="item">
                <div class="imgTitle">
                <p class="blogTitle  btn-primary">{{$new->title}}</p>
                <img src="{{asset('newsIMG') . '/' . $new->img}}" width="400" height="200"  alt="" />
                </div>
            <p>{{$new->description}}</p> 
            @auth()
                <div class="d-flex justify-content-between align-items-center">
                <span><a href="{{route('news.destroy', $new->id )}}" data-method="DELETE" data-confirm="Are you sure ?" class="badge btn-danger">Delete</a></span>
                </div>
            @endauth      
            </div>
            @endforeach
        </div>
        <div class="MS-controls">
            <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
            <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
@else
           
 @endif

 {{-- ACTUALITY END --}}

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
