@extends('layouts.app')

@section('content')

<h1>登録用語一覧</h1>

@if (count($words) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>用語</th>
                    <th>意味、使い方</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($words as $word)
                <tr>
                    <td>{!! link_to_route('words.show', $word->id, ['id' => $word->id]) !!}</td>
                    <td>{{ $word->content }}</td>
                    <td>{{ $word->meaning }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! link_to_route('home.redirect', 'トップに戻る', [],['class' => 'btn btn-lg btn-light']) !!}
@endif
@endsection