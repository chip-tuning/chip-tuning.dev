<!DOCTYPE html>
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="{{ app()->getLocale() }}" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans|Raleway:300,400,700|Roboto:300,300i,400,400i,500,500i,700&amp;subset=latin-ext">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body class="no-trans">
	<div id="fullscreen" class="page-wrapper">
		<div class="fullscreen-bg"></div>
		<div class="pv-40 dark-translucent-bg">
			<div class="container">
				<div class="row">
					<div class="text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
						@include('sections.logo')
						<div class="info-block center-block p-30 light-gray-bg text-center border-clear">
							@yield('content')
						</div>				
						<div class="mt-20">
							@include('sections.copyright')
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>    
</body>
</html>
