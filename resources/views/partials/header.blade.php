
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

                        <li><a>Sign Up</a></li>
						<!-- Button trigger modal -->
                        <li><a data-toggle="modal" href="#loginModal">Log In</a></li>
						
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

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
           </div>
           <div class="modal-body">

            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
           </div>
       </div>
    </div>
</div>






		
	