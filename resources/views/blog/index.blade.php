@extends('layouts.app')

@section('title', 'Blog')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('facebook')
	<meta property="og:type" content="webiste">
	<meta property="og:title" content="{{ config('app.name', 'RPCT') }}">
	<meta property="og:description" content="Poboljšavamo performanse vašeg automobila, Chip Tuning, uklanjanje DPF filtera, gašenje EGR ventila, rešavanje problema sa toplim startom i selektivno brisanje grešaka.">
	<meta property="og:image" content="{{ asset('images/logo.jpg') }}">
@endsection

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
								<article class="blogpost">
									<div class="overlay-container">
										<img src="{{ asset('/storage/' . $article->picture) }}" alt="{{ $article->title }}">
										<a class="overlay-link" href="{{ route('blog.show', $article->slug) }}"><i class="fa fa-link"></i></a>
									</div>
									<header>
										<h2><a href="{{ route('blog.show', $article->slug) }}">{{ $article->title }}</a></h2>
										@component('components.articles.info')
											@slot('date', $article->created_at->diffForHumans())
											@slot('author', $article->author->name)
										@endcomponent
									</header>
									<div class="blogpost-content text-justify">{!! $article->summary !!}</div>
									<footer class="clearfix">
										@if ($article->tags->isNotEmpty())
											@component('components.articles.tags')
												@slot('tags', $article->tags)
											@endcomponent
										@endif
										<div class="link pull-right">
											<i class="fa fa-link"></i> <a href="{{ route('blog.show', $article->slug) }}">Pročitaj ceo članak</a>
										</div>
									</footer>
								</article>
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