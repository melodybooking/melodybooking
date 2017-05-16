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

				<!-- Button trigger modal -->

				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#contactArtistModal">Contact Artist</button>
		
				@if (Auth::id() == $artist->created_by)

		 			<a class="btn btn-primary" href="{{ action('PostsController@edit', $artist->id) }}">Edit Artist Profile</a>

				@endif

			</div>

		</article>

	</div>
  
	<!-- Modal -->
	<div class="modal rounded fade slide left" id="contactArtistModal" tabindex="-1" role="dialog" aria-labelledby="contactArtistModal">
	  <div class="modal-dialog" role="document">
	    <div class="rounded modal-content">
	      <div class="rounded modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

	        </button>
	        <h1 class="modal-title" id="myModalLabel">Contact Artist</h1>

	      </div>
	      <div id="contactModalArtistBody" class="rounded modal-body">
	        <p class="lead">Please get in touch for bookings!</p>
	        <form method="post" id="myForm">
	          <div class="rounded form-group">
	            <label for="name">Your name:</label>
	            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required/>
	          </div>
	          <div class="form-group">
	            <label for="email">Your email:</label>
	            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="" required/>
	          </div>
	          <div class="form-group">
	            <label for="comment">Your message:</label>
	            <textarea class="form-control" id="comment" name="comment" required></textarea>
	          </div>
	          <input type="submit" name="submit" class="btn btn-success btn-lg" value="submit">
	        </form>
	      </div>
	      <div class="rounded modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Form</button>
	      </div>
	    </div>
	  </div>
	</div>
@stop
