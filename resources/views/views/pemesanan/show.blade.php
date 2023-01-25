@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header" style="background-color:rgb(201, 175, 126);">
                        Data pemesanan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode Pesanan</label>
                                <input type="text" class="form-control" name="no" value="{{ $pemesanan->no }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Pemmesan</label>
                                <input type="text" class="form-control" name="id_identitas" value="{{ $pemesanan->identitas->nama }}"
                                    readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Nama Villa</label>
                            <input type="text" class="form-control" name="id_villas" value="{{ $pemesanan->villas->nama_villa }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lama Sewa</label>
                                <input type="number" class="form-control" name="lama" value="{{ $pemesanan->lama }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control" name="tgl_masuk" value="{{ $pemesanan->tgl_masuk }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Keluar</label>
                                <input type="date" class="form-control" name="tgl_keluar" value="{{ $pemesanan->tgl_keluar }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <input type="text" class="form-control" name="harga" value="{{ $pemesanan->villas->harga }}"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total</label>
                                <input type="number" class="form-control" name="total" value="{{ $pemesanan->total }}" readonly>
                            </div>
                            <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('transaksi.create') }}" class="btn" style="background-color:rgb(201, 175, 126);">Lanjutkan transaksi</a>
                            </div>
                            </div>
                        </form>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
