@extends('layouts.master')

@section('content')

	<h1 id="artistIndexTitle" class="img-responsive" style="text-align: center; margin-top:175px; margin-bottom: 5%;">Artists</h1>

		<div id="artistIndexContainer" class="img-responsive align-center container">
			
			<div class="img-responsive" id="indexItemsPage">

				@foreach($artists as $artist) 

				<article id="artistIndexSquare" class= "img-responsive col-xs-12 col-sm-12 col-md-6 col-lg-6">

					<a id="artistName" href="{{ action('PostsController@show', $artist->id) }}">{{ $artist->artist_name }}</a>

					<p><img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showArtistImage" alt="Image"></p>

				</article>

				@endforeach

				<div id="navigation" class=" img-responsive col-xs-12 col-sm-12 col-md-12 col-lg-12">{!! $artists->render() !!}</div>

		</div>


@stop
