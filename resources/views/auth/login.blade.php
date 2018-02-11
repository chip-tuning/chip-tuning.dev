@extends('layouts.auth')

@section('title', 'Login')

@section('description', 'User login page.')

@section('content')
<h2 class="title text-left">Login</h2>
<form class="form-horizontal text-left" method="POST" action="{{ route('login') }}">
	@csrf

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
		<label for="email" class="col-sm-3 control-label">Username</label>
		<div class="col-sm-8">
			<input id="email" class="form-control" name="email" type="email" placeholder="Enter your username" value="{{ old('email') }}" required autofocus>
			<i class="fa fa-user form-control-feedback"></i>

			@if ($errors->has('email'))
				<span class="help-block">
					{{ $errors->first('email') }}
				</span>
			@endif        
		</div>
	</div>
	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
		<label for="password" class="col-sm-3 control-label">Password</label>
		<div class="col-sm-8">
			<input id="password" class="form-control" name="password" type="password" placeholder="Enter your password" required>
			<i class="fa fa-lock form-control-feedback"></i>

			@if ($errors->has('password'))
				<span class="help-block">
					{{ $errors->first('password') }}
				</span>
			@endif
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-group btn-default btn-animated">Login <i class="fa fa-user"></i></button>
			<ul class="space-top">
				<li><a href="{{ route('password.request') }}">Forgot Your Password?</a></li>
			</ul>
		</div>
	</div>
</form>
@endsection
