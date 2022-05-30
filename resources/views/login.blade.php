<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    @if( $msg = Session::get('error'))
    <p>{{ $msg }}</p>
    @endif
    <div class="login">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="card shadow p-3 mb-3 bg-body" style="border-radius: 1rem; width: 25rem;">
                        <div class="card-body text-center p-5">
                            <img src="../static/user.png" alt="" class="card-img-top mb-3" style="border-radius: 50rem; width: 150px">
                            <h3 class="mb-3">Sign in</h3>
                            <form method="POST" action="/login-post">
                                @csrf   
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="username" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary mt-3">Login</button>
                            </form>
                            <a href="/register">durung ana akun?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>