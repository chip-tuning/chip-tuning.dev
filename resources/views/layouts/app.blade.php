<!DOCTYPE html>
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="{{ app()->getLocale() }}" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta property="og:type" content="@yield('facebook_type')">
	<meta property="og:url" content="{{ url()->current() }}">
	<meta property="og:title" content="@yield('title')">
	<meta property="og:description" content="@yield('description')">
	@yield('facebook_image')
	<meta property="og:image" content="{{ asset('images/logo.jpg') }}">
	<meta property="og:locale" content="sr_RS">
	<meta property="og:site_name" content="{{ config('app.name', 'RPCT') }}">
	<meta property="fb:admins" content="">
	<meta property="fb:app_id" content="">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="{{ "@".config('app.socials.twitter', '') }}">
	<meta name="twitter:title" content="@yield('title')">
	<meta name="twitter:description" content="@yield('description')">
	<meta name="twitter:image" content="@yield('twitter_image')">
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
	@yield('styles')
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
<body class="no-trans front-page transparent-header">
	<div class="scrollToTop circle"><i class="fa fa-chevron-up"></i></div>
	<div class="page-wrapper">
		<div class="header-container">
			@if (session('message'))
				@component('components.announcement', ['title' => session('message')['title'], 'body' => session('message')['body']])
				@endcomponent
			@endif
			<div class="header-top dark">
				<div class="container">
					<div class="row">
						<div class="col-xs-9 col-sm-6 col-md-9">
							<div class="header-top-first clearfix">
								<ul class="list-inline">
									<li><i class="fa fa-phone pr-5 pl-10"></i>{{ config('app.details.phone', '+381 65 55 666 14') }}</li>
									<li class="hidden-xs"><i class="fa fa-map-marker pr-5 pl-10"></i>{{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</li>
									<li class="hidden-sm hidden-xs"><i class="fa fa-envelope-o pr-5 pl-10"></i>{{ config('app.details.email', 'office@chip-tuning.rs') }}</li>
								</ul>
							</div>
						</div>
						<div class="col-xs-3 col-sm-6 col-md-3 text-right">
							<ul class="social-links circle small clearfix hidden-xs">
								@include('partials.socials')
							</ul>
							<div class="social-links hidden-lg hidden-md hidden-sm circle small">
								<div class="btn-group dropdown">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
									<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
										@include('partials.socials')
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<header class="header fixed">
				<nav class="main-navigation animated navbar navbar-default">
					<div class="container with-mega-menu">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div id="logo" class="logo">
								<a href="{{ url('/') }}"><img src="/images/logo.png" alt="{{ config('app.name', 'RPCT') }}"></a>
							</div>	
						</div>
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="{{ set_active() }}"><a href="{{ route('home.index') }}">Početna</a></li>
								<li class="dropdown mega-menu {{ set_active('usluge*') }}">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usluge</a>
									<ul class="dropdown-menu">
										<li>
											<div class="ts">
												<div class="col-md-12">
													<h4 class="title"><i class="fa fa-microchip pr-10"></i>Chip Tuning</h4>
													<div class="row">
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li class="{{ set_active('usluge/automobili') }}"><a href="{{ route('services.cars') }}"><i class="fa fa-star pr-10"></i>Automobili</a></li>
																<li class="{{ set_active('usluge/kamioni') }}"><a href="{{ route('services.trucks') }}"><i class="fa fa-star pr-10"></i>Kamioni</a></li>
																<li class="{{ set_active('usluge/poljoprivredne-masine') }}"><a href="{{ route('services.machines') }}"><i class="fa fa-star pr-10"></i>Poljoprivredne mašine</a></li>
															</ul>
														</div>
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li class="{{ set_active('usluge/dpf-off') }}"><a href="{{ route('services.dpf') }}"><i class="fa fa-star pr-10"></i>DPF OFF</a></li>
																<li class="{{ set_active('usluge/egr-off') }}"><a href="{{ route('services.egr') }}"><i class="fa fa-star pr-10"></i>EGR OFF</a></li>
																<li class="{{ set_active('usluge/dtc-off') }}"><a href="{{ route('services.dtc') }}"><i class="fa fa-star pr-10"></i>DTC OFF</a></li>
															</ul>
														</div>
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li class="{{ set_active('usluge/ad-blue-off') }}"><a href="{{ route('services.adblue') }}"><i class="fa fa-star pr-10"></i>AD Blue OFF</a></li>
																<li class="{{ set_active('usluge/swirl-flaps-off') }}"><a href="{{ route('services.swirlflaps') }}"><i class="fa fa-clock-o pr-10"></i>Swirl Flaps OFF</a></li>
																<li class="{{ set_active('usluge/speed-limit-off') }}"><a href="{{ route('services.speedlimit') }}"><i class="fa fa-star pr-10"></i>Speed Limit OFF</a></li>
															</ul>
														</div>
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li class="{{ set_active('usluge/hot-start-fix') }}"><a href="{{ route('services.hotstart') }}"><i class="fa fa-star pr-10"></i>Hot Start Fix</a></li>
																<li class="{{ set_active('usluge/gps-pracenje') }}"><a href="{{ route('services.gps') }}"><i class="fa fa-clock-o pr-10"></i>GPS Praćenje</a></li>
																<li class="{{ set_active('usluge/dijagnostika') }}"><a href="{{ route('services.diagnostics') }}"><i class="fa fa-star pr-10"></i>Dijagnostika</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="{{ set_active('blog*') }}"><a href="{{ route('blog.index') }}">Blog</a></li>
								<li class="{{ set_active('nasi-radovi*') }}"><a href="{{ route('gallery.index') }}">Naši radovi</a></li>
								<li class="{{ set_active('kontakt*') }}"><a href="{{ route('contact.index') }}">Kontakt</a></li>
							</ul>
						</div>      
					</div>                      
				</nav>
			</header>
		</div>
		@yield('content')
		<footer id="footer" class="clearfix">
			<div class="footer">
				<div class="container">
					<div class="footer-inner">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-content">
									<div class="logo-footer">
										<a href="{{ url('/') }}"><img src="/images/logo.png" alt="{{ config('app.name', 'RPCT') }}"></a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat.</p>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="{{ route('feed.atom') }}">RSS/ATOM</a></li>
											<li><a href="{{ route('faq.index') }}">Česta pitanja</a></li>
											<li><a href="{{ route('terms.index') }}">Uslovi korišćenja</a></li>
											<li><a href="{{ route('privacy.index') }}">Politika privatnosti</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-content">
									<h2 class="title">Blog</h2>
									<div class="separator-2"></div>
									@if ($articles->isNotEmpty())
										@foreach($articles as $article)
											<div class="media margin-clear">
												<div class="media-body">
													<h6 class="media-heading"><a href="{{ route('blog.show', $article->slug) }}">{{ words($article->title, 6) }}</a></h6>
													<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Objavljeno {{ $article->published_at->diffForHumans() }}</p>
												</div>
												<hr>
											</div>
										@endforeach
										<div class="text-right space-top">
											<a href="{{ route('blog.index') }}" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>Pogledaj sve</a>
										</div>										
									@else
										<p>Trenutno ne postoji nijedan članak</p>
									@endif
								</div>
							</div>
							<div class="col-md-3">
								<div id="mini-gallery" class="footer-content">
									<h2 class="title">Naši radovi</h2>
									<div class="separator-2"></div>
									@if ($photos->isNotEmpty())
									<div class="mini-magnific row grid-space-10">
										@foreach ($photos as $photo)
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="/storage/{{ $photo->small }}" alt="{{ $photo->title }}">
													<a href="/storage/{{ $photo->large }}" class="overlay-link small"><i class="fa fa-image"></i></a>
												</div>
											</div>                                
										@endforeach
									</div>
									<div class="text-right space-top">
										<a href="{{ route('gallery.index') }}" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>Pogledaj sve</a>
									</div>
									@else
										<p>Trenutno ne postoji nijedna fotografija</p>
									@endif
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-content">
									<h2 class="title">Kontakt</h2>
									<div class="separator-2"></div>
									<p>Naše aktivnosti možete pratiti i na svim popularnim društvenim mrežama. Pridružite nam se na nekoj od njih i budite uvek u toku.</p>
									<ul class="social-links circle animated-effect-1">
										@include('partials.socials')
									</ul>
									<div class="separator-2"></div>
									<ul class="list-icons">
										<li><i class="fa fa-map-marker pr-10 text-default"></i> {{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</li>
										<li><i class="fa fa-phone pr-10 text-default"></i> {{ config('app.details.phone', '+381 65 55 666 14') }}</li>
										<li><i class="fa fa-phone pr-10 text-default"></i> {{ config('app.details.phone_alt', '+381 60 02 262 17') }}</li>
										<li><i class="fa fa-envelope-o pr-10 text-default"></i> <a href="mailto:{{ config('app.details.email', 'office@chip-tuning.rs') }}">{{ config('app.details.email', 'office@chip-tuning.rs') }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="subfooter">
				<div class="container">
					<div class="subfooter-inner">
						<div class="row">
							<div class="col-md-12">
								@include('partials.copyright')
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="/js/app.js"></script>
	@yield('scripts')
	<!--
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-104289219-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-104289219-1');
	</script>
	-->
</body>
</html>