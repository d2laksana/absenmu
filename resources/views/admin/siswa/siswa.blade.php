<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sisw</title>
</head>
<body>
    <h1>halaman siswa</h1>
    <a href="/siswa/create">Tambah</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>kelas</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->kelas->nama }}</td>
            <td><a href="/siswa/edit/{{$item->id}}">Edit</a></td>
            <td><a href="/siswa/hapus/{{$item->id}}">Hapus</a></td>
        </tr>
            @endforeach
    </table>
</body>
</html>