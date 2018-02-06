@extends('layouts.app')

@section('title', 'Nasi radovi')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('content')
<div id="gallery">
	<div class="banner pv-45 dark-translucent-bg background-img-2" style="background-position: 50% 30%;">
		@component('components.breadcrumb', ['parent' => 'Početna', 'parent_url' => route('home.index')])
		    Naši radovi
		@endcomponent
		<div class="container">
		<div class="row">
		<div class="col-md-8 text-center col-md-offset-2 pv-30">
		<h1 class="object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Naši radovi</h1>
		<div class="separator object-non-visible animated object-visible zoomIn" data-animation-effect="zoomIn" data-effect-delay="100"></div>
		<p class="large text-center object-non-visible animated object-visible zoomIn" data-animation-effect="zoomIn" data-effect-delay="200">Atque ducimus velit, earum quidem, iusto dolorem. Ex ipsam totam quas blanditiis, pariatur maxime ipsa iste, doloremque neque doloribus, error. Corrupti, tenetur.</p>
		<p class="text-center"><a href="#" class="btn btn-lg btn-gray-transparent object-non-visible animated object-visible zoomIn" data-animation-effect="zoomIn" data-effect-delay="300"><i class="fa fa-instagram fa-fw"></i> Instagram</a></p>
		</div>
		</div>
		</div>
	</div>
</div>
@endsection