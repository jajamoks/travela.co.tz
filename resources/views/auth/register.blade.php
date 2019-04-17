@extends('layouts.app-auth')

@section('content')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <h3>{{ config('app.name') }}</h3>
                            {{-- <img src="images/icon/logo.png" alt="{{ config('app.name') }}"> --}}
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="au-input au-input--full form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="au-input au-input--full form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" type="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="au-input au-input--full form-control" type="password" name="password_confirmation" required>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                        </form>
                        <div class="register-link">
                            <p>
                                Already have account?
                                <a href="{{ route('login') }}">Sign In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
