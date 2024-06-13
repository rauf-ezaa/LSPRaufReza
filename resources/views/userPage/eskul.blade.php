@extends('userPage.masterUser')
@section('kontenUser')

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(/template/user/images/ilustrasi-pramuka-1_169.jpeg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container"> 
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<h1 class="mb-3 bread">Kegiatan Ekstrakurikuler</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Dokumentasi</span>
            <h3 class="mb-2">Kegiatan Madrasah Ibtidaiyah</h3>
          </div>
        </div>
      </section>
      @foreach($dataEskul as $data)
      <div class="col-md-12 text-center d-flex ftco-animate">
          	<div class="blog-entry justify-content-end mb-md-5">
              <a class="block-20 img" style="background-image: url('{{asset('/image/'.$data->image)}}');">
              </a>
              <div class="text px-md-5 pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                
                <h3 class="heading mt-2"><a >{{$data->keterangan}}</a></h3>
                
                <p><a href="blog-single.html" class="btn btn-primary">Continue <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          @endforeach

         
@endsection