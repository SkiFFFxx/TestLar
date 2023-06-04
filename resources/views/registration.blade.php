@extends('/dry')


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body style="padding: 0 550px;"><br>
<h1>Регистрация</h1><br>


<form method="post" action="{{route('user.registration') }} ">
    @csrf
    <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <input type="password" name="password" id="password" placeholder="Введите пароль" class="form-control"><br>
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <button  type="submit" class="btn btn-success">Регистрация</button>
</form><br>
</body>
</html>
