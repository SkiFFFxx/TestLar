@extends('/dry')

@section('title-block')
    Registration Page
@endsection

@section('main_content')

    <h1 style="padding-left: 250px;" >Ррегистрация</h1 ><br>


<form method="post" action="{{route('user.registration') }} " style="padding: 0 250px;">
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
@endsection
