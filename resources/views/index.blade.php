<!DOCTYPE html>
<html>
<head>
	<title>
		{{-- Tab Title --}}
		@yield('title')
	</title>

	{{-- CSS --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="/css/core.css" rel="stylesheet">

	{{-- Independent Header --}}
	@yield('header')
</head>
<body>
	{{-- Nav Bar --}}

	{{-- Content --}}
	<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Nick Merowsky</h1>
        <h3 class="jumbotron-heading">Web Designer/Software Developer/Bioinformatician</h3>

        <p class="lead text-muted">Welcome to Nick Merowsky's personal webpage!  Here you're going to learn a lot about my interests, both professional and extracirricular.  I hope you enjoy your visit to my personal portfolio.</p>
        <p>
          <a href="/about" class="btn btn-secondary">About</a>
          <a href="/examples" class="btn btn-secondary">Examples</a>
          <a href="/accoms" class="btn btn-secondary">Accomplishments</a>
        </p>
      </div>
    </section>

	{{-- Footer --}}
	@include('navigation.footer')
	@yield('footer')
</body>
</html>