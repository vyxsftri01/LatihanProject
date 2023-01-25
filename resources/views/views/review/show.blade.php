@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data review
                    </div>
                    <div class="card-body">
                        <form action="{{ route('review.update', $review->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Nama Pemmesan</label>
                                <input type="text" class="form-control" name="id_identitas" value="{{ $review->identitas->nama }}"
                                    readonly>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Nama Villa</label>
                            <input type="text" class="form-control" name="id_villas" value="{{ $review->villas->nama_villa }}"
                                readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <input type="number" class="form-control"name="pesan" value="{{ $review->pesan }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bintang</label>
                                <input type="number" class="form-control" name="bintang" value="{{ $review->bintang }}" readonly>
                            </div>
                            <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('review.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                            </div>
                        </form>
         
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
