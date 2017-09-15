@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <p>
        {{$post->description}}
    </p>
    <br/>
    <p>
        <strong>Autor: {{$post->user->name}}</strong>
    </p>
    <hr/>
</div>
@endsection
