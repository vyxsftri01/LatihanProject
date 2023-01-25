
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">Hireath<span style="color:rgb(201, 175, 126);">Villa</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"  aria-expanded="false" aria-label="Toggle navigation" >
	        <span class="fa fa-bars" ></span> Menu
	      </button>
	      <div class="collapse navbar-collapse"  id="ftco-nav">
	        <ul class="navbar-nav ml-auto" >
	        	<li class="nav-item" ><a href="{{url('hireath')}}" class="nav-link" >Halaman</a></li>
	        	<li class="nav-item"><a href="{{url('about')}}" class="nav-link">Tentang</a></li>
	        	
	        	<li class="nav-item"><a href="{{url('villaroom')}}" class="nav-link">Villa</a></li>
	          
	        </ul>
            <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle" >
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" >
										<img src="{{asset('assetn/images/profile1.jpg')}}" alt="user" />
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3" >
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="{{asset('assetn/images/profile1.jpg')}}" />
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
											<a href="{{url('form')}}" class="menu-link px-5">Identitas</a>
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