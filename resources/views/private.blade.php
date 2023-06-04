@extends('/dry')



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1 class="text-center mt-5">This is private page</h1>

<br>

<div class="d-flex justify-content-center">
    <a class="btn btn-primary me-3" href="/logout">Сменить аккаунт</a>
    @can('view-admin-panel')
    <a class="btn btn-danger me-3" href="/inner">Панель администратора</a>

    @endcan


</div>
</body>
</html>

