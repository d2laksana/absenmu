<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2> {{ $waktu}} </h2>
    <h2> {{ $dataPresensi->waktu_awal}} </h2>
    @if( $msg = Session::get('error'))
    <p>{{ $msg }}</p>
    @endif
    <form action="/cekPresensi">
        <input type="text" name="presensi" id="">Presensi
        <button type="submit">Simpan</button>
        </form>
</body>
</html>