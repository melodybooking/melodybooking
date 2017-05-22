@extends('layouts.master')

@section('content')

	<div style="margin-top:200px;" class="container" id="editPasswordContainer">

		<form class="form-group" action="{{ action('UserController@updatePassword', [Auth::id()] ) }}" method="POST">

			<h3> Update User Password</h3>

			{!! csrf_field() !!}

			password: <input class="form-control" type="password" 

			name="password"
			id="password" 

			><br>

			@if ($errors->has('password'))
				{!! $errors->first('password', '<span class="help-block">Password ERROR</span>') !!}

			@endif

			confirm password: <input class="form-control" type="password" 

			name="password_confirmation"
			id="password_confirmation"

			><br>

			@if ($errors->has('password'))
				{!! $errors->first('password', '<span class="help-block">Password ERROR</span>') !!}

			@endif
 
			<input class="btn btn-primary" type="submit" value="submit">

		</form>

	</div>

@stop