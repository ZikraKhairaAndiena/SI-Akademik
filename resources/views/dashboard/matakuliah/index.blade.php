@extends('dashboard.layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar Mata Kuliah Jurusan TI</h1>
@if(session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<a href="/dashboard-matakuliah/create" class="btn btn-primary mb-2">Create Mata Kuliah</a>
<a href="/cetak-pdf" class="btn btn-success mb-2" target="_blank">Cetak-Pdf</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Kode Mata Kuliah </th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Aksi</th>
    </tr>
    @foreach ($matakuliahs as $matakuliah)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $matakuliah-> kode_mk }}</td>
        <td>{{ $matakuliah-> nama_mk }}</td>
        <td>{{ $matakuliah-> sks }}</td>
        <td>{{ $matakuliah-> semester }}</td>
        <td class="text-nowrap">
            <a href="/dashboard-matakuliah/{{ $matakuliah->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard-matakuliah/{{ $matakuliah->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
            <form action="/dashboard-matakuliah/{{ $matakuliah->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
            <button title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button></a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $matakuliahs->links() }}
@endsection
