@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Hot Start Fix')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-10 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Hot Start Fix</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Hot Start</strong> Fix</h2>
					<p>Hot Start ili Topli start je veoma čest problem kod VAG (Audi, Seat, VW, Škoda) grupacije. Problem je lako uočljiv, kad je automobil zagrejan drugo vergla i teško pali a u nekim slučajevima neće da upali uopšte.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Hot Start</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Problem Toplog Starta je čisto softverske prirode. Mi ga rešavamo brzo i jednostavno promenom parametara u mapi motornog računara. Takođe napominjemo da se ovom metodom problem trajno rešava.</p>
							<p>Često se dešava da se obratite majstoru za rešenje ovog problema, na automobilu se izmenja gomila delova, potroši se dosta novca a problem ostane prisutan. Naš tim problem rešava bez otvaranja haube putem dijagnostičkog OBD porta za samo sat vremena.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> Trajno rešenje problema</li>
								<li><i class="fa fa-check-square-o"></i> Softversko rešenje</li>
								<li><i class="fa fa-check-square-o"></i> Otklanjanje problema dugog verglanja</li>
								<li><i class="fa fa-check-square-o"></i> Brzo i efikasno</li>
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