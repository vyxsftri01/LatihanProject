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
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode pemesan</label>
                                <input type="text" class="form-control" name="no" value="{{ $transaksi->no }}"raedonly>
                            </div>
                            <div class="mb-3">
                               <label class="form-label">Nama Villa</label>
                                <input type="text" class="form-control" name="id_villas" value="{{ $transaksi->villas->nama_villa }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Total Harga</label>
                            <input type="text" class="form-control" name="id_pemesanans" value="{{ $transaksi->pemesanans->total }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Bayar</label>
                            <input type="text" class="form-control" name="bayar" value="{{ $transaksi->bayar }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Kembali</label>
                            <input type="text" class="form-control" name="sisa" value="{{ $transaksi->sisa }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                            </div>
                        </form>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
