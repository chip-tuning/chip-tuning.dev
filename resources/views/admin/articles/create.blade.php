@extends('admin.layouts.app')

@section('title', 'Article Create')

@section('description', 'Create an article')

@section('content')
<div id="articles">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-12">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Create article</h4>
				<div class="mT-30">
					<form method="POST" enctype="multipart/form-data" action="{{ route('admin.articles.store') }}">
                        @csrf
						<div class="form-group">
							<label for="slug">Slug</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="url">{{ route('blog.index') }}/</span>
								</div>
								<input type="text" class="form-control" id="slug" aria-describedby="url" placeholder="enter-the-title" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="title">Title</label>
							<input id="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" type="text" name="title" placeholder="Enter the title" value="{{ old('title') }}" maxlength="60" required>
							@if ($errors->has('title'))
								<div class="invalid-feedback">
									{{ $errors->first('title') }}
								</div>
							@endif
						</div>
						<div class="form-group">
							<label for="picture">Picture</label>
							<input id="picture" class="form-control-file{{ $errors->has('title') ? ' is-invalid' : '' }}" type="file" name="picture" required>
							@if ($errors->has('picture'))
								<div class="invalid-feedback">
									{{ $errors->first('picture') }}
								</div>
							@endif
						</div>
						<div class="form-group">
							<label for="tags">Tags</label>
							<input id="tags" class="form-control" type="text" name="tags">
						</div>
						<div class="form-group">
							<label for="files">Files</label>
							<div class="dropzone form-control">
								<div class="message">Click here to upload files.</div>									
							</div>
						</div>
						<div class="form-group">
							<label for="summary">Summary</label>
							<textarea id="summary" class="form-control{{ $errors->has('summary') ? ' is-invalid' : '' }}" name="summary" required></textarea>
							@if ($errors->has('summary'))
							<div class="invalid-feedback">
								{{ $errors->first('summary') }}
							</div>
							@endif
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea id="content" class="form-control{{ $errors->has('summary') ? ' is-invalid' : '' }}" name="content" rows="8" required></textarea>
							@if ($errors->has('content'))
							<div class="invalid-feedback">
								{{ $errors->first('content') }}
							</div>
							@endif
						</div>
						<button type="submit" class="btn btn-primary">Create</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection