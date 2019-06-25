@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Teste posts do usuário</h2>
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <b> Autor:{{$post->user->name}}</b>
  		
</div>
@endsection