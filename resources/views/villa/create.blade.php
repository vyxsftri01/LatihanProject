@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card" >
                    <div class="card-header" >
                        Data villa
                    </div>
                    <div class="card-body" >
                        <form action="{{ route('villa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kode Villa</label>
                                <input type="text" class="form-control  @error('kode_villa') is-invalid @enderror"
                                    name="kode_villa">
                                @error('kode_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <input type="text" class="form-control  @error('status') is-invalid @enderror"
                                    name="status">
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Villa</label>
                                <input type="text" class="form-control  @error('nama_villa') is-invalid @enderror"
                                    name="nama_villa">
                                @error('nama_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Villa</label>
                                <input type="text" class="form-control  @error('jenis_villa') is-invalid @enderror"
                                    name="jenis_villa">
                                @error('jenis_villa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror"
                                    name="foto">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Max Orang</label>
                                <input type="text" class="form-control  @error('max') is-invalid @enderror"
                                    name="max">
                                @error('max')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lantai</label>
                                <input type="text" class="form-control  @error('lantai') is-invalid @enderror"
                                    name="lantai">
                                @error('lantai')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kamar</label>
                                <input type="text" class="form-control  @error('kamar') is-invalid @enderror"
                                    name="kamar">
                                @error('kamar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kamar Mandi</label>
                                <input type="text" class="form-control  @error('kamar_mandi') is-invalid @enderror"
                                    name="kamar_mandi">
                                @error('kamar_mandi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">View</label>
                                <input type="text" class="form-control  @error('view') is-invalid @enderror"
                                    name="view">
                                @error('view')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kasur Perkamar</label>
                                <input type="text" class="form-control  @error('kasur') is-invalid @enderror"
                                    name="kasur">
                                @error('kasur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga sewa /malam</label>
                                <input type="number" class="form-control  @error('harga') is-invalid @enderror"
                                    name="harga">
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