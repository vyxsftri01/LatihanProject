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
                                <input type="text" class="form-control  @error('no') is-invalid @enderror"
                                    name="no" value="{{ $pemesanan->no }}">
                                @error('no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Pemesan</label>
                                <select name="id_identitas" class="form-control @error('id_identitas') is-invalid @enderror"
                                    readonly>
                                    @foreach ($identitas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $pemesanan->id_identitas ? 'selected' : '' }}>
                                            {{ $data->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_identitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pilih Data villa</label>
                                <select name="nama_villa" class="form-control @error('id_villa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $pemesanan->id_villa ? 'selected' : '' }}>
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
                                <label class="form-label">Pesanan</label>
                                <input type="number" class="form-control  @error('jpesan') is-invalid @enderror"
                                    name="jpesan" value="{{ $pemesanan->jpesan }}">
                                @error('jpesan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lama Sewa</label>
                                <input type="number" class="form-control  @error('lama') is-invalid @enderror"
                                    name="lama" value="{{ $pemesanan->lama }}">
                                @error('lama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Masuk</label>
                                <input type="date" class="form-control  @error('tgl_masuk') is-invalid @enderror"
                                    name="tgl_masuk" value="{{ $pemesanan->tgl_masuk }}">
                                @error('tgl_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Keluar</label>
                                <input type="date" class="form-control  @error('tgl_keluar') is-invalid @enderror"
                                    name="tgl_keluar" value="{{ $pemesanan->tgl_keluar }}">
                                @error('tgl_keluar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga</label>
                                <select name="id_villa" class="form-control @error('id_villa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $pemesanan->id_villa ? 'selected' : '' }}>
                                            {{ $data->harga }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_villa')
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
