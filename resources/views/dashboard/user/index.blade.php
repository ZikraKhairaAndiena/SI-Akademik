@extends('dashboard.layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar User</h1>
@if(session('pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
   {{ session('pesan') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<a href="/dashboard-user/create" class="btn btn-primary mb-2">Create User</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            {{-- <th>Password</th> --}}
            <th>Aksi</th>
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $user-> name }}</td>
        <td>{{ $user-> email }}</td>
        {{-- <td>{{ $user-> password }}</td> --}}
        <td class="text-nowrap">
            <a href="/dashboard-user/{{ $user->id }}" title="Lihat Detail" class="btn btn-success btn-sm"><i class="bi bi-eye"></i></a>
            <a href="/dashboard-user/{{ $user->id }}/edit" title="Edit Data" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
            <form action="/dashboard-user/{{ $user->id }}" method="post" class="d-inline">
                @method('DELETE')
                @csrf
            <button title="Hapus Data" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></button></a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $users->links() }}
@endsection
