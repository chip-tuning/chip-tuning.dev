@extends('layouts.app')

@section('title', 'Blog')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('content')
<div id="blog">
	<div class="banner dark-translucent-bg background-img-3" style="background-position: 50% 30%;">
		@component('components.breadcrumbs')
			<li class="active">Blog</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h1 class="page-title text-center">Blog</h1>
					<div class="separator"></div>
					<p class="lead text-center">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
					<ul class="list-inline mb-20 text-center">
						<li><i class="text-default fa fa-map-marker pr-5"></i>{{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</li>
						<li><i class="text-default fa fa-phone pl-10 pr-5"></i>{{ config('app.details.phone', '+381 65 55 666 14') }}</li>
						<li><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>{{ config('app.details.email', 'office@chip-tuning.rs') }}</li>
					</ul>
					<div class="separator"></div>
					<ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
						@include('sections.socials')
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h1 class="page-title">Najnoviji članci</h1>
					<div class="separator-2"></div>
					<!-- blogpost start -->
					<article class="blogpost">
						<div class="overlay-container">
							<img src="{{ asset('images/blog-2.jpg') }}" alt="">
							<a class="overlay-link" href="blog-post.html"><i class="fa fa-link"></i></a>
						</div>
						<header>
							<h2><a href="blog-post.html">Cute Robot</a></h2>
							<div class="post-info">
								<span class="post-date">
									<i class="icon-calendar"></i>
									<span class="day">08</span>
									<span class="month">May 2015</span>
								</span>
								<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
								<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
							</div>
						</header>
						<div class="blogpost-content">
							<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
						</div>
						<footer class="clearfix">
							<div class="tags pull-left"><i class="fa fa-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
							<div class="link pull-right"><i class="fa fa-link"></i> <a href="#">Pročitaj ceo članak</a></div>
						</footer>
					</article>
					<!-- blogpost end -->
				</div>
				@include('sections.sidebar')
			</div>
		</div>
	</section>
</div>
@endsection