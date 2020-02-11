@extends('layouts.app')

<h1>id: {{$word->id }} の編集</h1>

<div class="row">
    <div class="col-6">
        {Form::model('route' => ['word.updata',$word->id],'method')
        
        
        <div class="form-group">
            {!! Form::label('content','用語') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
            
            {!! Form::label('meaning','意味・使い方') !!}
            {!! Form::text('meaning', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

@section('content')
@endsection