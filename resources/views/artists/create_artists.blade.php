@extends('layouts.master')

@section('content')

    <form id="createArtist" class="img-responsive container-fluid" method="POST" action="{{ action('PostsController@store') }}" enctype="multipart/form-data" >

        {!! csrf_field() !!}

        <div class="form-group">

            <label for="artist_name">Artist's Name</label>

            <input type="text" id="artist_name" name="artist_name" value="{{ old('artist_name') }}" class="form-control">

            @if ($errors->has('artist_name'))

                {!! $errors->first('artist_name', '<span class="help-block">:message</span>') !!}

            @endif

        </div>

        <div class="form-group">

            <label for="email">Email</label>

            <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control">

            @if ($errors->has('email'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('email') }}
               </div>

            @endif

        </div>

        <div class="form-group">

            <label for="genre">Genre</label>

            <input type="text" id="genre" name="genre" value="{{ old('genre') }}" class="form-control">

            @if ($errors->has('genre'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('genre') }}
               </div>

            @endif

        </div>

        <div class="form-group">

            <label for="content">Artist's Biography</label>

            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control">{{ old('bio') }}</textarea>

            @if ($errors->has('bio'))

                <div class="alert alert-warning" role="alert">

                	{{ $errors->first('bio') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="facebookUrl">Facebook Url</label>

            <input name="facebookUrl" id="facebookUrl"  class="form-control">{{ old('facebookUrl') }}</input>

            @if ($errors->has('facebookUrl'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('facebookUrl') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="instagramUrl">Instagram Url</label>

            <input name="instagramUrl" id="instagramUrl" class="form-control">{{ old('instagramUrl') }}</input>

            @if ($errors->has('instagramUrl'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('instagramUrl') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="twitterUrl">Twitter Url</label>

            <input name="twitterUrl" id="twitterUrl"  class="form-control">{{ old('twitterUrl') }}</input>

            @if ($errors->has('twitterUrl'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('twitterUrl') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="soundCloudUrl">Sound Cloud Url</label>

            <input name="soundCloudUrl" id="soundCloudUrl" class="form-control">{{ old('soundCloudUrl') }}</input>

            @if ($errors->has('soundCloudUrl'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('soundCloudUrl') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="facebookUrl">BandCamp Url</label>

            <input name="facebookUrl" id="facebookUrl"  class="form-control">{{ old('facebookUrl') }}</input>

            @if ($errors->has('facebookUrl'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('facebookUrl') }}

                </div>

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

					<input class="btn-primary btn" type="file" name="image" multiple id="gallery-photo-add"></input>

					<div id="previewGallery" class="img-responsive center-align gallery">

					</div>


					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<button class="btn btn-success" type="submit" style="margin-top: 5%; margin-bottom: 5%;">Save</button>

					</div>

			</div>

		</div>

		<input type="hidden" name="id" value="{{Auth::id()}}">

    </form>

    <br>

@stop
