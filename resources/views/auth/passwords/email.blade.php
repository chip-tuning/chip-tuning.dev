@extends('layouts.auth')

@section('title', 'Reset password')

@section('description', 'Reset user password.')

@section('content')
<h2 class="title text-left">Reset Password</h2>
@if (session('status'))
	<div class="alert alert-success text-left">
			<p>{{ session('status') }}</p>
	</div>
@endif
<form class="form-horizontal text-left" method="POST" action="{{ route('password.email') }}">
	@csrf

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
		<label for="email" class="col-sm-3 control-label">Email Address</label>
		<div class="col-sm-8">
			<input id="email" class="form-control" name="email" type="email" placeholder="Enter your email address" value="{{ old('email') }}" required autofocus>
			<i class="fa fa-envelope form-control-feedback"></i>

			@if ($errors->has('email'))
				<span class="help-block">
					{{ $errors->first('email') }}
				</span>
			@endif        
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-group btn-default btn-animated">Request reset link <i class="fa fa-envelope"></i></button>
		</div>
	</div>
</form>
@endsection