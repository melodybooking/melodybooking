<nav id="header" class="img-responsive col-sm-12 col-xs-12 col-md-12 col-lg-12 navbar navbar-default navbar-fixed-top navbar-static">

    <div id="headerContainer" class="row container-fluid">

      	<div id="navbarBrand" class="pull-right col-sm-12 col-xs-12 col-md-12 col-lg-12 img-responsive text-center navbar-header">

      		<h3 class="pull-left container offset-sm-1 offset-md-1 offset-lg-1 offset-xs-1 col-md-9 col-sm-9 col-lg-9 col-xs-9"><a href="/">Melody Booking </a></h3>

	        <button style="margin-top:25px;" type="button" class="col-sm-1 col-md-1 col-xs-1 col-lg-1 navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">

	          	<span class="col-sm-1 col-md-1 col-xs-1 col-lg-1 pull-right sr-only">Toggle navigation</span>

	          	<span id="iconBar" class="icon-bar"></span>

	          	<span id="iconBar" class="icon-bar"></span>

	          	<span id="iconBar" class="icon-bar"></span>

	        </button>

    	</div>

      	<div id="navbar" class="col-xs-12 col-lg-12 col-sm-12 col-md-12 navbar-collapse center-align container-fluid collapse">

	        <ul class="col-xs-12 col-lg-12 col-sm-12 col-md-12 nav navbar-nav navbar-right">

	          	<li class="col-sm-12 col-md-12 col-xs-12 col-lg-12 dropdown center-align">

		        <ul class="col-sm-12 col-xs-12 col-md-12 col-lg-12 center-align container-fluid" role="menu">

            <li class="col-xs-4 col-sm-3 col-md-2 col-lg-2"><a href="{{action('PostsController@index')}}">Artist Directory</a></li>

		        	@if ( Auth::check() && Auth::user()->artist == 1 )

		    			<li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a href="{{action('PostsController@create')}}">Create Artist Profile</a></li>

							<li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a href=" {{action('UserController@show', \Auth::id() ) }} ">User Account</a></li>

							<li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a href="{{action('Auth\AuthController@getLogout')}}">Log Out</a></li>

		        		@elseif ( Auth::check() && Auth::user()->artist == 0)

							<li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a href=" {{action('UserController@show', \Auth::id() ) }} ">User Account</a></li>

							<li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a href="{{action('Auth\AuthController@getLogout')}}">Log Out</a></li>

						@else

            <!-- Button trigger modal -->

              <li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a data-toggle="modal" href="#loginModal">Log In</a></li>

              <li class="col-xs-3 col-sm-3 col-md-2 col-lg-2"><a data-toggle="modal" href="#signUpModal">Sign Up</a></li>

            @endif

            <li>
                <form id="searchBar" method="GET" class="align-center col-xs-12 col-sm-4 col-md-4 col-lg-4" action="{{action('PostsController@index')}}">

                    {!! csrf_field() !!}

                    <div class="input-group-btn img-responsive form-group">

                        <input  class="col-xs-12 col-sm-12 col-md-4 col-lg-4 form-control text-left" type="text" name="search" id="search" placeholder="Artist, Genre, or Location">

                        <button  class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        

                    </div>

                </form>
            </li>

            </ul>
            </li>
            </ul>

      	</div>

    </div>

</nav>

<!-- sign up Modal -->

<div class="modal rounded fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModal">

    <div class="rounded-top modal-dialog" role="document">

        <div class="modal-content rounded">

            <div class="modal-header rounded">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

                <h4 class="modal-title" id="myModalLabel">New User Sign Up</h4>

            </div>

            <div class="modal-body rounded">

                <form method="POST" action="{{ action('Auth\AuthController@postRegister') }}" enctype="multipart/form-data">

                    {!! csrf_field() !!}

                    <div class="form-group">Name

                        <input id="newUserName" class="form-control" type="name" name="name" placeholder="Name" value="">

                        @if( $errors->has('name') )

                            {{ $errors->first('name') }}

                        @endif

                    </div>

                    <div class="form-group">Email

                        <input id="newUserEmail" class="form-control" type="email" name="email" placeholder="Email" id="email" value="">

						@if ($errors->has('email') && old('password_confirmation') )

						<script>$(document).ready(function () {
								$('#signUpModal').modal('show');
							});
						</script>

						@endif

                    </div>

                    <div class="form-group">Password

                        <input id="newUserPassword" class="form-control" placeholder="Password" type="password" name="password">

                         @if( $errors->has('password') )

                            {{ $errors->first('password') }}

                        @endif

                    </div>

                    <div class="form-group">Confirm Password

                        <input id="newUserConfirmPassword" class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation">

                         @if( $errors->has('password') )

                            {{ $errors->first('password') }}

                        @endif

                    </div>

                    <div class="form-group">

						<input type="hidden" value="0" name="artist">

                        <input  id="artist" type="checkbox" name="artist" value="1"> Check If Artist/Artist Representative

                    </div>

                    <br>

                    <div class="modal-footer rounded">

                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                       <button class="btn btn-primary" type="submit">Register</button>

                    </div>

                    <br>

                </form>

            </div>

       </div>

    </div>

</div>

<!-- login modal -->

<div class="modal rounded fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">

    <div class="modal-dialog" role="document">

        <div class="rounded modal-content">

            <div class="rounded modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

                <h4 class="modal-title" id="loginModalLabel">User Login</h4>

            </div>

            <div class="modal-body">

                <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}">

                    {!! csrf_field() !!}

                    <div class ="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6"> Email
                        <input id="userLoginEmail" class="form-control" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
						@if ($errors->has('email') && !old('password_confirmation'))
						<script>$(document).ready(function () {
								$('#loginModal').modal('show');
							});
						</script>
						<p class="help-block">{{ $errors->first('email') }}</p>
						@endif
					</div>

                    <div class ="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 "> Password
                        <input id="userLoginPassword" class="form-control" type="password" placeholder="Password" name="password" id="password">
						@if ($errors->has('password') && !old('password_confirmation'))
						<script>$(document).ready(function () {
								$('#loginModal').modal('show');
							});
						</script>
						<p class="help-block">{{ $errors->first('password') }}</p>
						@endif
                    </div>

                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div class="modal-footer rounded">

                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                       <button class="btn btn-primary" type="submit">Submit</button>

                   </div>

                </form>

            </div>

       </div>

    </div>

</div>
