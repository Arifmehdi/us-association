@extends('website.auth.app')
@section('content')
<div class="form m-auto p-5">
    <form action="{{ route('login') }}" class="border rounded shadow p-4 bg-white" method="POST">
        @csrf
        <h4 class="text-center text-uppercase font-weight-bold">Login Form</h4>
        @if (Session::has('error'))
            <p class="text-danger">{{ Session::get('error') }}</p>
        @endif
        @if (Session::has('success'))
            <p class="text-suceess">{{ Session::get('success') }}</p>
        @endif
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" placeholder="Email" name="email">
            @if ($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control" placeholder="Password" name="password">
            @if ($errors->has('password'))
                <p class="text-danger">{{ $errors->first('password')}}</p>
            @endif

        </div>
        <div class="p-0">
            <div class="form-group">
                <p style="color:rgb(32, 32, 31); font-weight:bold; font-size:12px; margin-bottom:13px; margin-top:10px">
                    <span class="text-danger">*</span> Security Question (Enter the Correct answer)
                </p>
                <div style="display: flex;">
                    <div id="captchaLabelSign" style="background-color:rgb(5, 145, 145); width:100%; margin-right:10px; text-align:center; padding-top:7px; font-weight:600; margin-top:2px; height:35px; border-radius:5px; color:white">
                        {{ app('mathcaptcha')->label(true) }}
                    </div>
                    <div>
                        <input id="captchaInputSign" style="width:100%; border-radius:5px" class="form-control" type="text"
                            name="mathcaptcha" id="mathcaptcha" placeholder="Your answer">
                        @if ($errors->has('mathcaptcha'))
                            <span id="Smathcaptcha" class="text-danger" role="alert">
                                {{ $errors->first('mathcaptcha') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="remember">
                <label class="custom-control-label" for="remember">Remember Me</label>
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" value="Login">
        </div>
        <a href="{{ route('reset') }}">Reset Password?</a>
    </form>
    {{-- <div class="border text-center mt-2 rounded shadow p-3 bg-white">
        <a href="{{ route('register') }}">Create an account.</a>
    </div> --}}
</div>

@endsection
