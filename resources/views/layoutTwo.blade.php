<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		<link rel="icon" href="{{ asset('icon.png') }}">
		<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	</head>
	<body class="text-white" >
		<!-- <img class="bcgImg" src="{{asset('images/фон.png')}}"> -->
		<x-header/>
		<main>
		@yield('content')
		</main>
		<x-footer/>

		<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	</body>
</html>
