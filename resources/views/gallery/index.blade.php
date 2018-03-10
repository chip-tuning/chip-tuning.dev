@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Nasi radovi')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="gallery">
	<div class="banner dark-translucent-bg background-img-3">
		@component('components.breadcrumb')
			<li class="active">Naši radovi</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-25">
					<h1 class="page-title text-center">Naši radovi</h1>
					<div class="separator"></div>
					<p class="lead text-center">Koristeći savremeni software i originalne interfejse naši radovi govore sami za sebe. Više naših radova možete pogledati putem Instagrama.</p>
					<ul class="social-links circle animated-effect-1 margin-clear text-center">
						@include('partials.socials')
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h3 class="title">Najnoviji radovi</h3>
					<div class="separator-2"></div>
					<div class="filters">
						<ul class="nav nav-pills">
							<li class="active"><a href="#" data-filter="*">Sve</a></li>
							@foreach ($albums as $album)
								<li><a href="#" data-filter=".{{ str_slug($album->title) }}">{{ $album->title }}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="isotope-container row grid-space-10">
						@foreach ($albums as $album)
							@foreach($album->photos as $photo)
							<div class="col-md-3 col-sm-6 isotope-item {{ strtolower($album->title) }}">
								<div class="image-box shadow bordered mb-20">
									<div class="overlay-container">
										<img src="{{ asset('/storage/' . $photo->medium) }}" alt="{{ $photo->title }}">
										<a href="{{ asset('/storage/' . $photo->large) }}" class="overlay-link medium" title="{{ $photo->title }}"><i class="fa fa-image"></i></a>
									</div>
								</div>
							</div>						
							@endforeach
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section dark-bg pv-40 clearfix">
		@if ($testimonials->isNotEmpty())
			@component('components.testimonials', ['testimonials' => $testimonials])
			@endcomponent
		@endif
	</section>
</div>
@endsection