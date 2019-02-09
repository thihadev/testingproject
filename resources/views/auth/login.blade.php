<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
body {
    background: url('img/login.bg.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
    font-size: 17px;
}

.logo {
    color: white;
    font-size: 40px;
    text-align: center;
    margin: 50px;

}


    </style>
</head>
<body>
    <div class="login-block">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> --}}
            <div class="container">
            <div class="col-md-6 offset-md-3">
            <div class="logo">
                <b>Admin </b>Dashboard
            </div>
                <div class="card card-login mx-auto mt" style="opacity: 0.8">
                    <div class="card-header">Sign in to start your session</div>
                     <div class="card-body">
                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                         <div class="form-group">
                           <label for="email">Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                         </div>

                         <div class="form-group">
                           <label for="password">Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                         </div>
                        <div class="form-group">
                           <div class="form-check">
                             <label class="form-check-label">
                               <input class="form-check-input" type="checkbox"> Remember Password</label>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>

            {{--             @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                   </form>
                       <div class="text-center">
                         {{-- <a class="d-block small mt-3" href="register.php">Register an Account</a> --}}
                      <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        {{-- </nav> --}}
    </div>
    </div>
</body>
</html>

