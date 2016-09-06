@extends('template')

@section('title')

    Blog

@stop

@section('content')

    <h1>Create new Post</h1>

    @if($errors->any())
        <ul class="alert list-unstyled">
            @foreach($errors->all() as $error)
            <li class="alert alert-danger">
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>'admin.posts.store'], ['method'=>'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop