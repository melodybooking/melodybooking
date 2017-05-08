<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >

	    <title>Melody Booking</title>

	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="/css/melodybooking.css">

		<script rel="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>		
		<script rel="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script rel="text/javascript" src="https://use.fontawesome.com/11431c1d75.js"></script>
		<script rel="text/javascript" src="/js/masterblade.js"></script>
	
	</head>

	<body> 

		@include('partials.header')

		<main class="container container-fluid img-responsive">

			

			@if (Session::has('successMessage'))
				<div class="alert alert-success">{{ session('successMessage') }}</div>
			@endif
			@if (Session::has('errorMessage'))
				<div class="alert alert-danger">{{ session('errorMessage') }}</div>
			@endif
			
			@yield('header')

		    @yield('content')
			
		    @yield('footer')

		    @include('partials.footer')

		</main>
		
	</body>

</html>