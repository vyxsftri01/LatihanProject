@extends('layouts.admin')

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
                        <form action="{{ route('riwayat.update', $riwayat->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                               <label class="form-label">Nama Villa</label>
                                <input type="text" class="form-control" name="id_villas" value="{{ $riwayat->villa->nama_villa }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesanan</label>
                                <input type="number" class="form-control"name="id_pemesanans" value="{{ $riwayat->pemesanan->jpesan }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tgl_masuk" value="{{ $riwayat->pemesanan->tgl_masuk }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Keluar</label>
                                <input type="date" class="form-control" name="tgl_keluar" value="{{ $riwayat->pemesanan->tgl_keluar }}" readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $riwayat->villa->harga }}"
                                readonly>

                            </div>
                            <div class="mb-3">
                            <label class="form-label">Total</label>
                            <input type="text" class="form-control" name="total" value="{{ $riwayat->pemesanan->total }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('riwayat.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                            </div>
                        </form>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
