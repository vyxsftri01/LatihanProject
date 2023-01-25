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

<!-- <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb"> -->
            <div class="container" >
                    <div class="row justify-content-center" style="background-image: url('{{asset('assetn/images/bgndclr.jpg')}}');" data-stellar-background-ratio="0.5">
                            <div class="col-lg-4" style="background-image: url('{{asset('assetn/images/white.jpg')}}');" data-stellar-background-ratio="0.5" >
                            @include('layouts/_flash')
                            <form action="{{ route('transaksi.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
							<h3 class="mb-3" style="font-color: light;">Pesan Villa</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" class="form-control  @error('no') is-invalid @enderror" placeholder="Kode Pesanan" 
									name="no">
									@error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
			    				    </div>
								</div>
								<div class="col-md-12">
								 <div class="form-group">
			    				  <div class="input-wrap">
			            		   <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <select name="id_villas" class="form-control @error('id_villas') is-invalid @enderror"
                                            id="">
                                            @foreach ($villa as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_villa }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_villas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                  </div>
			    				 </div>
								</div>
                                <div class="col-md-12">
								 <div class="form-group">
			    				  <div class="input-wrap">
			            		  <div class="icon"></div>
			            		  <select name="id_pemesanans" class="form-control @error('id_pemesanans') is-invalid @enderror"
                                    id="">
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}">{{ $data->total }}</option>
                                    @endforeach
                                  </select>
                                    @error('id_pemesanans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
		            		      </div>
			    				 </div>
								</div>
                                <div class="col-md-12">
									<div class="form-group">
			    					<input type="number" class="form-control @error('bayar') is-invalid @enderror" placeholder="Bayar"
									name="bayar">
									@error('bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
			    				</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Kirim" class="btn py-3 px-4" style="background-color:rgb(201, 175, 126);">
			            </div>
								</div>
							</div>
	    			</form>
	    		
	    	</div>
      </div>
<!-- </section> -->

    
        

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




