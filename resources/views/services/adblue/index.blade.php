@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - AD Blue OFF')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-7 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Ad Blue OFF</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Ad Blue</strong> OFF</h2>
					<p>Softversko gašenje AdBlue sistema za sva vozila. AdBlue je sistem kojim su opremljena novija vozila u cilju smanjenja emisije azotnih oksida (NOx). Održavanje ovog sistema je jako skupo zato što zahteva specijalnu tečnost koja se ubrizgava u izduvni sistem. </p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">AD Blue</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Kako bi ste smanjili troškove mi Vam nudimo mogućnost trajnog uklanjanja AD Blue sistema, čime prestaje obaveza kontrole I dolivanja AD Blue tečnosti. A samim tim I troškovi održavanja se smanjuju. Uklanjanje se vrši softverski bez tzv "varalice" tj dodatnih modula.</p>
							<p>Moramo da napomenemo da tzv "Varalice" za ADblue kod vozila novije generacije prave gomilu problema. Mi Vam nudimo profesionalno rešenje remapiranjem računara koje nema nikakvih štetnih posledica po Vaše vozilo.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Softversko gašenje</li>
								<li><i class="fa fa-check-square-o"></i> Ne ugrađuju se dodatni moduli</li>
								<li><i class="fa fa-check-square-o"></i> Trajno rešenje problema</li>
								<li><i class="fa fa-check-square-o"></i> Značajna ušteda</li>
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