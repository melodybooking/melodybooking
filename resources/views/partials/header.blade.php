<nav id="header" class="img-responsive navbar navbar-default navbar-fixed-top navbar-static">

    <div class="container">

      	<div id="navbarBrand" class="hidden-xs-down text-center navbar-header">


      		<h3><a href="/"> Melody Booking </a></h3>


	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">

	          	<span class="sr-only">Toggle navigation</span>

	          	<span class="icon-bar"></span>

	          	<span class="icon-bar"></span>

	          	<span class="icon-bar"></span>

	        </button>

    	</div>

      	<div id="navbar" class="navbar-collapse collapse">

	        <ul class="nav navbar-nav navbar-right">

	          	<li class="dropdown">

	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Navigation<span class="caret"></span></a>

		            <ul class="dropdown-menu" role="menu">

						<li><a href="/">Home</a></li>

                        <li><a href="{{action('PostsController@index')}}">All Artists</a></li>

		        		@if (Auth::check())

			                <li><a href="#">Edit Availabilty</a></li>

			                <li><a href="">Edit User Account</a></li>

		    				<li><a href="{{action('PostsController@create')}}">Create Artist Profile</a></li>

		    				<li><a href="{{action('Auth\AuthController@getLogout')}}">Log Out</a></li>

		        		@else

							<!-- Button trigger modal -->

		                    <li><a data-toggle="modal" href="#loginModal">Log In</a></li>

		                    <li><a data-toggle="modal" href="#signUpModal">Sign Up</a></li>

		        		@endif

		                <li><a href="#">Contact Us</a></li>

		            </ul>

	          	</li>

	        </ul>

                <form id="searchBar" method="GET" class="navbar-form navbar-right" action="{{action('PostsController@index')}}">

                    {!! csrf_field() !!}

                    <div class="img-responsive form-group">

                        Search: <input class="form-control text-left" type="text" name="search" id="search" placeholder="artist or genre">

                    </div>

                    <input class=" btn btn-primary" type="submit" value="submit">
                </form>

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

                        <input id="newUserName" class="form-control" type="name" name="name" value="{{ old('name') }}">

                        @if( $errors->has('name') )

                            {{ $errors->first('name') }}

                        @endif
                    </div>

                    <div class="form-group">Email

                        <input id="newUserEmail" class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">

                         @if( $errors->has('email') )

                            {{ $errors->first('email') }}

                        @endif

                    </div>

                    <div class="form-group">Password

                        <input id="newUserPassword" class="form-control" type="password" name="password">

                         @if( $errors->has('password') )

                            {{ $errors->first('password') }}

                        @endif

                    </div>

                    <div class="form-group">Confirm Password

                        <input id="newUserConfirmPassword" class="form-control" type="password" name="password_confirmation">

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
                        <input id="userLoginEmail" class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class ="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 "> Password
                        <input id="userLoginPassword" class="form-control" type="password" name="password" id="password">
                    </div>

                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div class="modal-footer">

                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                       <button class="btn btn-primary" type="submit">Submit</button>

                   </div>

                </form>

            </div>

       </div>

    </div>

</div>
