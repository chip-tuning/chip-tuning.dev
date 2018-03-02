@extends('admin.layouts.app')

@section('title', 'Q&A Overview')

@section('description', 'Questions and answers')

@section('content')
<div id="faq">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<h4 class="c-grey-900">Questions and answers overview</h4>
		</div>
		<div class="col-md-6">
			<div class="d-flex justify-content-end"> 
				{{ $faqs->links() }}
			</div>
		</div>
	</div>
	@if ($faqs->isNotEmpty())
		<div class="row gap-20 masonry pos-r">
			<div class="masonry-sizer col-md-6"></div>
			@foreach ($faqs as $faq)
				<div class="masonry-item col-md-6">
					<div class="card bgc-white bd">
						<div class="card-body">
							<h5 class="card-title">{{ $faq->question }}</h5>
							<p class="card-text">{{ $faq->answer }}</p>
							<div class="clearfix">
								<div class="pull-left">
									<p class="card-text">
										<small class="text-muted"><i class="ti-time"></i> Napravljeno {{ $faq->created_at->diffForHumans() }}.</small>
										<small class="text-muted"><i class="ti-time"></i> Izmenjeno {{ $faq->updated_at->diffForHumans() }}.</small>
									</p>
								</div>
								<div class="pull-right">
									<a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-sm btn-success mr-2" role="button"><i class="fa fa-pencil"></i> Edit</a>
									<a href="#" class="btn btn-sm btn-danger" rel="delete" role="button" data-id="#delete-{{ $faq->id }}"><i class="fa fa-trash"></i> Delete</a>
									<form id="delete-{{ $faq->id }}" action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" style="display: none;">
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