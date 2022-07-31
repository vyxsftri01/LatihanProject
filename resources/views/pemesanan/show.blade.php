@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data pemesanan
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pemesanan.update', $pemesanan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Kode Pesanan</label>
                                <input type="text" class="form-control" name="no" value="{{ $pemesanan->no }}"raedonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Pemmesab</label>
                                <input type="text" class="form-control" name="id_identitas" value="{{ $pemesanan->identitas->nama }}"
                                    readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Nama Villa</label>
                            <input type="text" class="form-control" name="nama_villa" value="{{ $pemesanan->villa->nama_villa }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesanan</label>
                                <input type="number" class="form-control"name="jpesan" value="{{ $pemesanan->jpesan }}" readonly>
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
                            <input type="text" class="form-control" name="id_villa" value="{{ $pemesanan->villa->harga }}"
                                readonly>

                            </div>
                            <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('wali.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                            </div>
                        </form>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
