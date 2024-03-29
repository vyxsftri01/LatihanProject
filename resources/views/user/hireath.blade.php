@extends('layouts.user')

@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('assetn/images/villa.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Selamat datang di Hereath Villa</h2>
          	<h1 class="mb-4">Sewa Villa untuk liburanmu</h1>
          </div>
          </div>
      </div>
</div>


   
    <section class="ftco-section ftco-services">
    	<div class="container"> 
    		<div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa1.webp')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Bounches villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa2.jpg')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Crystal villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url('{{asset('assetn/images/villa3.jpeg')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Zalisni villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
          <center>
      <p><a href="{{ route('review.create') }}" class="btn" style="background-color:rgb(201, 175, 126);">Berpartisipasi-></a></p>

      </center>
            <div class="carousel-testimony owl-carousel" >
            {{-- @php $no = 1; @endphp --}}
                    @foreach ($review as $data)
							<div class="item">
                <div class="testimony-wrap d-flex" >
                  <div class="user-img" style="background-image: url('{{asset('images/profile/index.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center" >
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>{{ $data->pesan }}</p>
                    <p class="name">{{ $data->identitas->nama }}</p>
                    <span class="position">{{ $data->villas->nama_villa }}</span>
                  </div>
                </div>
              </div>
              @endforeach
						</div>
          </div>
        </div>
      </div>
    </section>


    
 @endsection
