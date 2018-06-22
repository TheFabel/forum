@extends('layouts.default')

@section('content')
    @if(isset($search))
        <p><a href="/">Вернуться назад</a></p>
    @endif
    @if(count($themes) > 0)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Название темы</th>
                <th scope="col">Ответов (просмотров)</th>
                <th scope="col">Последнее сообщение</th>
            </tr>
            </thead>
            <tbody>

                @foreach($themes as $theme)
                    <tr>
                        <td><a href="/theme/{{$theme->id}}">{{$theme->name}}</a></td>
                        <td>{{$theme->comment_count.' ('.$theme->views.')'}}</td>
                        <td>
                        <?php
                            $time = $theme->last_answer;
                            $date = new DateTime();
                            $date->setTimestamp($time);
                            echo $date->format("d-m-Y H:i:s");
                        ?>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Не найдено</p>
    @endif
    {{$themes->links()}}
@endsection