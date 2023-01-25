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
                        <form action="{{ route('riwayat.update', $pemesanan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama villa</label>
                                <select name="id_villa" class="form-control @error('id_villa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $riwayats->id_pemesanan ? 'selected' : '' }}>
                                            {{ $data->nama_villa }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pemesanans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesanan</label>
                                <select name="id_pemesanan" class="form-control @error('id_pemesanan') is-invalid @enderror"
                                    readonly>
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $riwayats->id_pemesanan ? 'selected' : '' }}>
                                            {{ $data->jpesan }}
                                        </option>
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
                                    readonly>
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $riwayats->id_pemesanan ? 'selected' : '' }}>
                                            {{ $data->tgl_masuk }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pemesanans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal keluar</label>
                                <select name="tgl_keluar" class="form-control @error('tgl+keluar') is-invalid @enderror"
                                    readonly>
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $riwayats->id_pemesanan ? 'selected' : '' }}>
                                            {{ $data->tgl_keluar }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pemesanans')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <select name="harga" class="form-control @error('harga') is-invalid @enderror"
                                    readonly>
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $riwayats->id_villa ? 'selected' : '' }}>
                                            {{ $data->harga }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_villas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total</label>
                                <select name="total" class="form-control @error('total') is-invalid @enderror"
                                    readonly>
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $riwayats->id_pemesanan ? 'selected' : '' }}>
                                            {{ $data->total }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('pemesanans')
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
