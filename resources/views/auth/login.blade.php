@extends('layouts.app')

@section('content')

<!-- bawaan laravel -->
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

 <!--main area-->
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-4">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                <div class="row">
                    <img class="col-lg-6 d-none d-lg-block" src="images/images.png">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="col-md-10">
                                <center><h1 class="h3 text-gray-900 mb-4">Welcome</h1><center>
                            </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <div class="col-md-10">
                                            <input id="email" 
                                                type="email" 
                                                class="form-control @error('email') is-invalid @enderror" 
                                                placeholder="Email"
                                                name="email" 
                                                value="{{ old('email') }}" 
                                                required autocomplete="email" autofocus
                                                style="border-radius: 30px; height: 45px;">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">

                                        <div class="col-md-10">
                                            <input id="password" 
                                                type="password" 
                                                class="form-control @error('password') is-invalid @enderror" 
                                                placeholder="Password"
                                                name="password" 
                                                required autocomplete="current-password"
                                                style="border-radius: 30px; height: 45px;">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div style="margin-left: 1vh;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-10">
                                            <center><button type="submit" 
                                                class="btn btn-primary" 
                                                style="border-radius: 30px; width: 250px; height: 45px">
                                                {{ __('Login') }}
                                            </button><center>
                                            <hr>

                                            @if (Route::has('password.request'))
                                                <center><a href="{{ route('register') }}">
                                                    {{ __('Register') }}
                                                </a></center>
                                            @endif
                                        </div>
                                        <div class="col-md-10">
                                            <center><a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a></center>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
    </div>
</div>

@endsection

