@extends('website.layouts.app')
@section('content')
        <!--==========================-->
        <!--=         Banner         =-->
        <!--==========================-->
        <section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="page-title-content">
                            <h1 class="h2">Membership Form</h1>
                            <p>
                                AASOA of Alabama offers opportunities for retailers as well as suppliers.
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===========================-->
        <!--=         Register        =-->
        <!--===========================-->
        <section id="page-content-wrap">
            <div class="register-page-wrapper section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="register-page-inner">
                                <div class="col-lg-10 m-auto">
                                    <div class="register-form-content">
                                        <div class="row justify-content-between">
                                            <!-- Signin Area Content Start -->
                                            <div class="col-lg-4 col-md-6 text-center">
                                                <div class="display-table">
                                                    <div class="display-table-cell">
                                                        <img src="{{ asset('/frontend/assets/images/gallery/gellary-img-5.jpg') }}" width="100%" alt="Membership Image">
                                                        {{-- <div class="signin-area-wrap">
                                                            <h4>Already a Member?</h4>
                                                            <div class="sign-form">
                                                                <form action="https://codeboxr.net/themedemo/unialumni/html/index.html">
                                                                    <input type="text" placeholder="Enter your ID">
                                                                    <input type="password" placeholder="Password">
                                                                    <button type="submit" class="btn btn-reg">Login</button>
                                                                </form>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Signin Area Content End -->

                                            <!-- Regsiter Form Area Start -->
                                            <div class="col-lg-7 col-md-6 ml-auto">
                                                <div class="register-form-wrap">
                                                    <h3>Membership Form</h3>
                                                    <div class="register-form">
                                                        <form action="#">
                                                            <div class="row">

                                                                <div class="row">
                                                                    <div class="col-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="register_name">Company Name <strong class="text-danger">*</strong></label>
                                                                            <input type="text" class="form-control" id="register_name" name="register_name" />
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="register_password">Contact Name <strong class="text-danger">*</strong></label>
                                                                            <input type="text" class="form-control" id="register_password" name="register_password"  placeholder="First"/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="register_password"></label>
                                                                            <input type="text" class="form-control" id="register_password" name="register_password"  placeholder="Last"/>
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="register_deptno">Contact E-mail <strong class="text-danger">*</strong></label>
                                                                            <input type="text" class="form-control" id="register_deptno" name="register_deptno" />
                                                                        </div>
                                                                        {{-- A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail. --}}
                                                                    </div>

                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_password">Contact Mailing Address <strong class="text-danger">*</strong></label>
                                                                        <input type="text" class="form-control" id="register_password" name="register_password" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_year">City<strong class="text-danger">*</strong></label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">State<strong class="text-danger">*</strong></label>
                                                                        <input type="text" class="form-control" id="register_deptno" name="register_deptno" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_year">Zip Code<strong class="text-danger">*</strong></label>
                                                                        <input type="number" class="form-control" id="register_year" name="register_year" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_email">Phone Number<strong class="text-danger">*</strong></label>
                                                                        <input type="number" class="form-control" id="register_email" name="register_email" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_stuid">Do you required Electricity? <strong class="text-danger">*</strong></label><br>
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"> C Store <br>
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"> Gas Station <br>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox float-lg-right">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                                                                    <label class="custom-control-label" for="customCheck1"> I
                                                                        have read and agree to the <a href="#">AASOA Alabama</a> Terms
                                                                        of Service</label>
                                                                </div>
                                                                <input type="submit" class="btn btn-reg" Value="Create New Account">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Regsiter Form Area End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
