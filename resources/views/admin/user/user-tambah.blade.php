<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>tambah user</h1>
    <form action="/user/simpan" method="POST">
        @csrf
        <input type="text" name="username">
        <input type="text" name="password">
        <select name="role" id="">
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
        </select>

        <button type="submit">simpan</button>
    </form>
</body>
</html>