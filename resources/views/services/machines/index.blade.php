@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Poljoprivredne mašine')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-3 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Poljoprivredne mašine</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Chip</strong> Tuning</h2>
					<p>Chip Tuning poljoprivrednih mašina je veoma popularan u poslednje vreme, kod nas tek treba da zaživi ali mi idemo u korak sa vremenom. Nudimo kompletna rešenja kada je u pitanju Chip Tuning traktora novije generacije, kao i ostalih poljoprivrednih mašina. </p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Poljoprivredne mašine</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Kao glavne prednosti Chip Tuninga traktora i drugih poljoprivrednih mašina izdvajamo drastično povećanje snage i osetno smanjenje potrošnje. Ako uzmemo u obzir smanjenje potrošnje na godišnjem nivou se postiže značajna ušteda.</p>
							<p>Pored Chip Tuninga nudimo i uslugu softverskog gašenja Adblue sistema bez ugradnje bilo kakvih „varalica“. AdBlue je sistem kojim su opremljena novija vozila u cilju smanjenja emisije azotnih oksida(NOX).  Održavanje ovog sistema je veoma skupo, pa se njegovim uklanjanjem postiže velika novčana ušteda.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Povećanje snage</li>
								<li><i class="fa fa-check-square-o"></i> Smanjenje potrošnje</li>
								<li><i class="fa fa-check-square-o"></i> Izlazak na teren</li>
								<li><i class="fa fa-check-square-o"></i> Brzo i profesionalno</li>
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