@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Swirl Flaps OFF')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-8 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Swirl Flaps OFF</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Swirl Flaps</strong> OFF</h2>
					<p>Swirl/Flaps – Klapne na usisnoj grani su prisutne kod velikog broja vozila novije generacije. Kada su ispravne one služe da regulišu odnos goriva i vazduha u odnosu na broj obrtaja i druge parametre. Ukoliko klapne ne funkcionišu kako treba to prouzrokuje nepravilan rad motora.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Swirl Flaps</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Klapne na usisu ili tzv. Flapsevi spadaju u veoma osetljive komponente I mogu da prouzrokuju velike probleme u samom radu motora. Često se dešava da usled dotrajalosti pojedini delovi otpadnu I prouzrokuju veliku štetu. </p>
							<p>Kako bi se to izbeglo mi Vam nudimo profesionalno I trajno rešenje. Nakon gašenja klapni automobil funkcioniše savršeno i nema rizika od oštećenja od vitalnih komponenti vozila.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Softversko uklanjanje</li>
								<li><i class="fa fa-check-square-o"></i> Trajno rešenje</li>
								<li><i class="fa fa-check-square-o"></i> Uklanjanje rizika od oštećenja vozila</li>
								<li><i class="fa fa-check-square-o"></i> Fizičko isključivanje</li>
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