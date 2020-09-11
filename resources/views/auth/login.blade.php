
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}



    <!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>CCIMS | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900" rel="stylesheet">
    <!-- CSS
      ================================================== -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    @include('layouts.style.css')

</head>

<body>
<div class="content p-0">
    <div class="login-wrapper">
        <div class="row m-0">
            <div class="col-lg-4 side-banner" style="background-image:url({{asset('assets/images/bg-login.jpg')}});background-position: center center; background-size: cover;">
                <div class="content px-5 text-center d-flex justify-content-center h-100">
                    <div class="align-self-center">
                        <img src="{{asset("assets/images/logo-white.png")}}" width="170" class="mb-4 img-fluid" alt="image">
                        <h4 class="text-white">Discover great places in Dhaka</h4>
                        <p class="text-white">Find awesome places, restaurants and hotels for your precious events</p>
                        <a href="{{ route('home') }}" class="btn btn-success">HOME</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 site-content">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="text-center mb-4">
                                <h2>Sign in to CCIMS.</h2>
                                <p>Fill up the following details</p>
                            </div>
                            <div class="card bg-secondary shadow border-0">
                                <div class="card-header bg-white pb-5">
                                    <div class="text-center mb-3">
                                        <h6>Sign in with</h6>
                                    </div>
                                    <div class="btn-wrapper text-center">
                                        <a href="#" class="btn btn-neutral btn-icon">
												<span class="btn-inner--icon">
                                 <i class="fa fa-facebook"></i>
                                 </span>
                                            <span class="btn-inner--text">Facebook</span>
                                        </a>
                                        <a href="#" class="btn btn-neutral btn-icon">
												<span class="btn-inner--icon">
                                 <i class="fa fa-google"></i>
                                 </span>
                                            <span class="btn-inner--text">Google</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body px-lg-5 py-lg-5">
                                    <div class="text-center mb-4">
                                        <h6>Or sign in with credentials</h6>
                                    </div>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                </div>
                                                <input id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}"  type="email" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                                                </div>
                                                <input id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label style="float: left" class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>

                                            @if (Route::has('password.request'))
                                                <div style="float: right">
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4">Sign in</button>
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
</div>
<!-- Scripts
  ================================================== -->
@include('layouts.script.js')
</body>

</html>
