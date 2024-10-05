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
