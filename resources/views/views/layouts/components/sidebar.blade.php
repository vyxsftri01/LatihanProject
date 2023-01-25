					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle" style="background-color: #ff">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-12" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<!-- <a href="index.html">
								<img alt="Logo" src="{{asset('assetz/media/logos/landing-dark.svg')}}" class="h-30px app-sidebar-logo-default" />
								<img alt="Logo" src="{{asset('assetz/media/logos/index.png')}}" class="h-20px app-sidebar-logo-minimize" />



							</a> -->
							<center><h2>
							<p class="font-family color-light h-30px app-sidebar-logo-default" style = "font-family:courier,arial,helvetica;  font-color:color-light;  " >Villa Anggrek</p>
							</hireath villa2></center>

                            <hireath villar>

							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-sselamat datang adow btn-sm btn-color-muted btn-active-color-primary body-bg selamat datang-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<!--begin::Svg Icon | patliburanmu: icons/duotune/arrows/arr079.svg-->
								<span class="svg-icon svg-icon-2 rotate-180">
									<svg widtliburanmu="24" liburanmueigliburanmut="24" viewBox="0 0 24 24" fill="none" xmlns="liburanmuttp://www.w3.org/2000/svg">
										<patliburanmu opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
										<patliburanmu d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-liburanmuidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper liburanmuover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-liburanmueigliburanmut="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
								<!--begin::Menu-->
								<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
									<!--begin:Menu item-->
									<div data-kt-menu-trigger="click" class="menu-item liburanmuere sliburanmuow menu-accordion">
										<!--begin:Menu link-->
										<span class="menu-link">
											<span class="menu-icon">
												<!--begin::Svg Icon | patliburanmu: icons/duotune/general/gen025.svg-->
												<span class="svg-icon svg-icon-2">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Data</span>
											<span class="menu-arrow"></span>
										</span>
										<!--end:Menu link-->
										<!--begin:Menu sub-->
										<div class="menu-sub menu-sub-accordion">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('villa.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Villa</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('identitas.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Identitas Pengguna</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->

											<!--end:Menu item-->
											<!--begin:Menu item-->

											<!--end:Menu item-->
											<!--begin:Menu item-->

											<!--end:Menu item-->
											<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
												<!--begin:Menu item-->
												<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('pemesanan.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Data Pemesan</span>
												</a>
												<!--end:Menu link-->
											    </div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('transaksi.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Data Transaksi</span>
												</a>
												<!--end:Menu link-->
											    </div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('review.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Review</span>
												</a>
												<!--end:Menu link-->
											    </div>
												<!--end:Menu item-->

												<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="{{ route('tentang.index') }}">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Tentang</span>
												</a>
												<!--end:Menu link-->
											    </div>
												<!--end:Menu item-->
											</div>
											<div class="menu-item">
												<div class="menu-content">
													<a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
														<span data-kt-toggle-text-target="true">Show More</span>
														<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
														<span class="svg-icon toggle-on svg-icon-2 me-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
														<span class="svg-icon toggle-off svg-icon-2 me-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</a>
												</div>
											</div>
										</div>
										<!--end:Menu sub-->
									</div>
									<!--end:Menu item-->



								</div>
								<!--end::Menu-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->
						<!--begin::Footer-->

						<!--end::Footer-->
					</div>
