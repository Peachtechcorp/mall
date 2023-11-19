@extends('layouts.app')

@section('content')

<div class="wrapper-page">
            <div class="card">

                <div class="card-body">
                   
                    <h5 class="text-center mt-0 text-color"><b>Sign In</b></h5>

                    <form class="form-horizontal mt-3 mx-3" method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="form-group mb-3">
                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="col-12">
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox-signup" class="text-color">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center mt-3">
                            <div class="col-12">
                                <button class="btn btn-primary btn-block btn-lg waves-effect waves-light w-100" type="submit">
                                    Log In</button>
                            </div>
                        </div>

                        <div class="form-group row mt-4 mb-0">
                            <div class="col-12">
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       <i class="mdi mdi-lock me-1"></i> {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                              
                            </div>
                           
                        </div>
                    </form>
                </div>

            </div>
        </div>







@endsection
