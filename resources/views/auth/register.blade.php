<!doctype html>
<html lang="en">
<?php
    $user_types = config('constants.user_types');
    array_shift($user_types);
?>
<head>
    <!-- Basic Page Needs
      ================================================== -->
    <meta charset="utf-8">
    <title>CCIMS | Register</title>
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
{{--                        <img src="{{asset("assets/images/logo-white.png")}}" width="170" class="mb-4 img-fluid" alt="image">--}}
                        <h4 class="text-white">Discover great places in Dhaka</h4>
                        <p class="text-white">Find awesome places, restaurants and hotels for your precious events</p>
                        <a href=" {{ route('home') }} " class="btn btn-success">Home</a>
                        <br><br>
                        <h5 class="text-white"> For existing users</h5>
                        <h6><a href="{{ route('login') }}"><button type="button" class="btn btn-primary mt-4">Sign in</button></a></h6>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 site-content">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6 mx-auto">
                            <div class="text-center mb-4">
                                <h2>Create new Account.</h2>
                                <p>Fill up the following details</p>

                            </div>
                            <div class="card bg-secondary shadow border-0">
                                <div class="card-body px-lg-5 py-lg-5">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                                    </div>
                                                    <select required class="form-control" name="user_type" id="user_type">
                                                        <option value="">Select User Type</option>
                                                        @foreach($user_types as $type)
                                                            <option @if(old('user_type') == $type) selected @endif class="form-control" value=" {{$type}} "> {{ $type }} </option>
                                                        @endforeach
                                                    </select>

                                                    @error('user_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-group mb-3">
                                                <div class="input-group input-group-alternative">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input id="mobile" type="text" placeholder="Mobile (e.g. 017XXXXXXXX)" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile">

                                                    @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                                </div>
                                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
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
                                                <input id="password_confirmation" placeholder="Confirm Password" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4"> {{ __('Register') }} </button>
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

