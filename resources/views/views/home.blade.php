<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Hireath Villa</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('DataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

        <link href="{{asset('assetz/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assetz/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

        <link href="{{asset('assetz/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assetz/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
<div id="app" style="background-color:rgb(201, 175, 126);">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:rgb(201, 175, 126);">
            <div class="container" style="background-color:rgb(201, 175, 126);">
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
                    {{-- <ul class="navbar-nav me-auto"> --}}
                        {{-- menu dikiri --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('layouts.home') }}">
                                Siswa
                            </a>
                        </li>
                    </ul> --}}

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
                                <div class="menu-item">
										<a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
										</div>
                                @role('member')
										<div class="dropdown-item">
											<a href="{{url('hireath')}}" class="menu-link">Masuk-></a>
											<form id="logout-form" action=""  class="d-none" method="POST">
                                         @csrf
										 </form>
										</div>
                                        @endrole
                                      @role('admin')
										<div class="dropdown-item">
											<a href="{{url('index')}}" class="menu-link">Masuk-></a>
											<form id="logout-form" action=""  class="d-none" method="POST">
                                         @csrf
										 </form>
										</div>
                                        @endrole


                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="hero-wrap js-fullheight" style="background-image: url('{{asset('assetn/images/villa.jpg')}}');" data-stellar-background-ratio="0.5">
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
        </main>
    </div>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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


