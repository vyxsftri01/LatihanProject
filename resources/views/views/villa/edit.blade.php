@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data villa
                    </div>
                    <div class="card-body">
                        <form action="{{ route('villa.update', $villa->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode Villa</label>
                                <input type="text" class="form-control  @error('kode_villa') is-invalid @enderror"
                                    name="kode_villa" value="{{ $villa->kode_villa }}">
                                @error('kode_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control  @error('status') is-invalid @enderror"
                                    name="status" value="{{ $villa->status }}">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nomor Villa</label>
                                <input type="text" class="form-control  @error('nama_villa') is-invalid @enderror"
                                    name="nama_villa" value="{{ $villa->nama_villa }}">
                                @error('nama_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Villa</label>
                                <input type="text" class="form-control  @error('jenis_villa') is-invalid @enderror"
                                    name="jenis_villa" value="{{ $villa->jenis_villa }}">
                                @error('jenis_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                @if (isset($villa) && $villa->foto)
                                    <p>
                                        <img src="{{ asset('images/villa/'. $villa->foto) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto" value="{{ $villa->foto }}">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Max Orang</label>
                                <input type="text" class="form-control  @error('max') is-invalid @enderror"
                                    name="max" value="{{ $villa->max }}">
                                @error('max')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lantai</label>
                                <input type="text" class="form-control  @error('lantai') is-invalid @enderror"
                                    name="lantai" value="{{ $villa->lantai }}">
                                @error('lantai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kamar</label>
                                <input type="text" class="form-control  @error('kamar') is-invalid @enderror"
                                    name="kamar" value="{{ $villa->kamar }}">
                                @error('kamar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kamar Mandi</label>
                                <input type="text" class="form-control  @error('kamar_mandi') is-invalid @enderror"
                                    name="kamar_mandi" value="{{ $villa->kamar_mandi }}">
                                @error('kamar_mandi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">View</label>
                                <input type="text" class="form-control  @error('view') is-invalid @enderror"
                                    name="view" value="{{ $villa->view }}">
                                @error('view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kasur</label>
                                <input type="text" class="form-control  @error('kasur') is-invalid @enderror"
                                    name="kasur" value="{{ $villa->kasur }}">
                                @error('kasur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga" value="{{ $villa->harga }}">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection