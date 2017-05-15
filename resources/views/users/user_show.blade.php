@extends('layouts.master')

@section('content')

<div id="userShowContainer" class="container text-left">

		<p><strong>Username:</strong> {{ $user->name }}</p>

		<p><strong>Email:</strong> {{ $user->email }}</p>

		<form action="{{ action('UserController@edit', \Auth::id() ) }}" method="GET">

			{!!csrf_field()!!}
			
			<input type="submit" class="btn btn-primary" value="Edit User Account Information" style="margin-top: 5px; margin-bottom: 5%;">

		</form>

</div>

@stop