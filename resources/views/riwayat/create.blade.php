@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data riwayat
                    </div>
                    <div class="card-body">
                        <form action="{{ route('riwayat.store') }}" method="post">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label">Nama Villa</label>
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
                            <div class="mb-3">
                                <label class="form-label">Pesanan</label>
                                <select name="id_pemesanans" class="form-control @error('id_pemesanans') is-invalid @enderror"
                                    id="">
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}">{{ $data->jpesan }}</option>
                                    @endforeach
                                </select>
                                @error('id_pemesanans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal masuk</label>
                                <select name="tgl_masuk" class="form-control @error('tgl_masuk') is-invalid @enderror"
                                    id="">
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}">{{ $data->tgl_masuk }}</option>
                                    @endforeach
                                </select>
                                @error('tgl_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal keluar</label>
                                <select name="tgl_keluar" class="form-control @error('tgl_keluar') is-invalid @enderror"
                                    id="">
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}">{{ $data->tgl_keluar }}</option>
                                    @endforeach
                                </select>
                                @error('tgl_keluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">harga</label>
                                <select name="harga" class="form-control @error('harga') is-invalid @enderror"
                                    id="">
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}">{{ $data->harga }}</option>
                                    @endforeach
                                </select>
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total</label>
                                <select name="total" class="form-control @error('total') is-invalid @enderror"
                                    id="">
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}">{{ $data->total }}</option>
                                    @endforeach
                                </select>
                                @error('total')
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