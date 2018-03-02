@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Cesto postavljana pitanja')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('scripts')
<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
@endsection

@section('content')
<div id="faq">
	@component('components.breadcrumb')
	    <li class="active">Česta pitanja</li>
	@endcomponent
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h1 class="page-title">Često postavljana pitanja</h1>
					<div class="separator-2"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ut quisquam ab harum hic enim quibusdam aut quasi recusandae temporibus quo voluptatibus, dolorem consectetur ipsam facere ipsa. Commodi sunt, inventore!</p>
					@if ($faqs->isNotEmpty())
						<div class="panel-group collapse-style-2" id="faq-accordion">
							@foreach($faqs as $key => $faq)
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a @if (!$loop->first) class="collapsed" @endif data-toggle="collapse" data-parent="#faq-accordion" href="#ans-{{ $faq->id }}" @if ($loop->first) aria-expanded="true" @else aria-expanded="false" @endif>
												<i class="fa fa-question-circle pr-10"></i>{{ $faq->question }}
											</a>
										</h4>
									</div>
									<div id="ans-{{ $faq->id }}" @if ($loop->first) class="panel-collapse collapse in" aria-expanded="true" @else class="panel-collapse collapse" aria-expanded="false" @endif>
										<div class="panel-body">
											{{ $faq->answer }}
										</div>
									</div>
								</div>
							@endforeach
						</div>
						{{ $faqs->links('partials.pagination') }}
					@endif
				</div>
				<aside class="col-md-4 col-lg-3 col-lg-offset-1">
					<div class="sidebar">
						<div class="block clearfix">
							<h3 class="title">Niste pronašli odgovor?</h3>
							<div class="separator-2"></div>
							<p>Ukoliko niste pronašli odgovor na željeno pitanje, slobodno nam postavite pitanje pomoću sekcije "Pitajte nas" ili nas kontaktirajte na nekoj od socijalnih mreža.</p>
						</div>	
						<div class="block clearfix">
							<h3 class="title">Pitajte nas</h3>
							<div class="separator-2"></div>
							<form role="form" id="faq-form" class="margin-clear">
								<div class="form-group has-feedback">
									<label for="name">Ime i prezime*</label>
									<input id="name" class="form-control" name="name" type="text" placeholder="Unesite vaše ime i prezime">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="email">Email adresa*</label>
									<input id="email" class="form-control" name="email" type="email" placeholder="Unesite vašu email adresu">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="question">Pitanje*</label>
									<textarea id="question" class="form-control" name="question" rows="4" placeholder="Unesite vaše pitanje"></textarea>
									<i class="fa fa-pencil form-control-feedback"></i>
								</div>
								<div class="g-recaptcha" data-sitekey="your_site_key"></div>
								<div class="alert alert-success hidden" id="MessageSent">
									Vaše pitanje je poslato. Očekujte uskoro naš odgovor.
								</div>
								<div class="alert alert-danger hidden" id="MessageNotSent">
									Upsss! Nešto je pošlo naopako, molimo probajte opet.
								</div>
								<input class="submit-button btn btn-default" type="submit" value="Pošalji">
							</form>
						</div>														
					</div>
				</aside>
			</div>
		</div>
	</section>
</div>
@endsection