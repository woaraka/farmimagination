<!doctype html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('templet/img/FILogo.png') }}" type="image/x-icon" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('templet/css/style.css') }}">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Reset Password Farmimagination</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Forget Your Password?</h3>
                    <form method="POST" action="{{ route('password.email') }}" class="login-form">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" placeholder="Email Address" class="form-control rounded-left @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-md-left">
                                    <a href="{{ route('login') }}">
                                        {{ __('Login Page') }}
                                    </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('templet/js/jquery.min.js') }}"></script>
<script src="{{ asset('templet/js/popper.js') }}"></script>
<script src="{{ asset('templet/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templet/js/main.js') }}"></script>

</body>
</html>
