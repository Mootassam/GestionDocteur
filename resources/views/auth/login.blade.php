@extends('layouts.master')

@section('content')
<div id="login-page">
  <div class="container">
                    <form class="form-login" method="POST" action="{{ route('login') }}">    
                        @csrf
                        <h2 class="form-login-heading">sign in now</h2>
                        <div class="login-wrap">                  
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
       
                                    <br>

                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
             
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <span class="pull-right">
                                        @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                 </span>
                 
                                <button type="submit" class="btn btn-theme btn-block" >
                                    {{ __('Login') }}
                                </button>
                                <br>
                                <a type="submit" href="{{url('')}}" class="btn btn-theme btn-block" >
                                    {{ __('Register') }}
                                </a>
                            <br>
                           
                            <a  href ="{{url('login/facebook')}}"class="btn btn-block btn-social btn-facebook">
                                <span class="fa fa-facebook"></span> Sign in with Facebook
                              </a>
                            <br>
                        </div>
                        </form>
        </div>
    </div>
          
@endsection
