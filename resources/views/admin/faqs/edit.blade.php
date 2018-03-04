@extends('admin.layouts.app')

@section('title', 'Q&A Edit')

@section('description', 'Edit questions and answers')

@section('content')
<div id="faq">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Edit question and answer</h4>
				<div class="mT-30">
					<form method="POST" action="{{ route('admin.faqs.update', $faq->id) }}">
						@csrf
						@method('PUT')
						<div class="form-group">
							<label for="question">Question</label>
							<input id="question" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" type="text" name="question" placeholder="Enter the question" value="{{ $faq->question or old('question') }}" required>
							@if ($errors->has('question'))
								<div class="invalid-feedback">
									{{ $errors->first('question') }}
								</div>
							@endif        
						</div>
						<div class="form-group">
							<label for="answer">Answer</label>
							<textarea id="answer" class="form-control{{ $errors->has('answer') ? ' is-invalid' : '' }}" name="answer" rows="5" placeholder="Enter the answer" required>{{ $faq->answer or old('answer') }}</textarea>
							@if ($errors->has('answer'))
								<div class="invalid-feedback">
									{{ $errors->first('answer') }}
								</div>
							@endif
						</div>
						<button type="submit" class="btn btn-primary">Update</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Preview</h4>
				<div class="mT-30">
					<h5 id="question-preview">Question will be shown here.</h5>
					<hr>
					<p id="answer-preview">Answer will be shown here.</p>
				</div>
			</div>
		</div>
		@if ($faqs->isNotEmpty())
			<div class="col-md-12">
				<div class="bgc-white p-20 bd">
					<h4 class="c-grey-900">Recently updated questions and answers</h4>
					<div id="faqs" class="mT-30 accordion">
						@foreach($faqs as $key => $faqs)
							<div class="card">
								<div class="card-header" id="heading-{{ $key }}">
									<h5 class="mb-0">
										<div class="clearfix">
											<button class="btn btn-link btn-title float-left" data-toggle="collapse" data-target="#collapse-{{ $key }}" aria-expanded="true" aria-controls="collapse-{{ $key }}">{{ $faqs->question }}</button>
											@if ($faqs->id !== $faq->id)
												<a href="#" class="btn btn-sm btn-danger float-right" rel="delete" role="button" data-id="#delete-{{ $faqs->id }}"><i class="fa fa-trash"></i> Delete</a>
												<form id="delete-{{ $faqs->id }}" action="{{ route('admin.faqs.destroy', $faqs->id) }}" method="POST" style="display: none;">
														@csrf
														@method('DELETE')
												</form>
												<a href="{{ route('admin.faqs.edit', $faqs->id) }}" class="btn btn-success btn-sm float-right" role="button"><i class="fa fa-pencil"></i> Edit</a>
											@endif	
										</div>
									</h5>
								</div>
								<div id="collapse-{{ $key }}" class="collapse" aria-labelledby="heading-{{ $key }}" data-parent="#faqs">
									<div class="card-body">
										{{ $faqs->answer }}
									</div>
								</div>
							</div>					
						@endforeach
					</div>
				</div>
			</div>
		@endif
	</div>
</div>
@endsection