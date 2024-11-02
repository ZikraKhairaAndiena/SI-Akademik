<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate PDF</title>
</head>
<body>
    <h1>Daftar Dosen</h1>
    <table border="1" cellpadding="5" cellspacing=0>
    <tr>
        <th>No</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon</th>
            <th>Prodi</th>
            <th>Alamat</th>
    </tr>
    @foreach ($dosens as $dosen)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $dosen-> nik }}</td>
        <td>{{ $dosen-> nama }}</td>
        <td>{{ $dosen-> email }}</td>
        <td>{{ $dosen-> no_telp }}</td>
        <td>{{ $dosen-> prodi->nama}}</td>
        <td>{{ $dosen-> alamat }}</td>
    </tr>
    @endforeach
</table>


</body>
</html>

