<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vacation Rental - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

        <link href="{{asset('assetz/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assetz/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assetz/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assetz/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 
    <link rel="stylesheet" href="{{asset('assetn/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('assetn/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetn/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetn/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assetn/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assetn/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assetn/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assetn/css/style.css')}}">
  </head>
  <body>
		<div class="wrap" style="background-color:rgb(201, 175, 126);">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+00 1234 567</a> or <span class="mailus">email us:</span> <a href="#">emailsample@email.com</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>



		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">Hireath<span style="color:rgb(201, 175, 126);">Villa</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="{{url('hireath')}}" class="nav-link">Halaman</a></li>
	        	<li class="nav-item"><a href="{{url('about')}}" class="nav-link">Tentang</a></li>
	        	
	        	<li class="nav-item"><a href="{{url('villaroom')}}" class="nav-link">Villa</a></li>
	          
	        </ul>
            <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="{{asset('assetz/media/avatars/300-1.jpg')}}" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="{{asset('assetz/media/avatars/300-1.jpg')}}" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">   {{ Auth::user()->name }} 
													<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">online</span></div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">   {{ Auth::user()->email }} </a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
										<a class="dropdown-item px-5" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
										</div>
										<div class="menu-item px-5">
											<a href="#" class="menu-link px-5">Identitas</a>
											<form id="logout-form" action=""  class="d-none" method="POST">
                                         @csrf
										 </form>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
	      </div>
	    </div>
	</nav>

    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('assetn/images/villa.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"></span> <span>Tentang Hireath<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Tentang</h1>
          </div>
        </div>
      </div>
    </section>

    <div class="container" >
          {{-- @php $no = 1; @endphp --}}
        @foreach ($tentang as $data)
        <div class="row">
            <!-- <center><h1 style="font-family:copperplate;">Hireath Villa</h1></center> -->
            <center>
                <h1 style = "font-family:courier,arial,helvetica;">{{ $data->judul }}</h1>
                <h4>
            <p>{{ $data->deskripsi }}</p>
            <p></p>
            </h4>
            </center>
        </div>
        @endforeach
    </div>
   
    <!-- <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url({{asset('assets/images/services-1.jpg')}});"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Map Direction</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url({{asset('assets/images/services-2.jpg')}});"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Accomodation Services</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url({{asset('assets/images/services-3.jpg')}});"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Great Experience</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section> -->


    <!-- <section class="ftco-section testimony-section bg-dark">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_2.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_3.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_4.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url({{asset('assets/images/person_1.jpg')}})">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url({{asset('assets/images/about.jpg')}});">
						</div>
						<h2>The most recommended vacation rental</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            <h2 class="mb-2">What we offer</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
							<div class="row">
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Tea Coffee</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-workout"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Hot Showers</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet-1"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Laundry</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>      
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Air Conditioning</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Free Wifi</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Kitchen</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Ironing</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Lovkers</h3>
		                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
		              </div>
		            </div>
		          </div>  
						</div>
					</div>
				</div>
			</div>
	</section> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="{{asset('assetn/js/jquery.min.js')}}"></script>
  <script src="{{asset('assetn/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assetn/js/popper.min.js')}}"></script>
  <script src="{{asset('assetn/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assetn/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assetn/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assetn/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assetn/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assetn/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assetn/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assetn/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assetn/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assetn/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assetn/js/google-map.js')}}"></script>
  <script src="{{asset('assetn/js/main.js')}}"></script>


   		<script src="{{asset('assetz/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assetz/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('assetz/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>


        		<script src="{{asset('assetz/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assetz/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assetz/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assetz/js/custom/intro.js')}}"></script>
		<script src="{{asset('assetz/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assetz/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assetz/js/custom/utilities/modals/new-target.js')}}"></script>
		<script src="{{asset('assetz/js/custom/utilities/modals/users-search.js')}}"></script>
    
  </body>
</html>




