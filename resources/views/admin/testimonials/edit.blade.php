@extends('admin.layouts.app')

@section('title', 'Testimonials Edit')

@section('description', 'Edit testimonials')

@section('content')
<div id="testimonial">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-12">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Edit testimonial</h4>
				<div class="mT-30">
					<form method="POST" action="{{ route('admin.testimonials.update', $testimonial->id) }}">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="content">Review</label>
							<textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" rows="6" required>{{ $testimonial->content or old('content') }}</textarea>
							@if ($errors->has('content'))
							<div class="invalid-feedback">
								{{ $errors->first('content') }}
							</div>
							@endif
						</div>

						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection