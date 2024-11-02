@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-primary">Detail Data Mahasiswa</h1>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-lg-6 mx-auto">

        <div class="card shadow-sm border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi Mahasiswa</h5>
            </div>
            <div class="card-body bg-light">

                <div class="mb-3">
                    <label for="nim" class="form-label fw-bold text-primary">NIM</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $mahasiswa->nim }}</p>
                </div>

                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label fw-bold text-primary">Nama Lengkap</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $mahasiswa->nama_lengkap }}</p>
                </div>

                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label fw-bold text-primary">Tempat Lahir / Tanggal Lahir</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $mahasiswa->tempat_lahir }} / {{ date_format(date_create($mahasiswa->tgl_lahir), 'd F Y') }}</p>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold text-primary">Email</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $mahasiswa->email }}</p>
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label fw-bold text-primary">Prodi</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $mahasiswa->prodi->nama }}</p>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label fw-bold text-primary">Alamat</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $mahasiswa->alamat }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/dashboard-mahasiswa/" class="btn btn-success btn-sm">Kembali</a>
@endsection
