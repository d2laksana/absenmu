<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru</title>
</head>
<body>
    <h1>tabah Guru</h1>
    <form action="/guru/simpan" method="POST">
        @csrf

        <input type="text" name="nama">
        <input type="number" name="nip">
        <select name="kelas_id">
            @foreach($kelas as $item) 
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        <input type="text" name="username">
        <input type="text" name="password">

        <button type="submit">simpan</button>
    </form>
</body>
</html>