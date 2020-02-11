@extends('layouts.app')

@section('content')
 @if (Auth::check())
  <div style="background-color:#d6f8ff;" ,"height:1000px;" > 
        
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#bbbbc0">
    <a class="navbar-brand","border-right" href="{{ route('words.create')}}">単語・用語の追加</a>
    <a class="navbar-brand" href="{{ route('words.index')}}">単語の確認・リスト</a>
  </nav>
<div class="start">
        <div class="text-center">
            {!! link_to_route('plactice.index', 'Start', [], ['class' => 'btn btn-outline-primary btn-lg ']) !!}
        </div>
        {!! link_to_route('logout.get', 'ログアウト', [], ['class' => 'btn btn-lg btn-danger']) !!}
        
</div>
   </div>
    @else
 <div class="center jumbotron" style="background-color:#ddffe0">
     <div class="text-center">
        <h1>タイピング練習</h1>
        {!! link_to_route('signup.get', 'サインアップ', [], ['class' => 'btn btn-lg ']) !!}
        {!! link_to_route('login.post', 'ログイン', [], ['class' => 'btn btn-lg ']) !!}
     </div>
@endif
@endsection