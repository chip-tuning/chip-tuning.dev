@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - EGR OFF')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-5 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">EGR OFF</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>EGR</strong> OFF</h2>
					<p>Imamo veoma napredno i kvalitetno rešenje za uklanjanje EGR ventila. Naše softversko rešenje za isključivanje EGR ventil je jednostavna i efikasna metoda koja čak poboljšava efikasnost vašeg motora a takođe je i trajno rešenje.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Uklanjanje EGR ventila</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Reprogramiranje ECU u cilju uklanjanja EGR ventila rezultira nižim temperaturama motora (ne dolazi do prekomernog zagrevanja i stalnog uključivanja ventilatora), poboljšani odziv na gas (drastično se smanjuje ili skroz nestaje turbo lag), produžava vek motora tako što smanjuje nagomilavanje larbonskih naslaga na istom. </p>
							<p>Pored softverskog gašenja radimo i fizičko blokiranje EGR ventila. Glavni simptom kod poremećene funkcije EGR ventila je nepravilan rad motora.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Bolji odziv na gas</li>
								<li><i class="fa fa-check-square-o"></i> Nema pregrevanja motora</li>
								<li><i class="fa fa-check-square-o"></i> Gubitak Turbo Laga</li>
								<li><i class="fa fa-check-square-o"></i> Trajno rešenje problema</li>
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