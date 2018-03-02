@extends('admin.layouts.app')

@section('title', 'Article show')

@section('description', 'Show article')

@section('content')
<div id="articles">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<h4 class="c-grey-900">Article show</h4>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-end"> 
				<a href="{{ route('admin.articles.edit', $article->slug) }}" class="btn btn-sm btn-success mr-2" role="button"><i class="fa fa-pencil"></i> Edit</a>
				<a href="#" class="btn btn-sm btn-danger" rel="delete" role="button" data-id="#delete-{{ $article->id }}"><i class="fa fa-trash"></i> Delete</a>
				<form id="delete-{{ $article->id }}" action="{{ route('admin.articles.destroy', $article->slug) }}" method="POST" style="display: none;">
						@csrf
						@method('DELETE')
				</form>
			</div>
		</div>
	</div>
	<div class="row gap-20">
		<div class="col-md-3 col-lg-3 col-xl-3">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Info</h4>
				<div class="mT-20">
					<p><span class="fw-600">ID:</span> {{ $article->id }}</p>
					<p><span class="fw-600">Author:</span> {{ $article->author->name }}</p>
					<p><span class="fw-600">Slug:</span> {{ $article->slug }}</p>
					@if ($article->tags->isNotEmpty())
						<p><span class="fw-600">Tags:</span>
						@foreach($article->tags as $tag)
							<span class="badge badge-pill bgc-green-50 c-green-700">#{{ $tag->name }}</span>
						@endforeach
						</p>
					@else
						<p><span class="fw-600">Tags:</span> None</p>
					@endif
					<p class="fw-600">Izmenjeno {{ $article->updated_at->diffForHumans() }}.</p>
					<p class="fw-600">Objavljeno {{ $article->published_at->diffForHumans() }}.</p>
					<p class="fw-600">Napravljeno {{ $article->created_at->diffForHumans() }}.</p>
				</div>
			</div>
		</div>		
		<div class="col-md-9 col-lg-9 col-xl-7">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">{{ $article->title }}</h4>
				<div class="mT-10">
					<img class="img-fluid" src="{{ asset('/storage/' . $article->picture) }}" alt="{{ $article->title }}">
					<p class="fw-600 mT-10 mb-0">Summary</p> 
					{!! $article->summary !!}
					<p class="fw-600 mb-0">Content</p>
					{!! $article->content !!}
				</div>
			</div>
		</div>
	</div>
	{{--
	<div class="row gap-20">
		<div class="col-md-6">
			<h4 class="c-grey-900">Articles overview</h4>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-end"> 
				{{ $articles->links() }}
			</div>
		</div>
	</div>
	@if ($articles->isNotEmpty())
		<div class="row gap-20 masonry pos-r">
			<div class="masonry-sizer col-md-4"></div>
			@foreach ($articles as $article)
				<div class="masonry-item col-md-4">
					<div class="card bgc-white bd">
						<div class="card-body">
							<h5 class="card-title">{{ $article->title }}</h5>
							<img class="img-fluid" src="{{ asset('/storage/' . $article->picture) }}" alt="{{ $article->title }}">
							{!! $article->summary !!}
							<p class="card-text">
								@isset($article->deleted_at)
									<small class="text-muted">Obrisano {{ $article->deleted_at->diffForHumans() }}</small>
								@else
									<small class="text-muted">Objavljeno {{ $article->published_at->diffForHumans() }}</small><br> 
									<small class="text-muted">Napravljeno {{ $article->created_at->diffForHumans() }}</small><br>
									<small class="text-muted">Izmenjeno {{ $article->updated_at->diffForHumans() }}</small> 
								@endisset
							</p>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	@else
		<div class="row gap-20">
			<div class="col-md-12">
				<div class=" bgc-white p-20 bd">
					There is no records in database. Create some first.
				</div>
			</div>
		</div>
	@endif
	--}}
</div>
@endsection