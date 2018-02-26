@extends('layouts.app')

@section('title', $article->title . ' - ' . config('app.name', 'RPCT'))
@section('description', str_limit(strip_tags($article->summary), 317))
@section('facebook_type', 'article')
@section('facebook_image')
<meta property="og:image" content="{{ asset('/storage/' . $article->picture) }}">
@endsection
@section('twitter_card', 'summary')
@section('twitter_image', asset('/storage/' . $article->picture))

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