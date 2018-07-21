@extends('layouts.app')

@section('content')
    
		<a href="/posts" class="btn btn-dark my-2">Voltar</a>
		<h1>{{$post->title}}</h1>

		<div>
			{!!$post->body!!}
		</div>

		<img style="width:10%" src="/storage/cover_images/{{$post->cover_image}}">
		<hr>
		<small>Escrito em {{$post->created_at}} por {{$post->user->name}}</small>
		<hr>
		@if(!Auth::guest())
			@if(Auth::user()->id == $post->user_id)
				<a href="/posts/{{$post->id}}/edit" class="btn btn-info">Editar</a>
					
				{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
					{{Form::hidden('_method', 'DELETE')}}
					{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
				{!! Form::close() !!}
			@endif
		@endif
@endsection
