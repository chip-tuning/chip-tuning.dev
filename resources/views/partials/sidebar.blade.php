<aside class="col-md-4 col-lg-3 col-lg-offset-1">
	<div class="sidebar">
		<div class="block clearfix">
			<h3 class="title">Pretraga</h3>
			<div class="separator-2"></div>
			<form name="search" method="GET" action="{{ route('blog.search') }}">
				<div class="form-group{{ $errors->has('upit') ? ' has-error' : '' }}">
					<div class="input-group">
						<input class="form-control" name="upit" type="text" placeholder="Unesite pojmove..." required>
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
						</span>
					</div>
					@if ($errors->has('upit'))
                    <span class="help-block">
                        {{ $errors->first('upit') }}
                    </span>
                	@endif
                	<div class="algolia"> 
						<p>Search by</p>
						<a href="https://www.algolia.com/" target="_blank"><img src="{{ asset('images/algolia-logo.png') }}" alt="Search by Algolia"></a>
					</div>
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
							<h6 class="media-heading"><a href="{{ route('blog.show', $article->slug) }}">{{ words($article->title, 7) }}</a></h6>
							<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Objavljeno {{ $article->published_at->diffForHumans() }}</p>
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
								<a href="{{ route('blog.tags') }}?tag={{ $tag }}">#{{ $tag }}</a>
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
									<a href="{{ route('blog.archive') }}?datum={{ strtolower(__($archive->month)) }}/{{ $archive->year }}">
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
		<div class="block clearfix">
			<h3 class="title">Feeds</h3>
			<div class="separator-2"></div>
			<nav>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="{{ route('feed.rss') }}">RSS/ATOM</a></li>
					<li><a href="{{ route('feed.json') }}">JSON</a></li>
				</ul>
			</nav>
		</div>	
	</div>
</aside>