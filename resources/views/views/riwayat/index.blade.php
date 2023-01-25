	@extends('layouts.admin')

@section('content')


    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-light fw-bold fs-3 flex-column justify-content-center my-0">Halaman Admin</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="{{asset('assetz/index.html')}}" class="text-muted text-hover-primary">Tambah</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Edit</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Hapus</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Category-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Category" />
												</div>
												<!--end::Search-->
											</div>
                                            @include('layouts/_flash')
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Add customer-->
												<a href="{{ route('riwayat.create') }}" class="btn btn-primary">Create</a>
												<!--end::Add customer-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
															</div>
														</th>
														
														<th class="min-w-110px"><h6>Nama Villa</h6></th>
                                                        <th class="min-w-100px"><h6>Pesanan</h6></th>
														<th class="min-w-100px"><h6>Tanggal masuk</h6></th>
                										<th class="min-w-100px"><h6>Tanggal keluar</h6></th>
                                                        <th class="min-w-120px"><h6>Harga</h6></th>
                                                        <th class="min-w-120px"><h6>Total</h6></th>
														<th class="min-w-60px"><h6>Actions</h6></th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
                                                
                                                                
												<tbody class="fw-semibold text-gray-700">
                                                    {{-- @php $no = 1; @endphp --}}
                                                    @foreach ($riwayat as $data)
                                                    <hr>
                                                        <tr>
                                                            {{-- <td>{{ $no++ }}</td> --}}
                                                            
                                                            <td>{{ $data->pemesanans->nama_villa }}</td>
                                                            <td>{{ $data->pemesanans->jpesan }}</td>
															<td>{{ $data->pemesanans->tgl_masuk }}</td>
															<td>{{ $data->pemesanans->tgl_keluar }}</td>
                                                            <td>{{ $data->villas->harga }}</td>
                                                            <td>{{ $data->pemesanans->total }}</td>
                                                            
                                                            <td>
                                                                <form action="{{ route('riwayat.destroy', $data->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a href="{{ route('riwayat.edit', $data->id) }}"
                                                                        class="btn btn-sm btn-outline-success">
                                                                        Edit
                                                                    </a> |
                                                                    <a href="{{ route('riwayat.show', $data->id) }}"
                                                                        class="btn btn-sm btn-outline-warning">
                                                                        Show
                                                                    </a> |
                                                                    <br>
                                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                        </tr>
													<!--begin::Table row-->

													<!--end::Table row-->
													


												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Category-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->

						<!--end::Footer-->
					</div>

@endsection