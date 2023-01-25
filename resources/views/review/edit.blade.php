@extends('layouts.app')

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
                                <label class="form-label">Nama Pemesan</label>
                                <select name="id_identitas" class="form-control @error('id_identitas') is-invalid @enderror"
                                    readonly>
                                    @foreach ($identitas as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $review->id_identitas ? 'selected' : '' }}>
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
                                <select name="id_villas" class="form-control @error('id_villa') is-invalid @enderror"
                                    readonly>
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $review->id_villa ? 'selected' : '' }}>
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
                                <label class="form-label">Pesan</label>
                                <input type="text" class="form-control  @error('pesan') is-invalid @enderror"
                                    name="pesan" value="{{ $review->pesan }}">
                                @error('jpesan')
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
