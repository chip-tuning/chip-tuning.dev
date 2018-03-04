@extends('admin.layouts.app')

@section('title', 'Q&A Create')

@section('description', 'Create questions and answers')

@section('content')
<div id="faq">
	@if (session('message'))
		<div id="success" data-message="{{ session('message') }}"></div>
	@endif
	<div class="row gap-20">
		<div class="col-md-6">
			<div class="bgc-white p-20 bd">
				<h4 class="c-grey-900">Create question and answer</h4>
				<div class="mT-30">
					<form method="POST" action="{{ route('admin.faqs.store') }}">
						@csrf
						<div class="form-group">
							<label for="question">Question</label>
							<input id="question" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" type="text" name="question" placeholder="Enter the question" value="{{ old('question') }}" required>
							@if ($errors->has('question'))
								<div class="invalid-feedback">
									{{ $errors->first('question') }}
								</div>
							@endif        
						</div>
						<div class="form-group">
							<label for="answer">Answer</label>
							<textarea id="answer" class="form-control{{ $errors->has('answer') ? ' is-invalid' : '' }}" name="answer" rows="5" placeholder="Enter the answer" required>{{ old('answer') }}</textarea>
							@if ($errors->has('answer'))
								<div class="invalid-feedback">
									{{ $errors->first('answer') }}
								</div>
							@endif
						</div>
						<button type="submit" class="btn btn-primary">Create</button>
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
					<h4 class="c-grey-900">Latest questions and answers</h4>
					<div id="faqs" class="mT-30 accordion">
						@foreach($faqs as $key => $faq)
							<div class="card">
								<div class="card-header" id="heading-{{ $key }}">
									<h5 class="mb-0">
										<div class="clearfix">
											<button class="btn btn-link btn-title float-left" data-toggle="collapse" data-target="#collapse-{{ $key }}" aria-expanded="true" aria-controls="collapse-{{ $key }}">{{ $faq->question }}</button>
											<a href="#" class="btn btn-sm btn-danger float-right" rel="delete" role="button" data-id="#delete-{{ $faq->id }}"><i class="fa fa-trash"></i> Delete</a>
											<form id="delete-{{ $faq->id }}" action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" style="display: none;">
													@csrf
													@method('DELETE')
											</form>
											<a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-success btn-sm float-right" role="button"><i class="fa fa-pencil"></i> Edit</a>	
										</div>
									</h5>
								</div>
								<div id="collapse-{{ $key }}" class="collapse" aria-labelledby="heading-{{ $key }}" data-parent="#faqs">
									<div class="card-body">
										{{ $faq->answer }}
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