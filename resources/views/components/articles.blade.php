<article class="blogpost">
	<div class="overlay-container">
		<img src="{{ asset('/storage/' . $picture) }}" alt="{{ $title }}">
		<a class="overlay-link" href="{{ route('blog.show', $slug) }}"><i class="fa fa-link"></i></a>
	</div>
	<header>
		<h2><a href="{{ route('blog.show', $slug) }}">{{ $title }}</a></h2>
		<div class="post-info">
			<span class="post-date"><i class="fa fa-calendar"></i> Objavljeno {{ $date }}</span>
			<span class="submitted"><i class="fa fa-user"></i> Autor: {{ $author }}</span>
		</div>
	</header>
	<div class="blogpost-content text-justify">{!! $summary !!}</div>
	<footer class="clearfix">
		@if ($tags->isNotEmpty())
			<div class="tags pull-left">
				<i class="fa fa-tags"></i> 
				@foreach($tags as $tag)
					<a href="{{ route('blog.index') }}?tag={{ $tag->name }}">#{{ $tag->name }}</a>@if (!$loop->last),@endif
				@endforeach
			</div>
		@endif
		<div class="link pull-right">
			<i class="fa fa-link"></i> <a href="{{ route('blog.show', $slug) }}">Pročitaj ceo članak</a>
		</div>
	</footer>
</article>