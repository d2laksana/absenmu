<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>

<body>
    @Auth
    <h1>dashboard</h1>
    <h2> {{Auth::user()->role }} </h2>
    @if (Auth::user()->role == 'admin')
    <h1>anda admin</h1>
    @elseif(Auth::user()->role == 'guru')
    <a href="/generate/presensi">generate presensi</a>
    @elseif(Auth::user()->role == 'siswa')
    <a href="/siswa/presensi">disini</a>
    @endif

    <a href="/logout" class="btn">Logout</a>
        @else
        <a href="/login">silahkan login</a>
    @endauth
</body>

</html>