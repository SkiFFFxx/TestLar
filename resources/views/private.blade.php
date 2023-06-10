@extends('/dry')

@section('title-block')
    Private Page
@endsection

@section('main_content')

    <h1 class="text-center mt-5">This is private page</h1>

    <br>

    <div class="d-flex justify-content-center">
        <a class="btn btn-primary me-3" href="/logout">Сменить аккаунт</a>
        @can('view-admin-panel')
            <a class="btn btn-danger me-3" href="/inner">Панель администратора</a>

        @endcan


    </div>


@endsection



