<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru edit</title>
</head>
<body>
    <h1>edit guru</h1>
    <form action="/guru/update/{{$data->id }}" method="POST">
        @csrf
        <input type="text" name="nama" value="{{ $data->nama }}">
        <input type="number" name="nip" value="{{ $data->nip }}">
        <select name="kelas_id" >
            @foreach($kelas as $item) 
            <option value="{{ $item->id }}" {{ ($item->id == $data->kelas_id) ? 'selected' : ''  }}>{{ $item->nama }}</option>
            @endforeach
        </select>
        <button type="submit">simpan</button>
    </form>
</body>
</html>