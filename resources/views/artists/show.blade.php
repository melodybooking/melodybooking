@extends('layouts.master')

@section('content')

	<div class="container-fluid" id="artistShow">

		<article class= "col-md-12">

			<h3>{{ $artist->artist_name }}</h3>

			<p>{{ $artist->bio }}</p>

			<p><strong>Genre:</strong> {{ $artist->genre}}</p>

			<div class= "col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showItemImage" alt="Image">

			</div>

			<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<h5>Contact Info</h5>

				<p>{{ $artist->email }}</p>
		
				@if (Auth::id() == $artist->created_by)

		 			<a class="btn btn-primary" href="{{ action('PostsController@edit', $artist->id) }}">Edit Artist Profile</a>

				@endif

			</div>

		</article>

	</div>

@stop
