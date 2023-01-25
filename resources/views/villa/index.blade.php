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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Halaman Admin</h1>
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
											<li class="breadcrumb-item text-muted">edit</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">hapus</li>
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
										<div class="card-header align-items-center py-2 gap-2 gap-md-2">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												
												<!--end::Search-->
											</div>
                                            @include('layouts/_flash')
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Add customer-->
												<a href="{{ route('villa.create') }}" class="btn btn-primary">Create</a>
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
													<tr class="text-start text-dark-400 fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
                                                        
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
															</div>
														</th>
														<th class="min-w-150px">Kode Villa</th>
                                                        <th class="min-w-150px">Nama Villa</th>
														<th class="min-w-150px">Jenis Villa</th>
                                                        <th class="min-w-150px">Foto Villa</th>
                										<th class="min-w-150px">Harga/malam</th>
														<th class="text-end min-w-100px">Actions</th>
                                                        
													</tr>
													<!--end::Table row-->
                                                    
												</thead>
                                                
												<!--end::Table head-->
												<!--begin::Table body-->
                                                
                                                                
												<tbody class="fw-semibold text-gray-600">
                                                    
                                                    @php $no = 1; @endphp
                                                    @foreach ($villa as $data)
									
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $data->kode_villa }}</td>
                                                            <td>{{ $data->nama_villa }}</td>
                                                            <td>{{ $data->jenis_villa }}</td>
                                                            <td>
                                                                <img src="{{ $data->image() }}" style="width: 150px; height:100px;"  alt="">
                                                            </td>
                                                            <td>{{ $data->harga }}</td>
                                                            <td>
                                                                <form action="{{ route('villa.destroy', $data->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a href="{{ route('villa.edit', $data->id) }}"
                                                                        class="btn btn-sm btn-outline-success">
                                                                        Edit
                                                                    </a> |
                                                                    <a href="{{ route('villa.show', $data->id) }}"
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