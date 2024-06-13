@extends('userPage.masterUser')
@section('kontenUser')
<div class="hero-wrap ftco-degree-bg" style="background-image: url(/template/user/images/indexUser.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Sistem Informasi Madrasah Ibtidaiyah </h1>
	            <p style="font-size: 18px;">Pendidikan yang Maju adalah awal dari generasi dan bangsa yang maju</p>
	            
	            
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section bagian (make-your-trip) -->
    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Dokumentasi</span>
            <h2 class="mb-2">Kegiatan Madrasah Ibtidaiyah</h2>
          </div>
        </div>
      </section>
      
      @foreach($dataHome as $dataHome)
      <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a class="block-20 img" style="background-image: url('{{asset('/image/'.$dataHome->image)}}');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">{{$dataHome->keterangan}}</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
        @endforeach

          <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a class="block-20 img" style="background-image: url(/template/user/images/guru-ngjar.jpeg);">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Kegiatan</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
    
@endsection