{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body{
            font-family: monospace;
            background-color: aqua;
        }
    </style>
</head>
<body>
<div class="container h-100">
    <div class="vh-100 row h-50 d-flex jursify-content-center align-items-center">
        <div class="card">
            <div class="card-body">
                <h2>LOGIN</h2>
                <form action="{{ url('welcome') }}" method="post">
                    @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg>
                            </span>
                            <input type="text" class="form-control" placeholder="you@example.com" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
                                </svg>
                            </span>
                            <input type="password" class="form-control" placeholder="At least 8 characters" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block form-control">Login</button>
                        <div class="pt-3 text-center">
                            <a href="register">Tidak Punya Akun? Buat Akun.</a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html> --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form action="{{ url('user/auth') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
