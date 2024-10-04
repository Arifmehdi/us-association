@extends('website.auth.app')
@section('content')
<div class="form m-auto p-5">
    <form action="#" class="border rounded shadow p-3 bg-white" method="POST">
        <h4 class="text-center text-uppercase font-weight-bold">Reset Password</h4>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary form-control" value="Reset Password">
        </div>
        <a href="{{ route('login') }}">Back to <b>Login</b></a>
    </form>
    <div class="border text-center mt-2 rounded shadow p-3 bg-white">
        <a href="{{ route('register') }}">Create New Account.</a>
    </div>
</div>

@endsection
