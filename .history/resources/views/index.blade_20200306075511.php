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
        <h3 class="text-center">has taken so much from this site, hope this one be my contribution for <small>bootsnip</small></h3>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
               <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
        <div class="carousel-item active">			  <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/review-gsp-amerika-ingin-perdagangan-yang-adil-dan-saling-menguntungkan-1531307731.jpg" alt="">
                        <div class="card-img-overlay d-flex linkfeat">
                          <a href="http://makro.id/review-gsp-amerika-ingin-perdagangan-saling-menguntungkan" class="align-self-end">
                            <span class="badge">Ekspor</span> 
                            <h4 class="card-title">Review GSP: Amerika Ingin Perdagangan Saling Menguntungkan</h4>
                            <p class="textfeat" style="display: none;">makro.id – Duta Besar Amerika Serikat untuk Indonesia Joseph R. Donovan menegaskan, langkah pemerintah Amerika Serikat meninjau ulang pemberian Generalized System od Preferenes (GSP) akan menguntungkan kedua belah pihak.
        
        Menurut Donovan,</p>
                          </a>
                        </div>
                      </div>
                      </div>
                  <div class="carousel-item">			  <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar-1531258457.jpeg" alt="">
                        <div class="card-img-overlay d-flex linkfeat">
                          <a href="http://makro.id/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar" class="align-self-end">
                            <span class="badge">Pertumbuhan Ekonomi</span> 
                            <h4 class="card-title">DPR Setujui Penambahan Anggaran BP Batam Rp565 Miliar</h4>
                            <p class="textfeat" style="display: none;">makro.id - Dewan Perwakilan Rakyat (DPR) menyetujui penambahan anggaran Badan Pengusahaan (BP) Batam Rp565 miliar. Dengan penambahan anggaran di tahun 2019 tersebut diharapkan dapat mendorong percepatan pembangunan Kota Batam.
        
        Anggota Komisi</p>
                          </a>
                        </div>
                      </div>
                      </div>
                  <div class="carousel-item">			  <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/btn-targetkan-seribu-nasabah-valas-di-batam-1531227805.jpeg" alt="">
                        <div class="card-img-overlay d-flex linkfeat">
                          <a href="http://makro.id/btn-targetkan-seribu-nasabah-valas-di-batam" class="align-self-end">
                            <span class="badge">Perbankan</span> 
                            <h4 class="card-title">BTN Targetkan Seribu Nasabah Valas di Batam</h4>
                            <p class="textfeat" style="display: none;">makro.id - Bank Tabungan Negara (Persero) resmi merilis tabungan valuta asing (valas) di Batam. Sebagai daerah yang berbatasan langsung dengan Singapura dan sebagai pintu gerbang wisatawan mancanegara (wisman), transaksi valas</p>
                          </a>
                        </div>
                      </div>
                      </div>
                  <div class="carousel-item">			  <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/sistem-oss-resmi-diluncurkan-1531225964.jpg" alt="">
                        <div class="card-img-overlay d-flex linkfeat">
                          <a href="http://makro.id/sistem-oss-resmi-diluncurkan" class="align-self-end">
                            <span class="badge">Industri</span> 
                            <h4 class="card-title">Sistem OSS Resmi Diluncurkan</h4>
                            <p class="textfeat" style="display: none;">makro.id - Menteri Koordinator Bidang Perekonomian Darmin Nasution bersama dengan para menteri dan kepala lembaga terkait meresmikan penerapan Sistem Online Single Submission (OSS). 
        
        Layanan Perizinan Berusaha Terintegrasi Secara Elektronik (PBTSE), yang</p>
                          </a>
                        </div>
                      </div>
                      </div>
                  <div class="carousel-item">			  <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/grab-gandeng-samsung-telkomsel-dan-erafone-1531222875.JPG" alt="">
                        <div class="card-img-overlay d-flex linkfeat">
                          <a href="http://makro.id/grab-gandeng-samsung-telkomsel-dan-erafone" class="align-self-end">
                            <span class="badge">Nusantara</span> 
                            <h4 class="card-title">Grab Gandeng Samsung, Telkomsel, dan Erafone</h4>
                            <p class="textfeat" style="display: none;">:: Luncurkan Program Ponsel Cerdas untuk Pengemudi
        
        Batam - Grab menjalin kemitraan strategis dengan tiga perusahaan terkemuka di Indonesia yaitu Telkomsel, Samsung, dan Erafone terkait program kepemilikan ponsel cerdas khusus untuk</p>
                          </a>
                        </div>
                      </div>
                      </div>
                  <div class="carousel-item">			  <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/paket-kebijakan-ekonomi-mempermudah-izin-investasi-1530819316.jpg" alt="">
                        <div class="card-img-overlay d-flex linkfeat">
                          <a href="http://makro.id/paket-kebijakan-ekonomi-mempermudah-izin-investasi" class="align-self-end">
                            <span class="badge">Finansial</span> 
                            <h4 class="card-title">Paket Kebijakan Ekonomi Mempermudah Izin Investasi</h4>
                            <p class="textfeat" style="display: none;">makro.id– Paket kebijakan ekonomi dinilai dapat memberikan kemudahan dalam pengurusan perizinan berinvestasi dan memberikan efek yang cukup signifikan kepada investor.
        
        Ketua Umum Himpunan Kawasan Industri (HKI) Sanny Iskandar menyatakan saat ini</p>
                          </a>
                        </div>
                      </div>
                      </div>
                            </div>
              </div>
            </div>
            <div class="col-6 py-0 px-1 d-none d-lg-block">
                <div class="row">
                    <div class="col-6 pb-2 mg-1	">
                        <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/bi-atur-standarisasi-qr-code-1529952479.jpg" alt="">
                        <div class="card-img-overlay d-flex">
                          <a href="http://makro.id/bi-atur-standarisasi-qr-code" class="align-self-end">
                            <span class="badge">Finansial</span> 
                            <h6 class="card-title">BI Atur Standarisasi QR Code</h6>
                          </a>
                        </div>
                          </div>
                    </div>
                                <div class="col-6 pb-2 mg-2	">
                        <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/ptsp-bp-batam-masuk-10-terbaik-di-indonesia-1531400445.jpeg" alt="">
                        <div class="card-img-overlay d-flex">
                          <a href="http://makro.id/ptsp-bp-batam-masuk-10-terbaik-di-indonesia" class="align-self-end">
                            <span class="badge">Industri</span> 
                            <h6 class="card-title">PTSP BP Batam Masuk 10 Terbaik di Indonesia</h6>
                          </a>
                        </div>
                          </div>
                    </div>
                                <div class="col-6 pb-2 mg-3	">
                        <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/review-gsp-amerika-ingin-perdagangan-yang-adil-dan-saling-menguntungkan-1531307731.jpg" alt="">
                        <div class="card-img-overlay d-flex">
                          <a href="http://makro.id/review-gsp-amerika-ingin-perdagangan-saling-menguntungkan" class="align-self-end">
                            <span class="badge">Ekspor</span> 
                            <h6 class="card-title">Review GSP: Amerika Ingin Perdagangan Saling Menguntungkan</h6>
                          </a>
                        </div>
                          </div>
                    </div>
                                <div class="col-6 pb-2 mg-4	">
                        <div class="card bg-dark text-white">
                        <img class="card-img img-fluid" src="http://admin.makro.id/media/post_img_sm/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar-1531258457.jpeg" alt="">
                        <div class="card-img-overlay d-flex">
                          <a href="http://makro.id/dpr-setujui-penambahan-anggaran-bp-batam-rp565-miliar" class="align-self-end">
                            <span class="badge">Pertumbuhan Ekonomi</span> 
                            <h6 class="card-title">DPR Setujui Penambahan Anggaran BP Batam Rp565 Miliar</h6>
                          </a>
                        </div>
                          </div>
                    </div>
                            </div>
            </div>
        </div>
        <h5 class="text-center">Visit My Site : <a href="http://makro.id/" class="btn btn-outline-primary" target="_blank">makro.id</a></h5>
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
