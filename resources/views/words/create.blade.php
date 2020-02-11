@extends('layouts.app')
@section('content')

<h1>用語作成ページ</h1>
<div class="row">
    <div class="col-6">
        {!! Form::model($word, ['route' => 'words.store']) !!} 
        <div class="form-group">
            {!! Form::label('content', '用語:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
            {!! Form::label('meaning', '意味・使い方') !!}
                    {!! Form::text('meaning', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('入力完了', ['class' =>'btn btn-primary']) !!}
        
         {!! Form::close() !!}
    
         <div class="ml-5">
         {!! link_to_route('home.redirect', 'トップに戻る', [],['class' => 'btn btn-lg btn-light']) !!}
         </div>
    </div>
</div>
@endsection