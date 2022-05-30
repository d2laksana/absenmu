<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
</head>
<body>
    <h1>halaman jadwal</h1>
    <a href="/jadwal/create">Tambah</a>
    <table>
        <tr>
            <th>Mapel</th>
            <th>Guru</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Kelas</th>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->mapel->mapel }}</td>
            <td> {{ $item->guru->nama }} </td>
            <td> {{$item->Hari}} </td>
            <td> {{$item->jam}} </td>
            <td>{{ $item->kelas->nama }}</td>
            <td><a href="/jadwal/edit/{{$item->id}}">Edit</a></td>
            <td><a href="/jadwal/hapus/{{$item->id}}">Hapus</a></td>
        </tr>
            @endforeach
    </table>
</body>
</html>