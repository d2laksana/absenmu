<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah mapel</title>
</head>
<body>
    <h1>Tambah mapel</h1>
    <form action="/mapel/simpan" method="POST">
        @csrf

        <input type="text" name="mapel"> 

        <button type="submit">simpan</button>
    </form>
</body>
</html>