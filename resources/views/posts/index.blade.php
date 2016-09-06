@extends('template')

@section('title')

	Blog

@stop

@section('content')

	<h1>Blog</h1>

	@foreach($posts as $post)
	<h2>{{ $post->title }} <i>({{ $post->created_at}})</i></h2>
	<p>{{ $post->content }}</p>
	<b>Tags:</b><br>
	<ul>
		@foreach($post->tags as $tag)
			<li>{{ $tag->name }}</li>
		@endforeach
	</ul>

	<h3>Comentários</h3>
		@foreach($post->comments as $comment)
			<p>
		    	Nome: {{ $comment->name }}
			</p>
			<p>
				email: {{ $comment->email }}
			</p>
			<p>
		    	{{ $comment->comment }}
		    </p>
		@endforeach
	@endforeach

@stop