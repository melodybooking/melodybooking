@extends('layouts.master')

@section('content')

<div style="margin-top:150px;" class="container-fluid img-responsive" id="artistShow">

		@if (Session::has('successMessage'))
				<div class="alert alert-success">{{ session('successMessage') }}</div>
		@endif

		@if (Session::has('errorMessage'))
				<div class="alert alert-danger">{{ session('errorMessage') }}</div>
		@endif

	<article class= "col-lg-12 col-sm-12 col-xs-12 col-md-12">

		<h3>{{ $artist->artist_name }}</h3>

		<p>{{ $artist->bio }}</p>

		<p><strong>Location:</strong> {{ $artist->location}} </p>

		<p><strong>Genre:</strong> {{ $artist->genre}}</p>

		<div class= "col-xs-12 col-sm-6 col-md-6 col-lg-6">

			<img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showItemImage" alt="Image">

		</div>

		<div style="padding-top: 5px; padding-bottom: 5px;" class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="socialMediaIcons">

			<a class=" btn btn-primary" href="{{ $artist->facebook_url }}" target="_blank"><i class="fa fa-facebook"></i></a>

			<a class=" btn btn-success" href="{{ $artist->instagram_url }}" target="_blank"><i class="fa fa-instagram"></i></a>

			<a class=" btn btn-warning" href="{{ $artist->soundcloud_url }}" target="_blank"><i class="fa fa-soundcloud"></i></a>

			<a class=" btn btn-info" href="{{ $artist->bandcamp_url }}" target="_blank"><i class="fa fa-bandcamp"></i></a>

			<a class=" btn btn-danger" href="{{ $artist->twitter_url }}" target="_blank"><i class="fa fa-twitter"></i></a>

		</div>

<!-- Button trigger modal -->

	@if (Auth::check())

		<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-top: 5px; padding-bottom: 5px;">

			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Contact Artist</button>

		</div>

	@endif

		<div style="padding-top: 5px; padding-bottom: 5px;" class ="col-xs-12 col-sm-6 col-md-6 col-lg-6">

			@if (Auth::id() == $artist->created_by)

				<a class="btn btn-primary" href="{{ action('PostsController@edit', $artist->id) }}">Edit Artist Profile</a>

			@endif

		</div>

	</article>

</div>

<!-- Modal -->

@if (Auth::check())
<div class="modal fade slide left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

		</button>

		<h1 class="modal-title" id="myModalLabel">Contact Artist</h1>

	  </div>
	  <div class="modal-body">
		<p class="lead">Please get in touch for bookings!</p>
		<form method="POST" id="myForm" action="{{ action('PostsController@sendMail') }}">

			{!! csrf_field() !!}

		  <div class="form-group">
			<label for="name">Your name:</label>
			<input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}" required/>
		  </div>
		  <div class="form-group">
			<label for="email">Your email:</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" required/>
		  </div>
		  <div class="form-group">
			<label for="text">Your message:</label>
			<textarea class="form-control" id="text" name="text" required></textarea>
		  </div>
		  <input type="hidden" name="id" value="{{ $artist->id }}">
		  <input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Form</button>
	  </div>
	</div>
</div>
</div>
@endif

@stop
