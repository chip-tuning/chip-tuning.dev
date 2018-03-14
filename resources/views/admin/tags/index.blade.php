@extends('admin.layouts.app')

@section('title', 'Tags Overview')

@section('description', 'Tags')

@section('content')
<div id="tag">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<h4 class="c-grey-900">Tags overview</h4>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-end"> 
				{{ $tags->links() }}
			</div>
		</div>
	</div>
	@if ($tags->isNotEmpty())
		<div class="row gap-20 masonry pos-r">
			<div class="masonry-sizer col-md-3"></div>
			@foreach ($tags as $tag)
				<div class="masonry-item col-md-3">
					<div class="card bgc-white bd">
						<div class="card-body">
							<h5 class="card-title"><span class="badge badge-pill bgc-green-50 c-green-700">#{{ $tag->name }}</span></h5>
							<p class="card-text">
								<small class="text-muted"><i class="ti-time"></i> Napravljeno {{ $tag->created_at->diffForHumans() }}.</small><br>
								<small class="text-muted"><i class="ti-time"></i> Izmenjeno {{ $tag->updated_at->diffForHumans() }}.</small>
							</p>
							<div class="clearfix">
								<div class="pull-right">
									<a href="{{ route('admin.tags.edit', $tag->name) }}" class="btn btn-sm btn-success mr-2" role="button"><i class="fa fa-pencil"></i> Edit</a>
									<a href="#" class="btn btn-sm btn-danger" rel="delete" role="button" data-id="#delete-{{ $tag->id }}"><i class="fa fa-trash"></i> Delete</a>
									<form id="delete-{{ $tag->id }}" action="{{ route('admin.tags.destroy', $tag->name) }}" method="POST" style="display: none;">
											@csrf
											@method('DELETE')
									</form>
								</div>
							</div>
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