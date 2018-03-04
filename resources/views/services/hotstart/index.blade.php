@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Hot Start Fix')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	@component('components.breadcrumb')
		<li>Usluge</li>
		<li class="active">Hot Start Fix</li>
	@endcomponent
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					usluga
				</div>
			</div>
		</div>
	</section>
</div>
@endsection