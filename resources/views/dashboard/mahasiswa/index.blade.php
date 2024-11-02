@extends('dashboard.layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
@if(session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<a href="/dashboard-mahasiswa/create" class="btn btn-primary mb-2">Create Mahasiswa</a>
<a href="/cetak-pdf" class="btn btn-success mb-2" target="_blank">Cetak-Pdf</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Email</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Aksi</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $mahasiswa-> nim }}</td>
        <td>{{ $mahasiswa-> nama_lengkap }}</td>
        <td>{{ $mahasiswa-> tempat_lahir }}</td>
        <td>{{ $mahasiswa-> tgl_lahir }}</td>
        <td>{{ $mahasiswa-> email }}</td>
        <td>{{ $mahasiswa-> prodi->nama}}</td>
        <td>{{ $mahasiswa-> alamat }}</td>
        <td class="text-nowrap">
            <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard-mahasiswa/{{ $mahasiswa->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
            <form action="/dashboard-mahasiswa/{{ $mahasiswa->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
            <button title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button></a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $mahasiswas->links() }}
@endsection
