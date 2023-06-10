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

{{--    @if($articles->count() > 0)--}}
{{--        @foreach($articles as $article)--}}
{{--            <div class="col-md-6 mb-4">--}}
{{--                <div class="card flex-md-row h-md-250">--}}
{{--                    <div class="card-body d-flex flex-column align-items-start">--}}
{{--                        <strong class="d-inline-block mb-2 text-primary">Цена: {{ $article->price }}</strong>--}}
{{--                        <h3 class="mb-0">--}}
{{--                            <a class="text-dark" href="#">{{ $article->title }}</a>--}}
{{--                        </h3>--}}
{{--                        <div class="mb-1 text-muted">Дата: {{ $article->date }}</div>--}}
{{--                        <p class="card-text mb-auto text-dark">{{ $article->description }}</p>--}}
{{--                        <a href="#">Посмотреть полностью</a>--}}
{{--                    </div>--}}
{{--                    <img class="card-img-right flex-auto d-none d-md-block" src="{{ $article->image }}" alt="Thumbnail [200x250]">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    @else--}}
{{--        <p>Нет доступных статей.</p>--}}
{{--    @endif--}}

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
