@extends('/dry')

@section('title')Отзывы@endsection

@section('main_content')
    <h1 style="display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 0 20px;">Добавить отзыв</h1><br>

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

    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <button  type="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1 >All reviews</h1>
    @if($reviews->isEmpty())
        <p class="font-weight-bold text-uppercase">Нет доступных записей.</p>
    @else
        @foreach($reviews as $el)
            <div class="alert alert-info">
                <h3>{{$el->subject}}</h3>
                <b>{{$el->email}}</b>
                <p>{{$el->message}}</p>
            <form action="{{ route('reviews_destroy', $el->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Удалить запись</button>
            </form>
        </div>
        @endforeach
    @endif
@endsection
