@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Speed Limit OFF')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-9 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Speed Limit OFF</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Speed Limit</strong> OFF</h2>
					<p>U zavisnosti od namene vozila ono može imati ograničenje brzine tzv. Speed Limit. To ograničenje moguće je promeniti reprogramiranjem ECU vozila.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Speed Limit</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Ograničenje krajnje brzine postavlja se iz više razloga, proizvođači vozila time štite motor u vozilu. Pojedine firme postavljaju Speed limit kako bi kontrolisale radnike i izbegle plaćanje kazni, a često se i vozačima početnicima limitira max brzina.</p>
							<p>Speed limit ili ograničenje brzine moguće je promeniti remapiranjem (reprogram motornog računara). Remapiranje se vrši profesionalnim originalnim alatima poslednje generacije.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Brzo i efikasno</li>
								<li><i class="fa fa-check-square-o"></i> Najsavremeniji software</li>
								<li><i class="fa fa-check-square-o"></i> Podrška za sve brendove vozila</li>
								<li><i class="fa fa-check-square-o"></i> Originalni interfejsi</li>
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