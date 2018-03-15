@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Kamioni')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-2 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Kamioni</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Chip</strong> Tuning</h2>
					<p>Chip Tuning kamiona se radi iz više razloga, pri čemu se kao najbitniji izdvajajaju povećanje snage vozila i vozačima često najbitniji smanjenje potrošnje. Prema dosadašnjem iskustvu, čipovanjem kamiona njihova potrošnja se smanjuje od 1 do 3 litre na 100 pređenih kilometara. </p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Kamioni</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Kamioni na kojima smo mi radili chip tuning imaju dosta više snage od kamiona koji koriste fabričke mape, što se posebno primećuje kada su opterećeni teretom kao i kada prolaze kroz brdovite i planinske krajeve.</p>
							<p>Chip Tuning kod većine kamiona moguće je uraditi putem OBD dijagnostičkog porta, samo mali broj kamiona zahteva skidanje motornog računara (ECU). Sama procedura traje 2 do 3 sata. Posedujemo i opremu za rad na terenu i izlazimo na teren kada su u pitanju teretna vozila u cilju minimizacije troškova naših klijenata.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Osetno povećanje snage</li>
								<li><i class="fa fa-check-square-o"></i> Smanjenje potrošnje od 1 do 3l</li>
								<li><i class="fa fa-check-square-o"></i> Povećanje obrtnog momenta</li>
								<li><i class="fa fa-check-square-o"></i> Izlazak na teren</li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="overlay-container overlay-visible">
								<img src="/images/page-about-2.jpg" alt="">
								<div class="overlay-bottom hidden-xs">
									<div class="text">
										<h3 class="title">We Love To Code</h3>
									</div>
								</div>
								<a href="/images/page-about-2.jpg" class="service-img overlay-link" title="image title"><i class="fa fa-search-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@include('partials.contact')
</div>
@endsection