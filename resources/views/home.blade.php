@extends('/dry')

@section('main_content')
    <div class="px-4 pt-5 my-5 text-center border-bottom -center">

        <div class="col-lg-6 mx-auto">
            @guest
                <h1 class="display-4 fw-bold text-body-emphasis">Пожалуйста, пройдите регистрацию</h1>
                <p class="lead mb-4">Введите в поле email: свой email, <br>  В поле password: свой пароль <br> Если у вы уже проходили регистрацию, <br> Просто нажмите "Login" и введите свои данные.</p>

                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a href="{{ route('user.registration') }}" class="btn btn-primary btn-lg px-4 me-sm-3">Registration</a>
                    <a href="{{ route('user.login') }}" class="btn btn-outline-secondary btn-lg px-4">Login</a>
                </div>
            @else
                <h1 >Вы авторизованы.</h1><br><br>
            @endguest
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
            </div>
        </div>
    </div>
@endsection
