<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sisw</title>
</head>
<body>
    <h1>tabah siswa</h1>
    <form action="/siswa/simpan" method="POST">
        @csrf

        <input type="text" name="nama">
        <input type="number" name="nisn">
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