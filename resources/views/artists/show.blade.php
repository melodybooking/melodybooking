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

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Contact Artist</button>

	<!-- Modal -->
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
	        <form method="post" id="myForm">
	          <div class="form-group">
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
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel Form</button>
	      </div>
	    </div>
	  </div>
@stop
