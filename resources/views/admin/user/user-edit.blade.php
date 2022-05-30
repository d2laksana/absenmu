<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>edit user</h1>
    <form action="/user/update/{{$data->id }}" method="POST">
        @csrf
        <input type="text" name="username" value="{{ $data->username }}">
        <input type="text" name="password" value="">
        <button type="submit">simpan</button>
    </form>
</body>
</html>