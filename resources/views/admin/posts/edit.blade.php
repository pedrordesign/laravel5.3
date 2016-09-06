@extends('template')

@section('title')

    Blog

@stop

@section('content')

    <h1>Edit Post {{ $post->title }}</h1>

    @if($errors->any())
        <ul class="alert list-unstyled">
            @foreach($errors->all() as $error)
            <li class="alert alert-danger">
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endif

    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
        {!! Form::textarea('tags', $post->TagList, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop