<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    <section class="user-form-part">
        <div class="user-form-banner">
            <div class="user-form-content">
                <a href="#">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </a>
                <h1>Advertise your assets <span>Buy what are you needs.</span></h1>
                <p>Best Growing Online Advertising Marketplace in Sri Lanka.</p>
            </div>
        </div>
        <div class="user-form-category">
            <div class="user-form-header">
                <a href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
                <a href="/">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            <div class="user-form-category-btn">
                <ul class="nav nav-tabs">
                    <li><a href="#login-tab" class="nav-link active" data-toggle="tab">sign in</a></li>
                    <li><a href="#register-tab" class="nav-link" data-toggle="tab">sign up</a></li>
                </ul>
            </div>
            <div class="tab-pane active" id="login-tab">
                <div class="user-form-title">
                    <h2>Welcome!</h2>
                    <p>Use credentials to access your account.</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

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
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

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

                            {{-- @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif --}}
                        </div>
                    </div>
                </form>

                <div class="user-form-direction">
                    <p>Don't have an account? click on the <span>( sign up )</span>button above.</p>
                </div>
            </div>
            <div class="tab-pane" id="register-tab">
                <div class="user-form-title">
                    <h2>Register</h2>
                    <p>Setup a new account in a minute.</p>
                </div>
                <ul class="user-form-option">
                    <li><a href="#"><i class="fab fa-facebook-f"></i><span>facebook</span></a></li>
                    <li><a href="#"><i class="fab fa-google"></i><span>google</span></a></li>
                </ul>
                <div class="user-form-devider">
                    <p>or</p>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="user-form-direction">
                    <p>Already have an account? click on the <span>( sign in )</span>button above.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.scripts')

</body>

</html>
