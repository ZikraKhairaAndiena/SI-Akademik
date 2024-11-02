@extends('dashboard.layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar Dosen Jurusan TI</h1>
@if(session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<a href="/dashboard-dosen/create" class="btn btn-primary mb-2">Create Dosen</a>
<a href="/cetak-pdf" class="btn btn-success mb-2" target="_blank">Cetak-Pdf</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>Aksi</th>
    </tr>
    @foreach ($dosens as $dosen)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $dosen-> nik }}</td>
        <td>{{ $dosen-> nama}}</td>
        <td>{{ $dosen-> email }}</td>
        <td>{{ $dosen-> no_telp }}</td>
        <td>{{ $dosen-> prodi->nama}}</td>
        <td>{{ $dosen-> alamat }}</td>
        <td class="text-nowrap">
            <a href="/dashboard-dosen/{{ $dosen->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard-dosen/{{ $dosen->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
            <form action="/dashboard-dosen/{{ $dosen->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
            <button title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button></a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $dosens->links() }}
@endsection
