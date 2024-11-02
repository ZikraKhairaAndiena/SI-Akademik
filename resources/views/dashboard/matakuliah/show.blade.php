@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-primary">Detail Data Mata Kuliah</h1>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-lg-6 mx-auto">

        <div class="card shadow-sm border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi Mata Kuliah</h5>
            </div>
            <div class="card-body bg-light">



                <div class="mb-3">
                    <label for="kode_mk" class="form-label fw-bold text-primary">Kode Mata Kuliah</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->kode_mk }}</p>
                </div>

                <div class="mb-3">
                    <label for="nama_mk" class="form-label fw-bold text-primary">Nama Mata Kuliah</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->nama_mk }}</p>
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label fw-bold text-primary">SKS</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->sks }}</p>
                </div>

                <div class="mb-3">
                    <label for="semester" class="form-label fw-bold text-primary">Semester</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $matakuliah->semester }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/dashboard-matakuliah/" class="btn btn-success btn-sm">Kembali</a>
@endsection
