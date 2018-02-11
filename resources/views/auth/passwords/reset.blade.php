@extends('layouts.auth')

@section('title', 'Reset password')

@section('description', 'Reset user password.')

@section('content')
<h2 class="title text-left">Reset Password</h2>
<form class="form-horizontal text-left" method="POST" action="{{ route('password.request') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <label for="email" class="col-sm-3 control-label">Email Address</label>
        <div class="col-sm-8">
            <input id="email" class="form-control" name="email" type="email" value="{{ $email or old('email') }}" required autofocus>
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
            <input id="password" class="form-control" name="password" type="password" required>
            <i class="fa fa-lock form-control-feedback"></i>

            @if ($errors->has('password'))
                <span class="help-block">
                    {{ $errors->first('password') }}
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
        <label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>
        <div class="col-sm-8">
            <input id="password-confirm" class="form-control" name="password_confirmation" type="password" required>
            <i class="fa fa-lock form-control-feedback"></i>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    {{ $errors->first('password_confirmation') }}
                </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-8">
            <button type="submit" class="btn btn-group btn-default btn-animated">Reset password <i class="fa fa-user"></i></button>
        </div>
    </div>
</form>
@endsection