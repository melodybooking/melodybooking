@extends('layouts.master')

@section('content')

    <form id="createArtist" style="margin-top:200px;" class="img-responsive container-fluid" method="POST" action="{{ action('PostsController@store') }}" enctype="multipart/form-data"  >

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

            <label for="content">Artist's Biography</label>

            <textarea name="bio" id="bio" cols="30" rows="10" class="form-control">{{ old('bio') }}</textarea>

            @if ($errors->has('bio'))

                <div class="alert alert-warning" role="alert">

                	{{ $errors->first('bio') }}

                </div>

            @endif

        </div>

            <div class="form-group">

            <label for="genre">Genre</label>

            <input name="genre" id="genre" class="form-control">


            @if ($errors->has('genre'))

            <div class="alert alert-warning" role="alert">

                {!! $errors->first('genre') !!}

            </div>

            @endif

        </div>

		<div class="form-group">

			<label for="location">Location</label>

			<input name="location" id="location"  class="form-control">{{ old('location') }}</input>

			@if ($errors->has('location'))

				<div class="alert alert-warning" role="alert">

					{{ $errors->first('location') }}


				</div>

			@endif

		</div>

        <div class="form-group">

            <label for="facebook_url">Facebook Url</label>

            <input name="facebook_url" id="facebook_url"  class="form-control">{{ old('facebook_url') }}</input>

            @if ($errors->has('facebook_url'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('facebook_url') }}


                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="instagram_url">Instagram Url</label>

            <input name="instagram_url" id="instagram_url" class="form-control">{{ old('instagram_url') }}</input>

            @if ($errors->has('instagram_url'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('instagram_url') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="twitter_url">Twitter Url</label>

            <input name="twitter_url" id="twitter_url"  class="form-control">{{ old('twitter_url') }}</input>

            @if ($errors->has('twitter_url'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('twitter_url') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="soundcloud_url">Sound Cloud Url</label>

            <input name="soundcloud_url" id="soundcloud_url" class="form-control">{{ old('soundcloud_url') }}</input>

            @if ($errors->has('soundcloud_url'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('soundcloud_url') }}

                </div>

            @endif

        </div>

        <div class="form-group">

            <label for="bandcamp_url">BandCamp Url</label>

            <input name="bandcamp_url" id="bandcamp_url"  class="form-control">{{ old('bandcamp_url') }}</input>

            @if ($errors->has('bandcamp_url'))

                <div class="alert alert-warning" role="alert">

                    {{ $errors->first('bandcamp_url') }}

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

						<div id="imageContainer" class="control-group">

							 <label for="image">Profile Picture</label>

								<div>

									<span class="btn-primary btn-file">

										<span class="fileupload-new"></span>

										<input type="hidden" name="MAX_FILE_SIZE" value="1024000000" required/>

									</span>

						   		</div>

								<input class="btn-primary btn" type="file" name="image" id="image">

								<div id="previewGallery" class="img-responsive center-align gallery">

									<img id="preview"></img>

								</div>


								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

									<button class="btn btn-success" type="submit" style="margin-top: 5%; margin-bottom: 5%;">Save</button>

								</div>

						</div>

					</div>

					<input type="hidden" name="id" value="{{Auth::id()}}">

			    </form>

			    <br>

		<input type="hidden" name="id" value="{{Auth::id()}}">

    </form>

    <br>

	<!--JS to render image thumbnail-->

		 <script type="text/javascript">
		 document.getElementById("image").onchange = function () {
			 var reader = new FileReader();

			 reader.onload = function (e) {
				 // get loaded data and render thumbnail.
				 document.getElementById("preview").src = e.target.result;
			 };

			 // read the image file as a data URL.
			 reader.readAsDataURL(this.files[0]);

		 };
		 </script>

@stop
