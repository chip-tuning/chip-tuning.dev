@extends('admin.layouts.app')

@section('title', 'Articles Overview')

@section('description', 'Articles')

@section('content')
<div id="articles">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
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
							<h5 class="card-title"><a href="{{ route('admin.articles.show', $article->slug) }}">{{ $article->title }}</a></h5>
							<img class="img-fluid" src="{{ asset('/storage/' . $article->picture) }}" alt="{{ $article->title }}">
							{!! $article->summary !!}
							<a href="{{ route('admin.articles.show', $article->slug) }}" class="btn btn-sm btn-primary" role="button"><i class="fa fa-eye"></i> Show</a>
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
</div>
@endsection