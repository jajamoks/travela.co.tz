@extends('layouts.appAuth')

@section('content')

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="/">
                          <h3>{{ config('app.name') }}</h3>
                            {{-- <img src="{!! asset('images/icon/logo.png') !!}" alt="{{ config('app.name') }}"> --}}
                        </a>
                    </div>
                    <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                          @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="login-checkbox">
                                {{-- <label>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                </label> --}}
                                {{-- <label>
                                  @if (Route::has('password.request'))
                                  <a class="btn btn-link" href="{{ route('password.request') }}">
                                      {{ __('Forgot Your Password?') }}
                                  </a>
                                  @endif
                                </label> --}}
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>

                        </form>
                        {{-- <div class="register-link">
                            <p>
                                Don't you have account?
                                <a href="{{ route('register') }}">Sign Up Here</a>
                            </p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
