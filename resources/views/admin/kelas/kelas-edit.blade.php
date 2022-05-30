<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kelas Edit</title>
</head>
<body>
    <h1>edit kelas</h1>
    <form action="/kelas/update/{{$data->id }}" method="POST">
        @csrf
        <input type="text" name="nama" value="{{ $data->nama }}">
        <button type="submit">simpan</button>
    </form>
</body>
</html>