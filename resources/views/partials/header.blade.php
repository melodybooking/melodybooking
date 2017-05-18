<nav id="header" class="img-responsive navbar navbar-default navbar-fixed-top navbar-static">

    <div class="container-fluid">

      	<div id="navbarBrand" class="img-responsive text-center navbar-header">

      		<h3 class="img-responsive"><a href="/">Melody Booking </a></h3>

	        <button type="button" class="navbar-right navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">

	          	<span class="sr-only">Toggle navigation</span>

	          	<span class="icon-bar"></span>

	          	<span class="icon-bar"></span>

	          	<span class="icon-bar"></span>

	        </button>

    	</div>

      	<div id="navbar" class="navbar-collapse center-align container-fluid collapse">

	        <ul class="nav navbar-nav navbar-right">

	          	<li class="dropdown center-align row col-xs-12 col-lg-12 col-sm-12 col-md-12">

	            <!-- <a href="#" id="navigationDropDown" class=" navbar-right dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Navigation</span></a> -->

		        <ul class="container-fluid" role="menu">

						<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href="/">Home</a></li>

            <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href="{{action('PostsController@index')}}">All Artists</a></li>

		        	@if ( Auth::check() && Auth::user()->artist == 1 )

		    			<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href="{{action('PostsController@create')}}">Create Artist Profile</a></li>

							<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href=" {{action('UserController@show', \Auth::id() ) }} ">User Account</a></li>

							<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href="{{action('Auth\AuthController@getLogout')}}">Log Out</a></li>

		        		@elseif ( Auth::check() && Auth::user()->artist == 0)

							<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href=" {{action('UserController@show', \Auth::id() ) }} ">User Account</a></li>

							<li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href="{{action('Auth\AuthController@getLogout')}}">Log Out</a></li>

						@else

            <!-- Button trigger modal -->

              <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a data-toggle="modal" href="#loginModal">Log In</a></li>

              <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a data-toggle="modal" href="#signUpModal">Sign Up</a></li>

            @endif

              <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2"><a href="#">Contact Us</a></li>

              </ul>


                <form id="searchBar" method="GET" class="col-xs-6 col-sm-6 col-md-6 col-lg-6 container-fluid" action="{{action('PostsController@index')}}">

                    {!! csrf_field() !!}

                    <div class="img-responsive form-group">

                        Search: <input class="form-control text-left" type="text" name="search" id="search" placeholder="artist or genre">

                    </div>

                    <input class=" btn btn-primary" type="submit" value="submit">

                </form>


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

                         @if( $errors->has('email') )

                            {{ $errors->first('email') }}

                        @endif

						@if ($errors->has('email'))
						<script>$(document).ready(function () {
								$('#signUpModal').modal('show');
							});
						</script>
						<p class="help-block">{{ $errors->first('email') }}</p>
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
						@if ($errors->has('email'))
						<script>$(document).ready(function () {
								$('#loginModal').modal('show');
							});
						</script>
						<p class="help-block">{{ $errors->first('email') }}</p>
						@endif
					</div>

                    <div class ="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 "> Password
                        <input id="userLoginPassword" class="form-control" type="password" placeholder="Password" name="password" id="password">
						@if ($errors->has('password'))
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
