<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
    <!--     <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.min.css')}}"> -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}">


	</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light nav-background">
  <a class="navbar-brand" href="#"><img class="logo" src="{{asset('img/medical-logo.png')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link nav-custom-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle nav-custom-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/">Baby Care</a>
          <a class="dropdown-item" href="/">Pregnany Care</a>
          <a class="dropdown-item" href="/">Oldage Care</a>
          <a class="dropdown-item" href="/">Fitness</a>
        </div>
      </li>
      <li class="nav-item nav-custom-link">
        <a class="nav-link" href="/">Testimonials</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

	@yield('content')
	

<!-- 	<script type="text/javascript" href="{{asset('jquery/jquery-3.4.1.min.js')}}"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" href="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" href="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script type="text/javascript" href="{{asset('js/popper.min.js')}}"></script> -->
	<!-- <script type="text/javascript" href="{{asset('js/home.js')}}"></script> -->

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	

</body>