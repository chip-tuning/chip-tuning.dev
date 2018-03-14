@extends('admin.layouts.app')

@section('title', 'Testimonials Overview')

@section('description', 'Testimonials')

@section('content')
<div id="testimonial">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<h4 class="c-grey-900">Testimonials overview</h4>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-end"> 
				{{ $testimonials->links() }}
			</div>
		</div>
	</div>
	@if ($testimonials->isNotEmpty())
		<div class="row gap-20 masonry pos-r">
			<div class="masonry-sizer col-md-4"></div>
			@foreach ($testimonials as $testimonial)
				<div class="masonry-item col-md-4">
					<div class="card bgc-white bd">
						<div class="card-body">
							<p class="card-text"> <span class="fw-600">Stars:</span>
								@for ($i=0; $i < 5; $i++)
	                                @if ($i < $testimonial->stars)
	                                    <i class="fa fa-star" aria-hidden="true"></i>
	                                @else
	                                    <i class="fa fa-star-o" aria-hidden="true"></i> 
	                                @endif
                            	@endfor
							</p>
							<p class="card-text"><span class="fw-600">Review:</span> {{ $testimonial->content }}</p>
							<p class="card-text"><span class="fw-600">Author:</span> {{ $testimonial->author }}</p>
							<div class="clearfix">
								<div class="pull-left">
									<p class="card-text">
										<small class="text-muted"><i class="ti-time"></i> Napravljeno {{ $testimonial->created_at->diffForHumans() }}.</small>
										<small class="text-muted"><i class="ti-time"></i> Izmenjeno {{ $testimonial->updated_at->diffForHumans() }}.</small>
									</p>
								</div>
								<div class="pull-right">
									<a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-success mr-2" role="button"><i class="fa fa-pencil"></i> Edit</a>
									<a href="#" class="btn btn-sm btn-danger" rel="delete" role="button" data-id="#delete-{{ $testimonial->id }}"><i class="fa fa-trash"></i> Delete</a>
									<form id="delete-{{ $testimonial->id }}" action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="POST" style="display: none;">
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