@extends('layouts.app')

@section('title', 'Blog')
@section('description', 'Chip tuning, profesionalno uklanjanje DPF filtera i gašenje EGR ventila, rešenje problema sa toplim startom, brisanje grešaka, Sabac, Srbija i okolina.')

@section('facebook')
	<meta property="og:type" content="article">
	<meta property="og:title" content="When Great Minds Don’t Think Alike">
	<meta property="og:description" content="How much does culture influence creative thinking?">
	<meta property="og:image" content="http://static01.nyt.com/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg">
@endsection

@section('twitter')
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="{{ "@".config('app.socials.twitter', '') }}">
	<meta name="twitter:title" content="Small Island Developing States Photo Submission">
	<meta name="twitter:description" content="View the album on Flickr.">
	<meta name="twitter:image" content="https://farm6.staticflickr.com/5510/14338202952_93595258ff_z.jpg">
@endsection

@section('content')
<div id="blog">
	@component('components.breadcrumb')
		<li><a class="link-dark" href="{{ route('blog.index') }}">Blog</a></li>
		<li class="active">{{ $article->title }}</li>
	@endcomponent
	<section class="main-container">
		<div class="container">
			<div class="row">
				<div class="main col-md-8">
					<h1 class="page-title">{{ $article->title }}</h1>
					<article class="blogpost full">
						<header>
							@component('components.articles.info')
								@slot('date', $article->created_at->diffForHumans())
								@slot('author', $article->author->name)
							@endcomponent
						</header>
						<div class="blogpost-content">
							<div class="overlay-container">
								<img src="{{ asset('/storage/' . $article->picture) }}" alt="{{ $article->title }}">
								<a class="overlay-link popup-img" href="{{ asset('/storage/' . $article->picture) }}"><i class="fa fa-search-plus"></i></a>
							</div>
							<div class="summary"> 	
								{!! $article->summary !!}
							</div>
							{!! $article->content !!}						
						</div>
						<footer class="clearfix">
							@if ($article->tags->isNotEmpty())
								@component('components.articles.tags')
									@slot('tags', $article->tags)
								@endcomponent
							@endif
							@component('components.articles.share')
									@slot('text', 'Unesite vašu poruku ovde')
							@endcomponent
						</footer>
					</article>
				</div>
				@include('partials.sidebar')
			</div>
		</div>
	</section>
	@include('partials.subscribe')
</div>
@endsection