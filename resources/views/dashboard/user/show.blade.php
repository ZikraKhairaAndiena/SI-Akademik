@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 text-primary">Detail Data User</h1>
</div>

<div class="row">
    <div class="col-12 col-md-8 col-lg-6 mx-auto">

        <div class="card shadow-sm border-primary">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Informasi User</h5>
            </div>
            <div class="card-body bg-light">

                <div class="mb-3">
                    <label for="name" class="form-label fw-bold text-primary">Nama</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $user->name }}</p>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label fw-bold text-primary">Email</label>
                    <p class="form-control-plaintext border p-2 rounded bg-white">{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="/dashboard-mahasiswa/" class="btn btn-success btn-sm">Kembali</a>
@endsection