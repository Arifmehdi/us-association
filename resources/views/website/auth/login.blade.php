@extends('website.auth.app')
@section('content')
<div class="form m-auto p-5">
    <form action="#" class="border rounded shadow p-4 bg-white" method="POST">
        <h4 class="text-center text-uppercase font-weight-bold">Login Form</h4>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" class="form-control" placeholder="Password" name="password">

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
    <div class="border text-center mt-2 rounded shadow p-3 bg-white">
        <a href="{{ route('register') }}">Create an account.</a>
    </div>
</div>

@endsection
