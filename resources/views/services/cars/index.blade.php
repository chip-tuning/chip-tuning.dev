@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Automobili')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-1 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Automobili</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Chip</strong> Tuning</h2>
					<p>Chip Tuning podrazmeva povećanje snage automobila promenom parametara u motornom računaru (ECU). Pored povećanja snage povećava se i obrtni momenat, dobija se bolji odziv na gas. Potrošnja se kod automobila smanjuje oko 1l na 100 km.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Automobili</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Kada je u pitanju Remap automobila određeni parametri se menjaju kako bi se dobila efikasnost, a samim tim i snaga i ekonomičnost. Razlika između generacija ECU-a je zbog tehnološko-tehničkih promena i u veličini memorije koja se remapira. </p>
							<p>Veličina memorije se možemo reći duplira iz generaciju u generaciju. Postoji mnogo više parametara za kontrolu rada motora koje treba promeniti i prilagoditi, pa samim tim remap novijih ECU-a postaje komlikovaniji, ali i tuneru daje više mogućnosti za fina podešavanja automobila naročito kod EcoTuning gde je akcenat stavljen na smanjenje potrošnje goriva.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Bolji odziv na gas</li>
								<li><i class="fa fa-check-square-o"></i> Povećanje snage</li>
								<li><i class="fa fa-check-square-o"></i> Povećanje obrtnog momenta</li>
								<li><i class="fa fa-check-square-o"></i> Smanjenje potrošnje</li>
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