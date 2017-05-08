
<nav id="header" class="img-responsive navbar navbar-default navbar-fixed-top navbar-static">

    <div class="container">

      <div class="text-center navbar-header">

      		<h3> Melody Booking 

      			@if (Auth::check())

					<strong>|| Hello: {{ Auth::user()->name }}</strong>

				@endif

			</h3>
      	
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

            	<li class="dropdown-header">User Menu</li>

            	<li class="divider"></li>

				    <li><a>Home</a></li>
		
        			@if (Auth::check()) 

                        <li><a>Edit Availabilty</a></li>

                        <li><a>Edit Account</a></li>

        				<li><a>Edit Password</a></li> 

        				<li><a>Log Out</a></li>

        			@else 

						<!-- Button trigger modal -->
                        <li><a data-toggle="modal" href="#loginModal">Log In</a></li>

                        <li><a data-toggle="modal" href="#signUpModal">Sign Up</a></li>
						
        			@endif

                <li><a>Featured Artist</a></li>

                <li><a>Contact Us</a></li>
              
            </ul>

          </li>

        </ul>

        <form method="GET" class="navbar-form navbar-right">

			{!! csrf_field() !!}

			<div class="img-responsive form-group">

				Search: <input class="form-control text-left" type="text" name="search" id="search">

			</div>

			<input class=" btn btn-primary" type="submit" value="submit">

		</form>

      </div>

    </div>

</nav>

<!-- sign up Modal -->

<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModal">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

                <h4 class="modal-title" id="myModalLabel">New User Sign Up</h4>

            </div>

            <div class="modal-body">

                <form method="POST" >

                    {!! csrf_field() !!}

                    <div class="form-group">Name

                        <input class="form-control" type="name" name="name" value="{{ old('name') }}">

                        @if( $errors->has('name') )

                            {{ $errors->first('name') }}

                        @endif
                    </div>

                    <div class="form-group">Email

                        <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">

                         @if( $errors->has('email') )

                            {{ $errors->first('email') }}

                        @endif

                    </div>

                    <div class="form-group">Password

                        <input class="form-control" type="password" name="password">

                         @if( $errors->has('password') )

                            {{ $errors->first('password') }}

                        @endif

                    </div>

                    <div class="form-group">Confirm Password

                        <input class="form-control" type="password" name="password_confirmation">

                         @if( $errors->has('password') )

                            {{ $errors->first('password') }}

                        @endif

                    </div>

                    <div class="form-group">

                        <input  id="artist" type="checkbox" name="artist"> Check If Artist

                    </div>

                    <br>

                    <div class="modal-footer">

               <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

               <button type="button" class="btn btn-primary" type="submit">Register</button>

           </div>

                </form>

            </div>

       </div>

    </div>

</div>

<!-- login modal -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

            <h4 class="modal-title" id="loginModalLabel">User Login</h4>

            </div>

            <div class="modal-body">

                <form method="POST" >

                    {!! csrf_field() !!}

                    <div class ="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6"> Email
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class ="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6 "> Password
                        <input class="form-control" type="password" name="password" id="password">
                    </div>

                    <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <input type="checkbox" name="remember"> Remember Me
                    </div>

                    <div class="modal-footer">

                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                       <button type="button" class="btn btn-primary" type="submit">Submit</button>

                   </div>

                </form>

            </div>

       </div>

    </div>

</div>






		
	