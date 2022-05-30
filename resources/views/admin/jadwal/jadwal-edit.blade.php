<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>edit jadwal</h1>
    <form action="/jadwal/update/{{$data->id }}" method="POST">
        @csrf
        <select name="mapel_id" >
            @foreach($mapel as $item)
            <option value="{{$item->id}}" {{ ($item->id == $data->mapel_id) ? 'selected' : '' }} > {{$item->mapel}} </option>
            @endforeach
        </select>
        
        <select name="guru_id" >
            @foreach($guru as $item)
            <option value="{{$item->id}}" {{ ($item->id == $data->guru_id) ? 'selected' : '' }}> {{$item->nama}} </option>
            @endforeach
        </select>

        <input type="text" name="Hari" value="{{ $data->Hari }}">
        <input type="time" name="jam" value="{{ $data->jam }}">
        <select name="kelas_id" >
            @foreach($kelas as $item) 
            <option value="{{ $item->id }}" {{ ($item->id == $data->kelas_id) ? 'selected' : ''  }}>{{ $item->nama }}</option>
            @endforeach
        </select>
        <button type="submit">simpan</button>
    </form>
</body>
</html>