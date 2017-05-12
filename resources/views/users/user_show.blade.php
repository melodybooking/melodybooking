@extends('layouts.master')

@section('content')

{{ $user->name }}

{{ $user->email }}

	<form action="{{ action('UserController@edit', \Auth::id() ) }}" method="GET">

		{!!csrf_field()!!}
		
		<input type="submit" class="btn btn-primary" value="Edit User" style="margin-top: 5px; margin-bottom: 5%;">

	</form>



@stop