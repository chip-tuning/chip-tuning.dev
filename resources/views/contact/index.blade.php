@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Kontakt')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?v=3&amp;key=AIzaSyCxZ57FI-nzDlM7PmBJUgEzEe_ARclGoR4"></script>
@endsection

@section('content')
<div id="contact">
	<div class="banner dark-translucent-bg background-img-4" style="background-position: 50% 30%;">
		@component('components.breadcrumb')
		    <li class="active">Kontakt</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-25">
					<h1 class="page-title text-center">Kontakt</h1>
					<div class="separator"></div>
					<p class="lead text-center">Zanima Vas koliko se povećava  snaga a smanjuje potrošnja Vašeg vozila? Nemojte se ustručavati da nas kontaktirate.</p>
					<ul class="list-inline mb-20 text-center">
						<li><i class="text-default fa fa-map-marker pr-5"></i>{{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</li>
						<li><i class="text-default fa fa-phone pl-10 pr-5"></i>{{ config('app.details.phone', '+381 65 55 666 14') }}</li>
						<li><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>{{ config('app.details.email', 'office@chip-tuning.rs') }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h3 class="title">Pošaljite nam poruku</h3>
					<div class="separator-2"></div>
					<p>Ukoliko imate bilo kakvih pitanja u vezi naših usluga, pošaljite nam poruku a mi ćemo odgovoriti u najkraćem mogućem roku!</p>
					<div class="contact-form">
						<form id="contact-form" class="margin-clear" role="form">
							<div class="form-group has-feedback">
								<label for="name">Ime i prezime*</label>
								<input id="name" class="form-control" name="name" type="text" placeholder="Unesite vaše ime i prezime">
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="email">Email*</label>
								<input id="email" class="form-control" name="email" type="email" placeholder="Unesite vašu email adresu">
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="subject">Naslov poruke*</label>
								<input id="subject" class="form-control" name="subject" type="text" placeholder="Unesite naslov vaše poruke">
								<i class="fa fa-navicon form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="message">Poruka*</label>
								<textarea id="message" class="form-control" name="message" rows="6" placeholder="Unesite vašu poruku"></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
							<button type="submit" class="btn btn-default">Pošalji</button>
						</form>
					</div>
				</div>
				<aside class="col-md-4 col-lg-3 col-lg-offset-1">
					<div class="sidebar">
						<div class="block clearfix">
							<h3 class="title">Pronađite nas</h3>
							<div class="separator-2"></div>
							<ul class="list">
								<li><i class="fa fa-map-marker pr-10 text-default"></i>{{ config('app.name', 'RPCT') }}<br><span class="pl-20">{{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</span></li>
								<li><i class="fa fa-phone pr-10 text-default"></i><abbr title="Phone">M:</abbr> {{ config('app.details.phone', '+381 65 55 666 14') }}</li>
								<li><i class="fa fa-phone pr-10 text-default"></i><abbr title="Phone">M:</abbr> {{ config('app.details.phone_alt', '+381 60 02 262 17') }}</li>
								<li><i class="fa fa-envelope pr-10 text-default"></i><a href="mailto:{{ config('app.details.email', 'office@chip-tuning.rs') }}">{{ config('app.details.email', 'office@chip-tuning.rs') }}</a></li>
							</ul>
						</div>

						<div class="block clearfix">
							<h3 class="title">Pratite nas</h3>
							<div class="separator-2"></div>
							<ul class="social-links circle margin-clear clearfix animated-effect-1">
								@include('partials.socials')
							</ul>
						</div>
					</div>
				</aside>
			</div>
		</div>
	</section>
	<section id="map-canvas"></section>
</div>
@endsection