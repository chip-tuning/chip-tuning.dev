@extends('layouts.app')

@section('title', config('app.name', 'RPCT') . ' - Blog')
@section('description', 'Opis stranice, iskoristiti rec koja je u title-u.')
@section('facebook_type', 'website')
@section('twitter_card', 'summary_large_image')
@section('twitter_image', asset('images/logo.jpg'))

@section('content')
<div id="blog">
	<div class="banner dark-translucent-bg background-img-2">
		@component('components.breadcrumb')
			<li class="active">Blog</li>
		@endcomponent
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-30">
					<h1 class="page-title text-center">Blog</h1>
					<div class="separator"></div>
					<p class="lead text-center">Osim aktuelnih tema vezanih za naše primarne delatnosti posvetićemo se i još nekim čestim kvarovima vozila. Uz sve to, ovde se možete upoznati i sa nekim našim radovima na pojedinim vozilima.</p>
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