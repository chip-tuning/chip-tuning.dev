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
		<div class="pull-right">
			<a href="{{ route('blog.show', $slug) }}" class="btn btn-animated btn-default btn-sm">Pročitaj <i class="fa fa-arrow-right"></i></a>
		</div>
	</footer>
</article>