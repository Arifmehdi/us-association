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
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="register_name">Name</label>
                                                                            <input type="text" class="form-control" id="register_name" name="register_name" placeholder="John Smith"/>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="register_password">DBA</label>
                                                                            <input type="text" class="form-control" id="register_password" name="register_password" />
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="register_deptno">E-mail <strong class="text-danger">*</strong></label>
                                                                            <input type="text" class="form-control" id="register_deptno" name="register_deptno" />
                                                                        </div>
                                                                        A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail.
                                                                    </div>

                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_password">Address</label>
                                                                        <input type="text" class="form-control" id="register_password" name="register_password" placeholder="20 Wellington ST. E"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_year">City</label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" placeholder="Richmond"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">State</label>
                                                                        <input type="text" class="form-control" id="register_deptno" name="register_deptno" placeholder="Virginia"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_year">Zip Code</label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" placeholder="23263"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_email">Company Name</label>
                                                                        <input type="email" class="form-control" id="register_email" name="register_email" placeholder="Type Your Company Name"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_year">Store Phone</label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" placeholder="(123) 123-1234"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">Store Fax</label>
                                                                        <input type="text" class="form-control" id="register_deptno" name="register_deptno" placeholder="(123) 123-1234"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_year">Cell Phone </label>
                                                                        <input type="text" class="form-control" id="register_year" name="register_year" placeholder="(123) 123-1234"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_deptno">Cell Phone Carrier</label>
                                                                        <input type="text" class="form-control" id="register_deptno" name="register_deptno" placeholder="Eg: AT&T/Vodafone"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_stuid">Business Type</label><br>
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"> C Store <br>
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"> Gas Station <br>
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"> Liqour Store <br>
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1"> Others <br>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_stuid">Number Of Stores </label><br>
                                                                        <select name="" id="">
                                                                            <option value="">None</option>
                                                                            <option value="">Provide Later </option>
                                                                            <option value="">1</option>
                                                                            <option value="">2</option>
                                                                            <option value="">3</option>
                                                                            <option value="">4</option>
                                                                            <option value="">5</option>
                                                                            <option value="">6</option>
                                                                            <option value="">7</option>
                                                                            <option value="">8</option>
                                                                            <option value="">9</option>
                                                                            <option value="">10</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <div class="form-group file-input">
                                                                <input type="file" name="register_file" id="customfile" class="d-none" />
                                                                <label class="custom-file" for="customfile"><i class="fa fa-upload"></i>Upload Your Photo</label>
                                                            </div> --}}

                                                           {{-- <div class="gender form-group">
                                                                <label class="g-name d-block">Gender</label>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_male" name="register_gender" value="mail" class="custom-control-input" />
                                                                    <label class="custom-control-label" for="register_gender_male">Male</label>
                                                                </div>
                                                                <div class="custom-control custom-radio custom-control-inline">
                                                                    <input type="radio" id="register_gender_female" name="register_gender" value="female" class="custom-control-input">
                                                                    <label class="custom-control-label" for="register_gender_female">Female</label>
                                                                </div>
                                                            </div> --}}

                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox float-lg-right">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
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
