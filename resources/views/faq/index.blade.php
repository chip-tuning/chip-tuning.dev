@extends('layouts.app')

@section('title', 'Česta pitanja')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('scripts')
<!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
@endsection

@section('content')
<div id="faq">
	@component('components.breadcrumbs')
	    <li class="active">Česta pitanja</li>
	@endcomponent
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h1 class="page-title">Često postavljana pitanja</h1>
					<div class="separator-2"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ut quisquam ab harum hic enim quibusdam aut quasi recusandae temporibus quo voluptatibus, dolorem consectetur ipsam facere ipsa. Commodi sunt, inventore!</p>
					<div class="panel-group collapse-style-2" id="faq-accordion">
						@foreach($faqs as $key => $faq)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="{{ $key == 0 ? '' : 'collapsed' }}" data-toggle="collapse" data-parent="#faq-accordion" href="#ans-{{ $faq->id }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}">
											<i class="fa fa-question-circle pr-10"></i>{{ $faq->question }}
										</a>
									</h4>
								</div>
								<div id="ans-{{ $faq->id }}" class="panel-collapse collapse {{ $key == 0 ? 'in' : '' }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}">
									<div class="panel-body">
										{{ $faq->answer }}
									</div>
								</div>
							</div>
						@endforeach

					</div>
					{{ $faqs->links('sections.pagination') }}
				</div>
				<!-- sidebar start -->
				<!-- ================ -->
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
									<label for="name">Ime i prezime</label>
									<input id="name" class="form-control" name="name" type="text" placeholder="Unesite vaše ime i prezime">
									<i class="fa fa-user form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="email">Email adresa</label>
									<input id="email" class="form-control" name="email" type="email" placeholder="Unesite vašu email adresu">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<div class="form-group has-feedback">
									<label for="question">Pitanje</label>
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