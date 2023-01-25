@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data tentang
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tentang.update', $tentang->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control"name="judul" value="{{ $tentang->judul }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" value="{{ $tentang->deskripsi }}" readonly>
                            </div>
                            <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('tentang.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                            </div>
                        </form>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
