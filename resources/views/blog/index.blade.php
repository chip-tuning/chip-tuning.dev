@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Blog')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo-600x304.jpg'))

@section('content')
<div id="blog">
	<div class="banner dark-translucent-bg background-img-3" style="background-position: 50% 30%;">
		@component('components.breadcrumb')
			<li class="active">Blog</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h1 class="page-title text-center">Blog</h1>
					<div class="separator"></div>
					<p class="lead text-center">It would be great to hear from you! Just drop us a line and ask for anything with which you think we could be helpful. We are looking forward to hearing from you!</p>
					<ul class="list-inline mb-20 text-center">
						<li><i class="text-default fa fa-map-marker pr-5"></i>{{ config('app.details.address', 'Bore Tirića 60, 15000 Šabac') }}</li>
						<li><i class="text-default fa fa-phone pl-10 pr-5"></i>{{ config('app.details.phone', '+381 65 55 666 14') }}</li>
						<li><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>{{ config('app.details.email', 'office@chip-tuning.rs') }}</li>
					</ul>
					<div class="separator"></div>
					<ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
						@include('partials.socials')
					</ul>
				</div>
			</div>
		</div>
	</div>
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h3 class="title">Najnoviji članci</h3>
					<div class="separator-2"></div>
						@if ($articles->isNotEmpty())
							@foreach ($articles as $article)
								@component('components.articles', ['date' => $article->published_at->diffForHumans(), 'author' => $article->author->name])
									@slot('picture', $article->picture)
									@slot('title', $article->title)
									@slot('summary', $article->summary)
									@slot('slug', $article->slug)
								@endcomponent
							@endforeach
							{{ $articles->links('partials.pagination') }}
						@else
							<p>Trenutno ne postoji nijedan članak</p>
						@endif
				</div>
				@include('partials.sidebar')
			</div>
		</div>
	</section>
	@include('partials.subscribe')
</div>
@endsection