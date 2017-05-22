@extends('layouts.master')

@section('content')

	<div style="margin-top:150px;" id="userShowContainer" class="img-responsive container-fluid center-align">

			<p>Username: {{ $user->name }}</p>

			<p>Email: {{ $user->email }}</p>

			<form action="{{ action('UserController@edit', \Auth::id() ) }}" method="GET">

				{!!csrf_field()!!}

				<input type="submit" class="img-responsive col-xs-8 col-sm-3 col-md-3 col-lg-3 btn btn-primary" value="Edit User Account" style="margin-top: 5px; margin-bottom: 5%;">

			</form>


		<div class="center-align container">

			<div class="center-align row" id="userItemsPage">

				<p class="col-xs-12 col-md-12 col-sm-12 col-lg-12 center-align">Created Artists</p>

				<br>

				@foreach($artist as $artist)

				<article id="userArtistName" class= "col-xs-12 col-md-6 col-sm-6 col-lg-6">

					<h3  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "><a href="{{ action('PostsController@show', $artist->id) }}">{{ $artist->artist_name }}</a></h3>

					<p><img id="userArtistImage" src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showArtistImage" alt="Image"></p>

				</article>

				@endforeach

			</div>

		</div>

	</div>

@stop
