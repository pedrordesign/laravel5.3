@extends('template')

@section('title')

    Minhas Anotações

@stop

@section('content')

    <h1>Minhas Anotações</h1>

        <ul>
            @foreach($notas as $nota)
            <li>{{ $nota }}</li>
            @endforeach
        </ul>

@stop 