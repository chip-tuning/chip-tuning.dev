@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - GPS Pracenje')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-11 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">GPS Praćenje</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>GPS</strong> Praćenje</h2>
					<p>U mogućnosti smo da Vam ponudimo GPS praćenje za sve tipove vozila. Praćenje je moguće vršiti u zemilji i inostranstvu. Instalacija ugređaja je brza i jednostavna.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">GPS Praćenje</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>GPS praćenje vozila u zemlji i inostranstvu. Pored standardnog praćenja u ponudi imamo sonde za rezervoar, mogućnost čekiranja vozača i još mnogo toga.</p>
							<p>Aplikacija za GPS praćenje je kompatibilna sa svim mobilnim uređajima kao i sa PC računarima. Moguće je pratiti gomilu parametara vezanih za samo vozilo kao što su: potrošnja, stil vožnje, da li je vozilo u radu ili ne itd. Aplikacija takođe poseduje dobar sistem za izveštavanje.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Pozicija vozila</li>
								<li><i class="fa fa-check-square-o"></i> Brzina kretanja</li>
								<li><i class="fa fa-check-square-o"></i> Istorija kretanja</li>
								<li><i class="fa fa-check-square-o"></i> Definisanje alarma</li>
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