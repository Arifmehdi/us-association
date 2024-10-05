@extends('website.auth.app')
@section('content')
<div class="form m-auto p-5">
    <div class="container-fluid">
        <form action="{{ route('register') }}" class="border rounded shadow p-3 bg-white" method="POST">
            @csrf
            <h4 class="text-center mb-4 text-uppercase font-weight-bold">Create Your Account</h4>
            @if (Session::has('error'))
                <p class="text-danger">{{ Session::get('error') }}</p>
            @endif
            @if (Session::has('success'))
                <p class="text-suceess">{{ Session::get('success') }}</p>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" id="fname" class="form-control" placeholder="First Name" name="fname">
                        @if ($errors->has('fname'))
                            <p class="text-danger">{{ $errors->first('fname')}}</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" id="lname" class="form-control" placeholder="Last Name" name="lname">
                        @if ($errors->has('lname'))
                            <p class="text-danger">{{ $errors->first('lname')}}</p>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Email" name="email">

                        @if ($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email')}}</p>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password">

                        @if ($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password')}}</p>
                        @endif
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" id="password_confirmation" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                </div>

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" value="Sign Up">
            </div>
        </form>

        <div class="forgot-pass border text-center mt-2 rounded shadow p-3 bg-white">
            <a href="{{ route('login') }}">Already have an account?</a>
        </div>
    </div>
</div>
@endsection
