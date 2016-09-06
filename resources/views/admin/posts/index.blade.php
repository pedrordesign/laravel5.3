@extends('template')

@section('title')

    Blog

@stop

@section('content')

    <h1>Blog Admin</h1>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Create new post</a>
    <br><br>

    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Data de criação</th>
            <th>Action</th>
        </tr>

        @foreach($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->created_at }}</td>
            <td>
                <a class="btn btn-default" href="{{route('admin.posts.edit',['id'=>$post->id])}}">Edit</a>
                <a class="btn btn-danger" href="{{route('admin.posts.destroy',['id'=>$post->id])}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    {!! $posts->render() !!}

@stop