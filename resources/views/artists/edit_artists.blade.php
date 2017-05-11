@extends('layouts.master')

@section('content')

<h1>Edit Account Information</h1>

	<form  class="form-group"  method="POST" action="{{ action('PostsController@update', [$artist->id]) }}">

		{!! csrf_field() !!}

        <div class="form-group">

            <label for="name">Artist's Name</label>

            <input type="text" id="artist_name" name="artist_name" class="form-control"

            @if(isset($artist->artist_name))

				value="{{ $artist->artist_name }}"

			@else

				value="{{ old('artist_name') }}"

			@endif

			><br>

			@if ($errors->has('artist_name'))

				{!! $errors->first('artist_name', '<span class="help-block">Name error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="email">Email</label>

            <input type="text" id="email" name="email" class="form-control"

             @if(isset($artist->email))

				value="{{ $artist->email }}"

			@else

				value="{{ old('email') }}"

			@endif

			><br>

			@if ($errors->has('email'))

				{!! $errors->first('email', '<span class="help-block">Email error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="bio">Artist's Biography</label>

            <input type="text" name="bio" id="bio" cols="30" rows="10" class="form-control"

             @if(isset($artist->bio))

				value="{{ $artist->bio }}"

			@else

				value="{{ old('bio') }}"

			@endif

			><br>

			@if ($errors->has('bio'))

				{!! $errors->first('bio', '<span class="help-block">Bio error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="genre">Genre</label>

            <input name="genre" id="genre" class="form-control"

             @if(isset($artist->genre))

				value="{{ $artist->genre }}"

			@else

				value="{{ old('genre') }}"

			@endif

			><br>

			@if ($errors->has('genre'))

				{!! $errors->first('genre', '<span class="help-block">Genre error</span>') !!}

			@endif

		</div>


        <div class="form-group">

            <label for="facebook_url">Facebook Url</label>

            <input name="facebook_url" id="facebook_url"  class="form-control"

            @if(isset($artist->facebook_url))

				value="{{ $artist->facebook_url }}"

			@else

				value="{{ old('facebook_url') }}"

			@endif

			><br>

			@if ($errors->has('facebook_url'))

				{!! $errors->first('facebook_url', '<span class="help-block">Facebook Url error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="instagram_url">Instagram Url</label>

            <input name="instagram_url" id="instagram_url" class="form-control"

             @if(isset($artist->instagram_url))

				value="{{ $artist->instagram_url }}"

			@else

				value="{{ old('instagram_url') }}"

			@endif

			><br>

			@if ($errors->has('instagram_url'))

				{!! $errors->first('instagram_url', '<span class="help-block">Instagram Url error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="twitter_url">Twitter Url</label>

            <input name="twitter_url" id="twitter_url"  class="form-control"

             @if(isset($artist->twitter_url))

				value="{{ $artist->twitter_url }}"

			@else

				value="{{ old('twitter_url') }}"

			@endif

			><br>

			@if ($errors->has('twitter_url'))

				{!! $errors->first('twitter_url', '<span class="help-block">Twitter Url error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="soundcloud_url">Sound Cloud Url</label>

            <input name="soundcloud_url" id="soundcloud_url" class="form-control"

            @if(isset($artist->soundcloud_url))

				value="{{ $artist->soundcloud_url }}"

			@else

				value="{{ old('soundcloud_url') }}"

			@endif

			><br>

			@if ($errors->has('soundcloud_url'))

				{!! $errors->first('soundcloud_url', '<span class="help-block">Bandcamp Url error</span>') !!}

			@endif

        </div>

        <div class="form-group">

            <label for="bandcamp_url">BandCamp Url</label>

            <input name="bandcamp_url" id="bandcamp_url"  class="form-control"

            @if(isset($artist->bandcamp_url))

				value="{{ $artist->bandcamp_url }}"

			@else

				value="{{ old('bandcamp_url') }}"

			@endif

			><br>

			@if ($errors->has('bandcamp_url'))

				{!! $errors->first('bandcamp_url', '<span class="help-block">Bandcamp Url error</span>') !!}

			@endif

        </div>

		<!-- Image upload -->

		<div>

	        @if (count($errors) > 0)

				<div class="alert alert-danger">

					<ul>

						@foreach ($errors->all() as $error)

							<li>{{ $error }}</li>

						@endforeach

					</ul>

				</div>

			@endif

			@if ($message = Session::get('success'))

				<div class="alert alert-success alert-block">

					<button type="button" class="close" data-dismiss="alert">×</button>

					<strong>{{ $message }}</strong>

				</div>

				<img src="{{ Session::get('path') }}">

			@endif

            <!-- image preview -->

			<div id="imageContainer" class="control-group">

				 <label for="image">Image/s Upload</label>

					<div>

						<span class="btn-primary btn-file">

							<span class="fileupload-new"></span>

							<input type="hidden" name="MAX_FILE_SIZE" value="1024000000" required/>



						</span>

			   		</div>

					<input class="btn-primary btn" type="file" name="image" multiple id="gallery-photo-add">

					<div id="previewGallery" class="img-responsive center-align gallery">

						@if(isset($artist->image))

							<img src="/uploads/images/{{ $artist->image }}"></img>

						@else

							value="{{ old('image') }}"

						@endif

					</div>

			</div>

		</div>

		<input type="hidden" name="id" value="{{Auth::id()}}">

		<input class ="btn btn-primary" style="margin-top: 20px" type="submit" value="update information">

		{{ method_field('PUT') }}

	</form>

	<!-- Delete post -->
			<form action="{{ action('PostsController@destroy', [$artist->id]) }}" method="POST">
				<input type="submit" class="btn btn-danger" value="Delete" style="margin-top: 5px; margin-bottom: 5%;">
				{!!csrf_field()!!}
				{{ method_field('DELETE') }}
			</form>

@stop
