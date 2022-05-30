<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>generate presensi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <form action="/simpan-code-presensi">
    <select name="jadwal_id">
        @foreach($data as $item) 
        <option value="{{ $item->id }}">{{ $item->mapel->mapel }} - {{ $item->kelas->nama }} - {{$item->Hari}} </option>
        @endforeach
    </select>
    <input type="datetime-local" name="waktu_awal">
    <input type="datetime-local" name="waktu_akhir">
    <input type="text" class="" id="presensi" name="presensi" value="">
    <a href="#" onclick="generate()" class="btn btn-primary">generate</a>
    <button type="submit">Simpan</button>
</form>
</body>
<script>
    

    // program to generate random strings

    // declare all characters
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    function generateString(length) {
        let result = ' ';
        const charactersLength = characters.length;
        for ( let i = 0; i < length; i++ ) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }

        return result;
    }

    function generate() {
        document.getElementById("presensi").value = generateString(10);
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>