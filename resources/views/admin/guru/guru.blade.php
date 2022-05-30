<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru</title>
</head>
<body>
    <h1>halaman Guru</h1>
    <a href="/guru/create">Tambah</a>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>kelas</th>
        </tr>
        @foreach($guru as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->nip }}</td>
            <td>{{ $item->kelas->nama }}</td>
            <td><a href="/guru/edit/{{$item->id}}">Edit</a></td>
            <td><a href="/guru/hapus/{{$item->id}}">Hapus</a></td>
        </tr>
            @endforeach
    </table>
</body>
</html>