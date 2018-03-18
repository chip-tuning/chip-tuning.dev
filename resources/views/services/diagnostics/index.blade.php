@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Dijagnostika')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-12 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Dijagnostika</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Dijagnostika</strong></h2>
					<p>Svako vozilo se pre Chip Tuninga detaljno proverava dijagnostički. Posedujemo veliki broj dijagnostičkih uređaja koji nam omogućavaju da radimo sve poznate brendove.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Dijagnostika</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Kako su se automobili razvijali vremenom dijagnostika je postala neizostavni faktor ukoliko se bavite bilo kakvim popravkama na automobilu. Moderna vozila poseduju gomilu modula u kojima beleže razne greške čijim čitanjem se lakše dolazi do kvara na samom vozilu.</p>
							<p>Sem našim klijentima, dijagnostiku radimo uslužno za veliki broj auto servisa i majstorskih radionica koje nisu dovoljno opremljene u tom pogledu. Ukoliko Vam sija neka greška na tabli a niste sigurni šta je u pitanju, kontaktirajte nas, naš tim će brzo i efikasno dijagnostikovati problem.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Dijagnostika za sva vozila</li>
								<li><i class="fa fa-check-square-o"></i> Praćenje live parametara</li>
								<li><i class="fa fa-check-square-o"></i> Brisanje grešaka</li>
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