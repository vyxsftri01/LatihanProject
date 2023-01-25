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
                        <form action="{{ route('review.store') }}" method="post">
                            @csrf
                           
                            <div class="mb-3">
                                <label class="form-label">Nama Pemesan</label>
                                <select name="id_identitas" class="form-control @error('id_identitas') is-invalid @enderror"
                                    id="">
                                    @foreach ($identitas as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_identitas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Villa</label>
                                <select name="id_villas" class="form-control @error('id_villas') is-invalid @enderror"
                                    id="">
                                    @foreach ($villa as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_villa }}</option>
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
                                    name="pesan">
                                @error('pesan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bintang</label>
                                <input type="text" class="form-control  @error('bintang') is-invalid @enderror"
                                    name="bintang">
                                @error('bintang')
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