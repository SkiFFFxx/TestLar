@extends('/dry')

@section('title')Комментарии@endsection

@section('main_content')



    <h1 style="display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 0 20px;">Список статей</h1><br>
    @if($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors -> all() as $errors)
                    <li>
                        {{$errors}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card flex-md-row h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Цена: </strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Название статьи: </a>
                    </h3>
                    <div class="mb-1 text-muted">Дата: </div>
                    <p class="card-text mb-auto text-dark">Описание: </p>
                    <a href="#">Посмотреть полностью</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 250' preserveAspectRatio='none'%3E%3Crect width='200' height='250' fill='%2355595c'%3E%3C/rect%3E%3Ctext x='50%' y='50%' text-anchor='middle' dominant-baseline='middle' fill='%23eceeef' font-weight='bold' font-family='Arial, Helvetica, sans-serif' font-size='13pt'%3EThumbnail%3C/text%3E%3C/svg%3E" data-holder-rendered="true">

            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card flex-md-row h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Цена: </strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Название статьи: </a>
                    </h3>
                    <div class="mb-1 text-muted">Дата: </div>
                    <p class="card-text mb-auto text-dark">Описание: </p>
                    <a href="#">Посмотреть полностью</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 250' preserveAspectRatio='none'%3E%3Crect width='200' height='250' fill='%2355595c'%3E%3C/rect%3E%3Ctext x='50%' y='50%' text-anchor='middle' dominant-baseline='middle' fill='%23eceeef' font-weight='bold' font-family='Arial, Helvetica, sans-serif' font-size='13pt'%3EThumbnail%3C/text%3E%3C/svg%3E" data-holder-rendered="true">

            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card flex-md-row h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Цена: </strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Название статьи: </a>
                    </h3>
                    <div class="mb-1 text-muted">Дата: </div>
                    <p class="card-text mb-auto text-dark">Описание: </p>
                    <a href="#">Посмотреть полностью</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 250' preserveAspectRatio='none'%3E%3Crect width='200' height='250' fill='%2355595c'%3E%3C/rect%3E%3Ctext x='50%' y='50%' text-anchor='middle' dominant-baseline='middle' fill='%23eceeef' font-weight='bold' font-family='Arial, Helvetica, sans-serif' font-size='13pt'%3EThumbnail%3C/text%3E%3C/svg%3E" data-holder-rendered="true">

            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card flex-md-row h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Цена: </strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Название статьи: </a>
                    </h3>
                    <div class="mb-1 text-muted">Дата: </div>
                    <p class="card-text mb-auto text-dark">Описание: </p>
                    <a href="#">Посмотреть полностью</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 250' preserveAspectRatio='none'%3E%3Crect width='200' height='250' fill='%2355595c'%3E%3C/rect%3E%3Ctext x='50%' y='50%' text-anchor='middle' dominant-baseline='middle' fill='%23eceeef' font-weight='bold' font-family='Arial, Helvetica, sans-serif' font-size='13pt'%3EThumbnail%3C/text%3E%3C/svg%3E" data-holder-rendered="true">
            </div>
        </div>
    </div>
{{--    <div class="card flex-md-row mb-4 box-shadow h-md-250">--}}
{{--        <div class="card-body d-flex flex-column align-items-start">--}}
{{--            <strong class="d-inline-block mb-2 text-primary">World</strong>--}}
{{--            <h3 class="mb-0">--}}
{{--                <a class="text-dark" href="#">Featured post</a>--}}
{{--            </h3>--}}
{{--            <div class="mb-1 text-muted">Nov 12</div>--}}
{{--            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>--}}
{{--            <a href="#">Continue reading</a>--}}
{{--        </div>--}}
{{--        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18888818c01%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18888818c01%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">--}}
{{--    </div>--}}
    <h1 style="display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 0 20px;">Оставить комментарий</h1><br>
    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите заголовок" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button  type="submit" class="btn btn-success">Отправить</button>

    </form><br>

    <h1 >Все комментарии</h1>
    @if($reviews->isEmpty())
        <p class="font-weight-bold text-uppercase">Нет доступных записей.</p>
    @else
        @foreach($reviews as $el)
            <div class="alert alert-info">
                <img src="{{ asset('test1/images/1pict.png') }}" alt="Изображение" width="200">
                <h3>{{$el->subject}}</h3>
                <b>{{$el->email}}</b>
                <p>{{$el->message}}</p>
                @can('view-protected-form')
                    <form action="{{ route('reviews_destroy', $el->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить запись</button>
                     </form>
                @endcan
        </div>
        @endforeach
    @endif
@endsection
