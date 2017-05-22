@extends('layouts.master')

@section('content')

	<div style="margin-top:200px;" class="col-sm-12 col-md-12 col-lg-12 col-xs-12 container" id="editPasswordContainer">

		<form class="col-col-xs-7 col-sm-7 col-md-7 col-lg-7 align-center form-group" action="{{ action('UserController@updatePassword', [Auth::id()] ) }}" method="POST">

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
 			<div class="container">
				<input class="row col-xs-4 col-sm-2 col-md-2 col-lg-2 container-fluid btn btn-primary" type="submit" value="submit">
			</div>
		</form>

	</div>

@stop