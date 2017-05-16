@extends('layouts.master')

@section('content')

<?php

require($_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php');
use Mailgun\Mailgun;

?>

	<div class="container-fluid" id="artistShow">

		<article class= "col-md-12">

			<h3>{{ $artist->artist_name }}</h3>

			<p>{{ $artist->bio }}</p>

			<p><strong>Genre:</strong> {{ $artist->genre}}</p>

			<div class= "col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<img src = "/uploads/images/{{ $artist->image }}" class="img-responsive" id="showItemImage" alt="Image">

			</div>


	<!-- Button trigger modal -->
	<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Contact Artist</button>

			<div class ="col-xs-12 col-sm-6 col-md-6 col-lg-6">

				<h5>Contact Info</h5>

				<p>{{ $artist->email }}</p>

				@if (Auth::id() == $artist->created_by)

		 			<a class="btn btn-primary" href="{{ action('PostsController@edit', $artist->id) }}">Edit Artist Profile</a>

				@endif

			</div>

		</article>

	</div>

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
	        <form method="post" id="myForm" action="show.blade.php">

				{!! csrf_field() !!}

	          <div class="form-group">
	            <label for="name">Your name:</label>
	            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" required/>
	          </div>
	          <div class="form-group">
	            <label for="email">Your email:</label>
	            <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" required/>
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


	<?php

	if (isset($_POST['name'])) {
		$userName=$_POST['name'];
		$artistEmail = $artist->email;
		$message = $_POST['comment'];

	$mgClient = new Mailgun('key-5f749c9863a43eac33c98d10e010f827');
	// Enter domain which you find in Default Password
	$domain = "001ddaa1b197c22c3ee3e4b70e57dcd8";

	# Make the call to the client.
	$result = $mgClient->sendMessage($domain, array(
	"from" => "$userName <mailgun@001ddaa1b197c22c3ee3e4b70e57dcd8>",
	"email" => "Baz <$artistEmail>",
	"comment" => "$message"
	));
	echo "<script>alert('Email Sent Successfully.. !!');</script>";
	}
?>

@stop
