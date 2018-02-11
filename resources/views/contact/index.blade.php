@extends('layouts.app')

@section('title', 'Kontakt')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('scripts')
<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyCxZ57FI-nzDlM7PmBJUgEzEe_ARclGoR4"></script>
@endsection

@section('content')
<div id="contact">
	<div class="banner dark-translucent-bg background-img-3" style="background-position: 50% 30%;">
		@component('components.breadcrumbs')
		    <li class="active">Kontakt</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h1 class="page-title text-center">Kontakt</h1>
					<div class="separator"></div>
					<p class="lead text-center">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
					<ul class="list-inline mb-20 text-center">
						<li><i class="text-default fa fa-map-marker pr-5"></i>{{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</li>
						<li><i class="text-default fa fa-phone pl-10 pr-5"></i>{{ config('app.details.phone', '+381 65 55 666 14') }}</li>
						<li><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>{{ config('app.details.email', 'office@chip-tuning.rs') }}</li>
					</ul>
					<div class="separator"></div>
					<ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
						@include('sections.socials')
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
					<p>It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
					<div class="contact-form">
						<form id="contact-form" class="margin-clear" role="form">
							<div class="form-group has-feedback">
								<label for="name">Ime i prezime*</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Unesite vaše ime i prezime">
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="email">Email*</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="Unesite vašu email adresu">
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="subject">Naslov poruke*</label>
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Unesite naslov vaše poruke">
								<i class="fa fa-navicon form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="message">Poruka*</label>
								<textarea class="form-control" rows="6" id="message" name="message" placeholder="Unesite vašu poruku"></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
							<div class="g-recaptcha" data-sitekey="your_site_key"></div>
							<div class="alert alert-success hidden" id="MessageSent">
								Vaša poruka je poslata, očekujte uskoro naš odgovor.
							</div>
							<div class="alert alert-danger hidden" id="MessageNotSent">
								Ups! Nešto je pošlo naopako, molimo verifikujte da niste bot ili osvežite stranicu i probajte opet.
							</div>
							<input type="submit" value="Pošalji" class="submit-button btn btn-default">
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
								<li><i class="fa fa-envelope pr-10 text-default"></i><a href="{{ config('app.details.email', 'office@chip-tuning.rs') }}">{{ config('app.details.email', 'office@chip-tuning.rs') }}</a></li>
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