<aside class="col-md-4 col-lg-3 col-lg-offset-1">
	<div class="sidebar">
		<div class="block clearfix">
			<h3 class="title">Pretraga</h3>
			<div class="separator-2"></div>
			<form role="search">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Search">
					<i class="fa fa-search form-control-feedback"></i>
				</div>
			</form>
		</div>
		<div class="block clearfix">
			<h3 class="title">Popularni članci</h3>
			<div class="separator-2"></div>
			@if ($articles->isNotEmpty())
				@foreach($articles as $article)
					<div class="media margin-clear">
						<div class="media-body">
							<h6 class="media-heading"><a href="{{ route('blog.show', $article->slug) }}">{{ words($article->title, 6, "...") }}</a></h6>
							<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Objavljeno {{ $article->created_at->diffForHumans() }}</p>
						</div>
						 @if (!$loop->last)
						 <hr>
    					@endif
					</div>
				@endforeach									
			@else
				<p>Trenutno ne postoji nijedan članak</p>
			@endif
		</div>				
		<div class="block clearfix">
			<h3 class="title">Popularni tagovi</h3>
			<div class="separator-2"></div>
				@if ($tags->isNotEmpty())
					<div class="tags-cloud">
						@foreach ($tags as $tag)	
							<div class="tag">
								<a href="{{ route('blog.index') }}?tag={{ $tag }}">#{{ $tag }}</a>
							</div>
						@endforeach
					</div>
				@else
					<p>Trenutno ne postoji nijedan tag.</p>
				@endif	
		</div>
		<div class="block clearfix">
			<h3 class="title">Arhiva</h3>
			<div class="separator-2"></div>
				@if ($archives->isNotEmpty())
					<nav>
						<ul class="nav nav-pills nav-stacked list-style-icons">
							@foreach ($archives as $archive)	
								<li>
									<a href="{{ route('blog.index') }}?datum={{ strtolower(__($archive->month)) }}/{{ $archive->year }}">
										<i class="fa fa-caret-right pr-10"></i>{{ __($archive->month_name) }} {{ $archive->year }} ({{ $archive->published }})
									</a>
								</li>
							@endforeach
						</ul>
					</nav>
				@else
					<p>Arhiva je trenutno prazna.</p>
				@endif	
		</div>			
	</div>
</aside>