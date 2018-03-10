@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Kamioni')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="services">
	<div class="banner border-clear services-bg-img-2 dark-translucent-bg">
		@component('components.breadcrumb')
			<li class="active">Usluge</li>
			<li class="active">Kamioni</li>
		@endcomponent		
		<div class="container">
			<div class="row">
				<div class="col-md-8 pv-20">
					<h2 class="title"><strong>Chip</strong> Tuning</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi perferendis magnam ea necessitatibus, officiis voluptas odit! Aperiam omnis, cupiditate laudantium velit nostrum, exercitationem accusamus, possimus soluta illo deserunt tempora qui.</p>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-12">
					<h1 class="title">Kamioni</h1>
					<div class="separator-2"></div>
					<div class="row">
						<div class="col-md-6">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus illo vero cupiditate, sed enim voluptatibus provident consectetur. Quo dolor sunt nostrum, eligendi illo accusamus odit, ipsam excepturi voluptatem nulla minus.</p>
							<p>Blanditiis aspernatur, non quasi, maxime corporis officiis quia. Cupiditate, voluptatibus ducimus, natus, labore mollitia dolorem incidunt voluptatum, delectus eius fugit porro placeat animi voluptatem autem hic eligendi sint. Amet pariatur odit repudiandae sunt. Rem ipsum dolor sit amet, consectetur adipisicing elit. Sunt asperiores a.</p>
							<ul class="list-icons">
								<li><i class="fa fa-check-square-o"></i> We are here to support you</li>
								<li><i class="fa fa-check-square-o"></i> Free updates</li>
								<li><i class="fa fa-check-square-o"></i> Unlimited options and variations</li>
								<li><i class="fa fa-check-square-o"></i> ipsam asperiores fugiat quo</li>
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