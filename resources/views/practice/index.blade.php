@extends('layouts.app')
  <div class="center jumbotron" style="background-color:#d6f8ff;">
      <div class="text-center">
      <h2> {{$word->content}} </h2>
      <h2> {{$word->meaning}} </h2>
      
        <div class="form-group">
            {!! Form::label('content', '用語') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
            {!! Form::label('meaning', '意味・使い方') !!}
            {!! Form::text('meaning', null, ['class' => 'form-control']) !!}
        </div>
         {!! Form::close() !!}
         {!! link_to_route('plactice.index', '入力完了', [],['class' => 'btn btn-outline-success']) !!}
         
      </div>
        {!! link_to_route('home.redirect', 'トップに戻る', [],['class' => 'btn btn-lg btn-light']) !!}
    </div>
@section('content')
@endsection
