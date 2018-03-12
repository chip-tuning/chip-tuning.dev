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
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans|Raleway:300,400,700|Roboto:300,300i,400,400i,500,500i,700&amp;subset=latin-ext">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="alternate" type="application/json" title="{{ config('app.name', 'RPCT') }}" href="{{ route('feed.json') }}">
	<link rel="alternate" type="application/atom+xml" title="{{ config('app.name', 'RPCT') }}" href="{{ route('feed.atom') }}">
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "{{ config('app.name', 'RPCT') }}",
			"url": "{{ config('app.url', 'https://www.chip-tuning.rs') }}",
			"sameAs": [
				"https://www.facebook.com/{{ config('app.socials.facebook', '') }}",
				"https://www.twitter.com/{{ config('app.socials.twitter', '') }}",
				"https://www.instagram.com/{{ config('app.socials.instagram', '') }}"
			]
		}
	</script>
</head>

<body class="no-trans">
	<div id="fullscreen" class="page-wrapper">
		<div class="fullscreen-bg"></div>
		<div class="pv-40 dark-translucent-bg">
			<div class="container">
				<div class="row">
					<div class="text-center>
						<div class="info-block center-block p-15 logo-blank">
								<a href="{{ url('/') }}"><img src="/images/logo-white.png" alt="{{ config('app.name', 'RPCT') }}"></a>
						</div>
						<div class="info-block center-block p-30 light-gray-bg text-center border-clear">
							@yield('content')
						</div>				
						<div class="mt-20">
							@include('partials.copyright')
						</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
    <script src="{{ asset('js/app.js') }}"></script>    
</body>
</html>
