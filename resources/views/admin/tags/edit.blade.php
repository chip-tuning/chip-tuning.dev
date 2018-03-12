@extends('admin.layouts.app')

@section('title', 'Tags Edit')

@section('description', 'Edit tags')

@section('content')
<div id="tag">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-4">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Edit tag</h4>
				<div class="mT-30">
					<form method="POST" action="{{ route('admin.tags.update', $tag->name) }}">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="name">Tag</label>
							<input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" placeholder="Enter the tag without hashtag" value="{{ $tag->name or old('name') }}" required>
							@if ($errors->has('name'))
								<div class="invalid-feedback">
									{{ $errors->first('name') }}
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