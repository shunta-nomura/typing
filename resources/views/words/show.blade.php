@extends('layouts.app')

@section('content')
<div class="background-grean">
<h1>登録用語編集ページ</h1>

<div class="row">
        <div class="col-6">
             {!! Form::model($word, ['route' => ['words.update', $word->id], 'method' => 'put']) !!}
             
             <div class="form-group">
                 {!! Form::label('content', '用語:') !!}
                 {!! Form::text('content', null, ['class' => 'form-control']) !!}
                 {!! Form::label('meaning', '意味、使い方:') !!}
                 {!! Form::text('meaning', null, ['class' => 'form-control']) !!}
            </div>
            <div style="display:flex;">
            {!! Form::submit('用語更新', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
                         {!! Form::model($word, ['route' => ['words.destroy', $word->id], 'method' => 'delete']) !!}
                         <div class="ml-5">
        {!! Form::submit('削除', ['class' => 'btn btn-danger',]) !!}
        </div>
        
    {!! Form::close() !!}
    </div>

            </div>

    </div>
</div>

@endsection
