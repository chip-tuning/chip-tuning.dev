@extends('layouts.app')

@section('title', 'Uslovi koriscenja')
@section('description', 'Uslovi koriscenja...')

@section('facebook')
	<meta property="og:type" content="webiste">
	<meta property="og:title" content="{{ config('app.name', 'RPCT') }}">
	<meta property="og:description" content="Poboljšavamo performanse vašeg automobila, Chip Tuning, uklanjanje DPF filtera, gašenje EGR ventila, rešavanje problema sa toplim startom i selektivno brisanje grešaka.">
	<meta property="og:image" content="{{ asset('images/logo.jpg') }}">
@endsection

@section('content')
<div id="terms">
	@component('components.breadcrumb')
		    <li class="active">Uslovi korišćenja</li>
	@endcomponent
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="page-title">Uslovi korišćenja</h1>
					<div class="separator-2"></div>
					<p class="lead text-justify">Hvala što ste posetili naš internet sajt. Vaš pristup, kao i korišćenje ovog našeg internet sajta (u daljem tekstu: internet sajt) podleže ovim uslovima korišćenja i važećim zakonskim propisima koji uređuju ovu oblast. Pristupom i korišćenjem internet sajta, prihvatate bez ograničenja, ove uslove korišćenja. Ukoliko ne prihvatate ove uslove korišćenja bez ograničenja, molimo Vas da napustite internet sajt.</p>
					<h2 class="space-top">Vlasništvo sadržaja</h2>
					<div class="separator-2"></div>
					<p class="text-justify">Internet sajt i svi tekstovi, logotipi, grafika, fotografije, slike i ostali materijal na ovom internet sajtu (u daljem tekstu: Sadržaj), jesu autorsko pravo ili vlasništvo Racing Performance Chip Tuning ili su na internet sajt postavljeni uz dozvolu vlasnika ili ovlašćenog nosioca prava, pored pisanog odobrenja prilikom postavljanja sadržaja sa našeg sajta obavezno je navesti <strong>kompletan link</strong> do tog teksta i navesti da je autor: <mark>Racing Performance Chip Tuning</mark>. Korišćenje Sadržaja, osim na način opisan u ovim uslovima korišćenja, bez pisane dozvole vlasnika Sadržaja je <u>strogo zabranjeno</u>. Racing Performance Chip Tuning  će zaštiti svoja autorska prava, svoja prava intelektualne svojine i ostala srodna prava, kao i druga prava, u najvećoj meri dozvoljenoj zakonom, uključujući i krivično gonjenje.</p>
					<h2 class="space-top">Vaša upotreba internet sajta</h2>
					<div class="separator-2"></div>
					<p class="text-justify">Sadržaj internet sajta može sadržati netačne podatke ili štamparske greške. Promene na internet sajtu se mogu napraviti periodično u bilo kom trenutku i bez obaveštenja, međutim, Racing performance Chip Tuning se ne obavezuje da redovno ažurira informacije sadržane na ovom internet sajtu. Takođe, Racing performance Chip Tuning <u>ne garantuje</u> da će internet sajt funkcionisati bez prekida ili grešaka, da će nedostaci biti blagovremeno ispravljani ili da je internet sajt kompatibilan sa vašim hardverom ili softverom. Informacije date na ovom internet sajtu ne treba tumačiti kao savete za donošenje odluka bilo koje vrste. Treba da se posavetujete sa odgovarajućim stručnjakom ako Vam je potreban specifičan savet prilagođen Vašoj situaciji.</p>
					<h2 class="space-top">Izuzeće od odgovornosti</h2>
					<div class="separator-2"></div>
					<p class="text-justify">Internet sajt koristite na sopstveni rizik. Racing performance Chip Tuning <u>nije odgovoran</u> za materijalnu ili nematerijalnu štetu, direktnu ili indirektnu koja nastane iz korišćenja ili je u nekoj vezi sa korišćenjem internet sajta ili njegovog Sadržaja.</p>
					<h2 class="space-top">Linkovi sa internet sajtovima trećih lica</h2>
					<div class="separator-2"></div>
					<p class="text-justify">Internet sajt može sadržati linkove drugih internet sajtova čiji vlasnik ili korisnik nije Racing Performance Chip tuning. Takvi linkovi su obezbeđeni isključivo da bi Vama pružili što više informacija. Racing performance Chip Tuning ne kontroliše i <u>nije odgovoran</u> za rad, sadržaj, politiku privatnosti ili bezbednost ovih sajtova. Racing performance Chip Tuning ne kontroliše sadržaj ili proizvode ili usluge dostupne na ovim internet sajtovima. Ako uspostavite vezu sa takvim internet sajtovima preko linka na našem internet sajtu, to činite na sopstveni rizik i bez saglasnosti Racing Performance Chip Tuning.</p>
					<h2 class="space-top">Izmena uslova korišćenja</h2>
					<div class="separator-2"></div>
					<p class="text-justify">Racing Performance Chip Tuning može u svakom trenutku <u>izmeniti</u> ove uslove korišćenja tako što će ažurirati ovaj tekst. Vi ćete automatski biti obavezani novim uslovima korišćenja sadržanim u izmenama, te bi iz tog razloga trebalo da periodično posetite ovu stranicu radi upoznavanja sa trenutno važećim uslovima korišćenja.</p>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection