<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
</head>
<body>
    <h1>tambah jadwal</h1>
    <form action="/jadwal/simpan" method="POST">
        @csrf
        <select name="mapel_id" >
            @foreach($mapel as $item)
            <option value="{{$item->id}}"> {{$item->mapel}} </option>
            @endforeach
        </select>
        
        <select name="guru_id" >
            @foreach($guru as $item)
            <option value="{{$item->id}}"> {{$item->nama}} </option>
            @endforeach
        </select>
        <input type="text" name="Hari">
        <input type="time" name="jam">

        <select name="kelas_id">
            @foreach($kelas as $item) 
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>

        <button type="submit">simpan</button>
    </form>
</body>
</html>