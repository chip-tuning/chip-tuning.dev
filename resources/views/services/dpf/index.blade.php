@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - DPF OFF')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-4 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">DPF OFF</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>DPF</strong> OFF</h2>
					<p>Uklanjanje DPF filtera Vam pruža mogućnost da rešite problem sa DPF-om bez ikakvih posledica na rad i performanse motora. Ukoliko je DPF filter zapušen preporučujemo da se što pre ukloni kako ne bi prouzrokovao veće probleme.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Uklanjanje DPF filtera</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Uklanjanje DPF filtera se vrši prvo softverski, prepravkom parametara u “mapi” vašeg auta tako da ECU neće primetiti nedostatak DPF filtera ili lose parameter senzora i „odvesti“ auto u takozvani servisni ili „safe mod“.</p>
							<p>Neki od benefita uklanjanja DPF-a su: smanjenje potrošnje goriva, vozilo dobija 2-5 KS, motor ne odlazi u tzv. „safe mode“ režim pri čemu nema potrebe za skupom zamenom DPF-a jer je problem rešen trajno, nema rizika od oštećenja vitalnih komponenti automobila.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Smanjenje potrošnje</li>
								<li><i class="fa fa-check-square-o"></i> Bolji odziv na gas</li>
								<li><i class="fa fa-check-square-o"></i> Povećanje snage 2-5KS</li>
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