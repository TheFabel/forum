@extends('layouts.default')

@section('content')
    <div class="theme_content">
        <div class="row mb-5">
            <div class="col-12">
                <a href="/">Назад</a>
                <span class="ml-3">Просмотров: {{$theme->views}}</span>
                <h1>{{$theme->name}}</h1>
                <p>{{$theme->text}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3>Сообщения:</h3>
                <div class="comments-list">
                    @foreach($comments as $comment)
                        <div class="border-bottom">
                            <p class="text-right"><small>
                                <?php
                                    $time = $comment->date;
                                    $date = new DateTime();
                                    $date->setTimestamp($time);
                                    echo $date->format("m-d-Y H:i:s");
                                ?>
                            </small></p>
                            <div class="">

                                <p>{{$comment->text}}</p>

                            </div>
                        </div>
                    @endforeach
                </div>
                {{$comments->links()}}
            </div>
        </div>

        <form class="comment_add" action="/add" method="POST">
            <div class="form-group">
                <label for="comment">Оставить сообщение:</label>
                <textarea class="form-control" rows="5" id="comment" required></textarea>
            </div>
            <input type="hidden" id="theme_id" value="{{$theme->id}}">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>


@endsection