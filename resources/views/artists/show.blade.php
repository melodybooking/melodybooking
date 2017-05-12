@extends('layouts.master')

@section('content')

	<h3>{{ $artist->artist_name }}</h3>
	<article class= "col-md-4">
		<p>{{ $artist->bio }}</p>
		<p></p>

		@if (Auth::id() == $artist->created_by)
	 	<a class="btn btn-primary" href="{{ action('PostsController@edit', $artist->id) }}">Edit</a>
		@endif
	</article>

	<div class= "col-md-4">
		<img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showItemImage" alt="Image">
	</div>


@stop
