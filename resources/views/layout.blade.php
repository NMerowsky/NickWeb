<!DOCTYPE html>
<html>
<head>
	<title>
		{{-- Tab Title --}}
		@yield('title')
	</title>

	{{-- Bootstrap core CSS --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="/css/core.css" rel="stylesheet">
	
	{{-- Independent Header --}}
	@yield('header')
</head>
<body>
	{{-- Nav Bar --}}
	@include('navigation.nav')

	{{-- Content --}}
	<div class="container">
		@yield('content')
	</div>

	{{-- Footer --}}
	@include('navigation.footer')
	@yield('footer')
</body>
</html>