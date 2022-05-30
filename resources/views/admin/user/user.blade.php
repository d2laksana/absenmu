<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
    <h1>halaman user</h1>
    <a href="/user/create">Tambah</a>
    <h1></h1>
        <tr>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Role</th>
        </tr>
        @foreach($data as $item)
        <tr>
            @if ( $item->role == 'guru')
            <td> {{ $item->guru->nama }} </td>
            @elseif ($item->role == 'siswa')
            <td> {{ $item->siswa->nama }} </td>
            @else
            <td></td>
            
            @endif
            <td>{{ $item->username }}</td>
            <td>{{ $item->role }}</td>
            <td><a href="/user/edit/{{$item->id}}">Edit</a></td>
            <td><a href="/user/hapus/{{$item->id}}">Hapus</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>