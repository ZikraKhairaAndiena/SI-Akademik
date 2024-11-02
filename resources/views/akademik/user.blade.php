@extends('layouts.main')
@section('title')
@section('navMhs','active')

@section('content')
<h1>Daftar User Jurusan TI</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
            <th>Nama</th>
            <th>Email</th>

    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $loop->index + 1 }}</td>
        {{-- <td>{{ $mahasiswa->firstItem()+$loop->index }} </td> --}}
        <td>{{ $user-> namae}}</td>
        <td>{{ $user-> email }}</td>

    </tr>
    @endforeach
</table>
@endsection
