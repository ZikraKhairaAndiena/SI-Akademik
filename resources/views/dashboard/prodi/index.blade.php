@extends('dashboard.layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar Program Studi Jurusan TI</h1>
@if(session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<a href="/dashboard-prodi/create" class="btn btn-primary mb-2">Create Prodi</a>
<a href="/cetak-pdf" class="btn btn-success mb-2" target="_blank">Cetak-Pdf</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nama</th>
    </tr>
    @foreach ($prodis as $prodi)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $prodi-> nama }}</td>
        <td class="text-nowrap">
            <a href="/dashboard-prodi/{{ $prodi->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard-prodi/{{ $prodi->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
            <form action="/dashboard-prodi/{{ $prodi->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
            <button title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button></a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
