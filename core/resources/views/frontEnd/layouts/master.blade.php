<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Finsphere Expo Kuwait')</title>
	<!-- ===================== META ===================== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{ asset('assets/frontend/img/resources/favicon.png') }}" type="image/x-icon">
	<!-- ===================== STYLE ===================== -->
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
</head>

<body id="home" class="version-2" style="background-color: #fff;">
	<!--===================== HEADER =====================-->
	@include('frontEnd.includes.header')
    @yield('content')
	@include('frontEnd.includes.footer')
	<!--=================== FOOTER END ===================-->

	<!--===================== TO TOP =====================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<!--=================== TO TOP END ===================-->

	<!--===================== SCRIPT	=====================-->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
	<script src="{{ asset('assets/frontend/js/slick.min.js ') }}"></script>
	<script src="{{ asset('assets/frontend/js/scripts.js ') }}"></script>
</body>
</html>
