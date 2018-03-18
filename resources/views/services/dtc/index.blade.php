@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - DTC OFF')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-6 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">DTC OFF</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>DTC</strong> OFF</h2>
					<p>DTC (Diagnostic Trouble Code) – Dijagnostički kod greške. Nudimo uslugu trajnog brisanja grešaka iz motornog računara. NE BRIŠEMO JEDINO GREŠKE VEZANE ZA AIRBAG / ABS. </p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">DTC</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Reprogramiranjem motornog računara u vozilu moguće je trajno uklanjanje kodova grešaka. Ovo se obično radi kada su u pitanju greške koje ne utiču na funkcionisanje motora vozila.</p>
							<p>Ukoliko je u pitanju neki ozbiljniji kvar ne preporučujemo da se greška gasi trajno već da se reši problem. Ako imate bilo kakvih nedoumica oko grešaka na Vašem automobilu obratite se našem timu, a mi ćemo dijagnostičkim alatima poslednje generacije ustanoviti kvar.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Selektivno brisanje grešaka</li>
								<li><i class="fa fa-check-square-o"></i> Najsavremeniji dijagnostički uređaji</li>
								<li><i class="fa fa-check-square-o"></i> Brzo i efikasno</li>
								<li><i class="fa fa-check-square-o"></i> Tim sa dugogodišnjim iskustvom</li>
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