@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data identitas
                    </div>
                    <div class="card-body">
                        <form action="{{ route('identitas.update', $identitas->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">No Pengguna</label>
                                <input type="number" class="form-control" name="no_pengguna" value="{{ $identitas->no_pengguna }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{ $identitas->nama }}" readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" readonly>{{ $identitas->alamat }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control"name="tgl_lahir" value="{{ $identitas->tgl_lahir }}" readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input type="text" class="form-control " name="jk" value="{{ $identitas->jk }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No Tlp</label>
                                <input type="number" class="form-control" name="no_tlp" value="{{ $identitas->no_tlp }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No KTP</label>
                                <input type="number" class="form-control" name="no_ktp" value="{{ $identitas->no_ktp }}">
                            </div>

                           <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('identitas.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection