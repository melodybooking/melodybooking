@extends('layouts.master')

@section('content')

	<form class="form-group" action="{{ action('UserController@updatePassword', [Auth::id()] ) }}" method="POST">

		{!! csrf_field() !!}

		password: <input class="form-group" type="password" 

		name="password"

		id="password" 

		><br>

		@if ($errors->has('password'))
			{!! $errors->first('password', '<span class="help-block">Password ERROR</span>') !!}

		@endif

		confirm password: <input class="form-group" type="password" 

		name="password_confirmation"
		id="password_confirmation"

		><br>

		@if ($errors->has('password'))
			{!! $errors->first('password', '<span class="help-block">Password ERROR</span>') !!}

		@endif

		<input type="submit" value="submit">

	</form>

@stop