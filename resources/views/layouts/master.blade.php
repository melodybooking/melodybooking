<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >

	    <title>Melody Booking</title>

	    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Work+Sans" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="/css/melodybooking.css">
	    <link href="css/styles.css" rel="stylesheet" type="text/css" />
	    <link href="css/styles.css" rel="stylesheet" type="text/css" />


		<script rel="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script rel="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script rel="text/javascript" src="https://use.fontawesome.com/11431c1d75.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script rel="text/javascript" src="/js/masterblade.js"></script>
		<script rel="text/javascript" src="/js/responsiveslides.min.js"></script>
		<script rel="text/javascript" src="/js/responsiveslides.js"></script>
		<script src="/js/html5audio.js" type="text/javascript"></script>
		<script type="text/javascript" src="/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="/js/jquery-ui-1.8.21.custom.min.js"></script>
		<script type="text/javascript" src="/js/main.js"></script>


		
	</head>

	<body>

		@include('partials.header')

		<main class="container-fluid img-responsive">

			@if (Session::has('successMessage'))
				<div class="alert alert-success">{{ session('successMessage') }}</div>
			@endif
			@if (Session::has('errorMessage'))
				<div class="alert alert-danger">{{ session('errorMessage') }}</div>
			@endif


	    @yield('content')

		</main>

		<br>
		<br>

		@include('partials.audio')

		@include('partials.footer')


	</body>

</html>
