<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mapel</title>
</head>
<body>
    <h1>halaman Mapel</h1>
    <a href="/kelas/create">Tambah</a>
    <table>
        <tr>
            <th>Nama</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td><a href="/kelas/edit/{{$item->id}}">Edit</a></td>
            <td><a href="/kelas/hapus/{{$item->id}}">Hapus</a></td>
        </tr>
            @endforeach
    </table>
</body>
</html>