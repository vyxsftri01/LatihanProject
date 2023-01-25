@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data transaksi
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">No Pesanan</label>
                                <input type="text" class="form-control  @error('no') is-invalid @enderror"
                                    name="no" value="{{ $transaksi->no }}">
                                @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Villa</label>
                                <select name="id_villas" class="form-control @error('id_villas') is-invalid @enderror"
                                    readonly>
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $transaksi->id_villa ? 'selected' : '' }}>
                                            {{ $data->nama_villa }}
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
                                <select name="id_pemesanans" class="form-control @error('id_pemesanans') is-invalid @enderror"
                                    readonly>
                                    @foreach ($pemesanan as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $transaksi->id_pemesanans ? 'selected' : '' }}>
                                            {{ $data->total }}
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
                                <label class="form-label">Bayar</label>
                                <input type="text" class="form-control  @error('bayar') is-invalid @enderror"
                                    name="bayar" value="{{ $transaksi->bayar }}">
                                @error('bayar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kembali</label>
                                <input type="text" class="form-control  @error('sisa') is-invalid @enderror"
                                    name="sisa" value="{{ $transaksi->sisa }}">
                                @error('sisa')
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
