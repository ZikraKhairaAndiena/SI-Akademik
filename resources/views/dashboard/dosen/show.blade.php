@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-primary">Detail Data Dosen</h1>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-lg-6 mx-auto">

        <div class="card shadow-sm border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi Dosen</h5>
            </div>
            <div class="card-body bg-light">

                <div class="mb-3">
                    <label for="nik" class="form-label fw-bold text-primary">NIK</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $dosen->nik }}</p>
                </div>

                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold text-primary">Nama</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $dosen->nama }}</p>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold text-primary">Email</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $dosen->email }}</p>
                </div>

                <div class="mb-3">
                    <label for="no_telp" class="form-label fw-bold text-primary">Email</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $dosen->no_telp }}</p>
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label fw-bold text-primary">Prodi</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $dosen->prodi->nama }}</p>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold text-primary">Alamat</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $dosen->alamat }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/dashboard-dosen/" class="btn btn-success btn-sm">Kembali</a>
@endsection
