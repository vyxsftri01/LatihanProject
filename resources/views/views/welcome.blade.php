
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vacation Rental - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

        <link href="{{asset('assetb/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assetb/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assetb/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assetb/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assetb/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('assetb/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetb/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetb/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assetb/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assetb/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assetb/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assetb/css/style.css')}}">
  </head>
  <body>
  <div id="app" style="background-color:rgb(201, 175, 126);">
   <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:rgb(201, 175, 126);">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 Hireath Villa
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      </div>





    <!-- END nav -->



    <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('assetb/img/backgrounds/18.jpg')}}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Selamat datang di Villa Arsela</h2>
          	<h1 class="mb-4">Sewa Villa untuk liburanmu</h1>
          </div>
          </div>
      </div>
</div>



    <section class="ftco-section ftco-services" >
    	<div class="container" >
    		<div class="row">
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate" >
            <div class="d-block services-wrap text-center"  style="background-color:rgb(201, 175, 126);">
              <div class="img" style="background-image: url('{{asset('assetb/images/villa1.jpg')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Bounches villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center"  style="background-color:rgb(201, 175, 126);">
              <div class="img" style="background-image: url('{{asset('assetb/images/villa3.jpg')}}');"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading">Crystal villa</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center"  style="background-color:rgb(201, 175, 126);">
              <div class="img" style="background-image: url('{{asset('assetb/images/villa1.jpg')}}');"></div>
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
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url('{{asset('assetb/images/profile1.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>Fasilitas yang kumplit dan pelayanan yang sangat bagus! Menyenangkan!</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url('{{asset('assetb/images/profile2.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>Kyaaa website yang sangat membantu!>_<</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url('{{asset('assetb/images/profile3.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>Lov It!!!!!!!!!!!!.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url('{{asset('assetb/images/profile4.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>Sendal saya tertinggal T T</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Businesswoman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url('{{asset('assetb/images/.jpg')}}')">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left" style="color:rgb(201, 175, 126);"></i>
                    </span>
                    <p>So beautiful beautifull vieww awwww!!!</p>
                    <p class="name">Asahiiiiuii</p>
                    <span class="position">Miner's Chubhouse</span>
                  </div>
                </div>
              </div>
						</div>
          </div>
        </div>
      </div>
    </section>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assetb/js/jquery.min.js')}}"></script>
  <script src="{{asset('assetb/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('assetb/js/popper.min.js')}}"></script>
  <script src="{{asset('assetb/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assetb/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('assetb/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assetb/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('assetb/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('assetb/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('assetb/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('assetb/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assetb/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assetb/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assetb/js/google-map.js')}}"></script>
  <script src="{{asset('assetb/js/main.js')}}"></script>


   		<script src="{{asset('assetb/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assetb/js/scripts.bundle.js')}}"></script>
		<script src="{{asset('assetb/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>


        		<script src="{{asset('assetb/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assetb/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assetb/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assetb/js/custom/intro.js')}}"></script>
		<script src="{{asset('assetb/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assetb/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assetb/js/custom/utilities/modals/new-target.js')}}"></script>
		<script src="{{asset('assetb/js/custom/utilities/modals/users-search.js')}}"></script>

  </body>
</html>


