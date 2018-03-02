@extends('admin.layouts.app')

@section('title', 'Gallery')

@section('description', 'Photos overview')

@section('content')
<div id="gallery">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<h4 class="c-grey-900">Photos overview</h4>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-end"> 
				{{ $photos->links() }}
			</div>
		</div>
	</div>
	@if ($photos->isNotEmpty())
		<div class="row gap-20 masonry pos-r">
			<div class="masonry-sizer col-md-3"></div>
			@foreach ($photos as $photo)
				<div class="masonry-item col-md-3">
					<div class="card bgc-white bd">
						<img class="card-img-top" src="{{ asset('/storage/' . $photo->medium) }}" alt="{{ $photo->title }}">
						<div class="card-body">
							<h5 class="card-title">{{ $photo->album->title }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">{{ $photo->title }}</h6>
							<p class="card-text">
								<small class="text-muted"><i class="ti-time"></i> Napravljeno {{ $photo->created_at->diffForHumans() }}.</small><br>
								<small class="text-muted"><i class="ti-time"></i> Izmenjeno {{ $photo->updated_at->diffForHumans() }}.</small>
							</p>
							<div class="clearfix">
								<div class="pull-right">
									<a href="#" class="btn btn-sm btn-danger" rel="delete" role="button" data-id="#delete-{{ $photo->id }}"><i class="fa fa-trash"></i> Delete</a>
									<form id="delete-{{ $photo->id }}" action="{{ route('admin.photos.destroy', $photo->id) }}" method="POST" style="display: none;">
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