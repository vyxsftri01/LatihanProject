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
                        <div class="mb-3">
                            <label class="form-label">Kode Villa</label>
                            <input type="text" class="form-control" name="kode_villa" value="{{ $villa->kode_villa }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Villa</label>
                            <input type="text" class="form-control" name="nama_villa" value="{{ $villa->nama_villa }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Villa</label>
                            <input type="text" class="form-control" name="jenis_villa" value="{{ $villa->jenis_villa }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto villa</label>
                            @if (isset($villa) && $villa->foto)
                                <p>
                                    <img src="{{ asset('images/villa/' . $villa->foto) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Villa</label>
                            <input type="number" class="form-control" name="harga" value="{{ $villa->harga }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('villa.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

