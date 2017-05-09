@extends('layouts.master')

@section('content')

    <form id="createArtist" class="container" method="post" enctype="multipart/form-data">

        {!! csrf_field() !!}

        <div class="form-group">

            <label for="title">Artist's Name</label>

            <input type="text" id="artistName" name="artistName" value="{{ old('artistName') }}" class="form-control">

            @if ($errors->has('title'))

                {!! $errors->first('artistName', '<span class="help-block">:message</span>') !!}
            
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

            <label for="facebookUrl">Facebook Url</label>
            
            <input name="facebookUrl" id="facebookUrl"  class="form-control">{{ old('facebookUrl') }}</input>
            
            @if ($errors->has('bio'))
            
                <div class="alert alert-warning" role="alert">
            
                    {{ $errors->first('bio') }}
            
                </div>
            
            @endif

        </div> 

        <div class="form-group">

            <label for="instagramUrl">Instagram Url</label>
            
            <input name="instagramUrl" id="instagramUrl" class="form-control">{{ old('content') }}</input>
            
            @if ($errors->has('bio'))
            
                <div class="alert alert-warning" role="alert">
            
                    {{ $errors->first('bio') }}
            
                </div>
            
            @endif

        </div>

        <div class="form-group">

        
            <label for="twitterUrl">Twitter Url</label>
        
            <input name="twitterUrl" id="twitterUrl"  class="form-control">{{ old('content') }}</input>
        
            @if ($errors->has('bio'))
        
                <div class="alert alert-warning" role="alert">
        
                    {{ $errors->first('bio') }}
        
                </div>
        
            @endif

        </div>

        <div class="form-group">

            <label for="soundcloudUrl">Sound Cloud Url</label>
        
            <input name="soundcloudUrl" id="soundcloudUrl" class="form-control">{{ old('content') }}</input>
        
            @if ($errors->has('bio'))
        
                <div class="alert alert-warning" role="alert">
        
                    {{ $errors->first('bio') }}
        
                </div>
        
            @endif

        </div>

        <div class="form-group">

            <label for="facebookUrl">BandCamp Url</label>
        
            <input name="facebookUrl" id="facebookUrl"  class="form-control">{{ old('content') }}</input>
        
            @if ($errors->has('bio'))
        
                <div class="alert alert-warning" role="alert">
        
                    {{ $errors->first('bio') }}
        
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

			<div class="control-group">

				 <label for="image">Image</label>

					<div>

						<span class="btn-primary btn-file">

							<span class="fileupload-new"></span>

							<input type="hidden" name="MAX_FILE_SIZE" value="1024000000" required/>

						</span>

			   		</div>


					<input class="btn btn-success" type="file" multiple id="gallery-photo-add">

					

					<div id="previewGallery" class="col-md-4 gallery">

					</div>

					

					<div class="col-md-12">

						<button class="btn btn-primary" type="submit" style="margin-bottom: 5%;">Save</button>
					</div>

			</div>

		</div>

		<input type="hidden" name="id" value="{{Auth::id()}}">

    </form>

    <script>

    $(function() {
	    // Multiple images preview in browser
	    var imagesPreview = function(input, placeToInsertImagePreview) {

	        if (input.files) {

	            var filesAmount = input.files.length;

	            for (i = 0; i < filesAmount; i++) {

	                var reader = new FileReader();

	                reader.onload = function(event) {

	                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
	                
	                }

	                reader.readAsDataURL(input.files[i]);
	            }
	        }

	    };

	    $('#gallery-photo-add').on('change', function() {

	        imagesPreview(this, 'div.gallery');

	    });

	});

	</script>



@stop

