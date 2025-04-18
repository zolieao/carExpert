<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="icon" href="{{ asset('icon.png') }}">
		<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	</head>
	<body class="bg-white text-white " >
		<!-- <img  src="{{asset('images/фон.png')}}"> -->
		<x-header/>
		<main>
		@yield('content')
		</main>
		<x-footer/>

		<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	</body>
</html>
