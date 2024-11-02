@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Prodi</h1>
  </div>

<div class="row">
    <div class="col-6">
        <form action="/dashboard-prodi/{{ $prodi->id }}" method="post">
        @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama </label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" value="{{ old('nama', $prodi->nama) }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form>
    </div>
</div>
@endsection