@extends('layouts.master')

@section('content')

<div id="userShowContainer" class="container-fluid center-align">

		<p><strong>Username:</strong> {{ $user->name }}</p>

		<p><strong>Email:</strong> {{ $user->email }}</p>


<div class="container">
	<div class="row" id="itemsPage">
		@foreach($artist as $artist)
		<article class= "col-md-4">
			<h3><a href="{{ action('PostsController@show', $artist->id) }}">{{ $artist->artist_name }}</a></h3>
			<p><img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showArtistImage" alt="Image"></p>
		</article>
		@endforeach
	</div>
</div>

		<form action="{{ action('UserController@edit', \Auth::id() ) }}" method="GET">

			{!!csrf_field()!!}

			<input type="submit" class="btn btn-primary" value="Edit User Account Information" style="margin-top: 5px; margin-bottom: 5%;">

		</form>

</div>

@stop
