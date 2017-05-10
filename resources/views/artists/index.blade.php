@extends('layouts.master')

@section('content')

		<h1 style="text-align: center; margin-bottom: 5%;">Artists</h1>

				<div class="container">
					<div class="row" id="itemsPage">
						@foreach($artists as $artist)
						<article class= "col-md-4">
							<h3><a href="{{ action('PostsController@show', $artist->id) }}">{{ $artist->artist_name }}</a></h3>
							<p><img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showArtistImage" alt="Image"></p>
						</article>
						@endforeach
					</div>
				</div>

{!! $artists->render() !!}

@stop
