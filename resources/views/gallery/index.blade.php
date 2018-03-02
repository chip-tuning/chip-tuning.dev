@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Nasi radovi')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="gallery">
	<div class="banner pv-45 dark-translucent-bg background-img-2" style="background-position: 50% 30%;">
		@component('components.breadcrumb')
		    <li class="active">Naši radovi</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-30">
					<h1 class="object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Naši radovi</h1>
					<div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
					<p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">Koristeći savremeni software I originalne interfejse naši radovi govore sami za sebe. Više naših radova možete pogledati putem Instagrama.</p>
					<p class="text-center"><a target="_blank" href="https://www.instagram.com/{{ config('app.socials.instagram', '') }}" class="btn btn-lg btn-gray-transparent object-non-visible" data-animation-effect="zoomIn" data-effect-delay="300"><i class="fa fa-instagram fa-fw"></i> Instagram</a></p>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-action text-center">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <h2 class="title">Brendovi</h2>
                                <p>Nudimo savremena rešenja za veliki broj brendova iz celog sveta bilo da je u pitanju teretni, putnicki ili poljoprivredni program.</p>
                                <div class="separator"></div>      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
			<div class="owl-carousel brands">
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
				<div class="brand"><img src="{{ asset('images/client-1.png') }}" alt=""></div>
			</div>
        </div>
    </section>
</div>
@endsection