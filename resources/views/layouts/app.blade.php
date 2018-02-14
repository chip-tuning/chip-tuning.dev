<!DOCTYPE html>
<!--[if IE 9]> <html lang="{{ app()->getLocale() }}" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="{{ app()->getLocale() }}" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ config('app.name', 'RPCT') }} - @yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:url" content="{{ url()->current() }}">
@yield('facebook')
	<meta property="og:locale" content="sr_RS">
	<meta property="og:site_name" content="{{ config('app.name', 'RPCT') }}">
@yield('twitter')
	<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Sans|Raleway:300,400,700|Roboto:300,300i,400,400i,500,500i,700&amp;subset=latin-ext">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
	@yield('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
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
								@include('sections.socials')
							</ul>
							<div class="social-links hidden-lg hidden-md hidden-sm circle small">
								<div class="btn-group dropdown">
									<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
									<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
										@include('sections.socials')
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
							@include('sections.logo')
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
																<li><a href="#"><i class="fa fa-star pr-10"></i>Automobili</a></li>
																<li><a href="#"><i class="fa fa-star pr-10"></i>Kamioni</a></li>
																<li><a href="#"><i class="fa fa-star pr-10"></i>Poljoprivredne mašine</a></li>
															</ul>
														</div>
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li ><a href="#"><i class="fa fa-star pr-10"></i>DPF OFF</a></li>
																<li ><a href="#"><i class="fa fa-star pr-10"></i>EGR OFF</a></li>
																<li ><a href="#"><i class="fa fa-star pr-10"></i>DTC OFF</a></li>
															</ul>
														</div>
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li><a href="#"><i class="fa fa-star pr-10"></i>AD Blue OFF</a></li>
																<li><a href="#"><i class="fa fa-clock-o pr-10"></i>Swirl Flaps OFF</a></li>
																<li><a href="#"><i class="fa fa-star pr-10"></i>Speed Limit OFF</a></li>
															</ul>
														</div>
														<div class="col-sm-6 col-md-3">
															<div class="divider"></div>
															<ul class="menu">
																<li><a href="#"><i class="fa fa-star pr-10"></i>Topli Start OFF</a></li>
																<li><a href="#"><i class="fa fa-clock-o pr-10"></i>GPS Pracenje</a></li>
																<li><a href="#"><i class="fa fa-star pr-10"></i>Dijagnostika</a></li>
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
										<a href="{{ url('/') }}"><img id="logo-footer" src="public/images/logo_light_blue.png" alt="{{ config('app.name', 'RPCT') }}"></a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus illo vel dolorum soluta consectetur doloribus sit. Delectus non tenetur odit dicta vitae debitis suscipit doloribus. Ipsa, aut voluptas quaerat... <a href="page-about.html">Learn More<i class="fa fa-long-arrow-right pl-5"></i></a></p>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="#">Mapa sajta</a></li>
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
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="public/images/blog-thumb-1.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2017</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="public/images/blog-thumb-2.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2017</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="public/images/blog-thumb-3.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="public/images/blog-thumb-4.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2017</p>
										</div>
									</div>
									<div class="text-right space-top">
										<a href="#" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>Pogledaj sve</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div id="mini-gallery" class="footer-content">
									<h2 class="title">Naši radovi</h2>
									<div class="separator-2"></div>
									<div class="mini-magnific row grid-space-10">
										@foreach ($photos as $photo)
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="{{ asset('/storage' . $photo->small) }}" alt="{{ $photo->title }}">
													<a href="{{ asset('/storage' . $photo->large) }}" class="overlay-link small">
														<i class="fa fa-image"></i>
													</a>
												</div>
											</div>                                
										@endforeach
									</div>
									<div class="text-right space-top">
										<a href="{{ route('gallery.index') }}" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>Pogledaj sve</a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-content">
									<h2 class="title">Kontakt</h2>
									<div class="separator-2"></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio voluptatem necessitatibus illo vel dolorum soluta.</p>
									<ul class="social-links circle animated-effect-1">
										@include('sections.socials')
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
								@include('sections.copyright')
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
	@yield('scripts')
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>    
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