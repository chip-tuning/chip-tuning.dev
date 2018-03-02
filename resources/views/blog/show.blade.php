@extends('layouts.app')

@section('title', $article->title . ' - ' . config('app.name', 'RPCT'))
@section('description', words(strip_tags(str_replace('><', '> <', $article->summary)), 40, $end = ''))
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
							<div class="post-info">
								<span class="post-date"><i class="fa fa-calendar"></i> Objavljeno {{ $article->published_at->diffForHumans() }}</span>
								<span class="submitted"><i class="fa fa-user"></i> Autor: {{ $article->author->name }}</span>
							</div>
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
								<div class="tags pull-left">
									<i class="fa fa-tags"></i> 
									@foreach($article->tags as $tag)
										<a href="{{ route('blog.index') }}?tag={{ $tag->name }}">#{{ $tag->name }}</a>@if (!$loop->last),@endif
									@endforeach
								</div>
							@endif
							<div class="link pull-right">
								<ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
									<li class="facebook">
										<a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" onclick="window.open(this.href, '', 'scrollbars=1,resizable=1,width=560,height=350'); return false;">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li class="googleplus">
										<a target="_blank" href="https://plus.google.com/share?url={{ url()->current() }}" onclick="window.open(this.href,'','scrollbars=1,resizable=1,width=400,height=480');return false;">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li class="twitter">
										<a target="_blank" href="https://twitter.com/intent/tweet?text=Unesite vašu poruku ovde&amp;url={{ url()->current() }}" onclick="window.open(this.href,'','scrollbars=1,resizable=1,width=560,height=255');return false;">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
								</ul>								
							</div>
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