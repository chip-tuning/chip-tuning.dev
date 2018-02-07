@extends('layouts.app')

@section('title', 'Nasi radovi')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('content')
<div id="gallery">
	<div class="banner pv-45 dark-translucent-bg background-img-2" style="background-position: 50% 30%;">
		@component('components.breadcrumb', ['parent' => 'Početna', 'parent_url' => route('home.index')])
		    Naši radovi
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-30">
					<h1 class="object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Naši radovi</h1>
					<div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
					<p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
					<p class="text-center"><a target="_blank" href="https://www.instagram.com/{{ config('app.socials.instagram', '') }}" class="btn btn-lg btn-gray-transparent object-non-visible" data-animation-effect="zoomIn" data-effect-delay="300"><i class="fa fa-instagram fa-fw"></i> Instagram</a></p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit Illo quaerat <br> commodi excepturi dignissimos!</p>
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
										<img src="{{ asset('/storage' . $photo->medium) }}" alt="{{ $photo->title }}">
										<a href="{{ asset('/storage' . $photo->large) }}" class="overlay-link medium" title="{{ $photo->title }}"><i class="fa fa-image"></i></a>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus error pariatur deserunt laudantium nam, mollitia quas nihil inventore, quibusdam?</p>
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