@extends('website.auth.app')
@section('content')
<div class="form m-auto p-5">
    <div class="container-fluid">
        <form action="#" class="border rounded shadow p-3 bg-white" method="POST">
            <h4 class="text-center mb-4 text-uppercase font-weight-bold">Create Your Account</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" id="name" class="form-control" placeholder="First Name" name="name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Last Name:</label>
                        <input type="text" id="name" class="form-control" placeholder="Last Name" name="name">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="con_pass">Confirm Password:</label>
                        <input type="password" id="con_pass" class="form-control" placeholder="Confirm Password" name="con_pass">
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
