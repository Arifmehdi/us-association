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
                            <!-- <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--===========================-->
        <!--=         Register        =-->
        <!--===========================-->
        <section id="page-content-wrap">
            <div style="margin-top:-65px" class="register-page-wrapper section-padding">
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
                                                        <form action="{{ route('membership.form') }}" method="post">
                                                            @csrf
                                                            <div class="row">

                                                                <div class="row">
                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="register_name">Name<strong class="text-danger">*</strong></label>
                                                                            <input type="text" class="form-control" id="register_name" name="register_name" />
                                                                            @if ($errors->has('register_name'))
                                                                                <span class="text-danger">{{ $errors->first('register_name') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-12 col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="register_dba">DBA</label>
                                                                            <input type="text" class="form-control" id="register_dba" name="register_dba" />
                                                                        </div>
                                                                    </div>



                                                                    <div class="col-12 col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="register_email">E-mail <strong class="text-danger">*</strong></label>
                                                                            <input type="text" class="form-control" id="register_email" name="register_email" />
                                                                            @if ($errors->has('register_email'))
                                                                                <span class="text-danger">{{ $errors->first('register_email') }}</span>
                                                                            @endif
                                                                        </div>
                                                                        A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail.
                                                                    </div>

                                                                <div class="col-12 col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="register_address">Address</label>
                                                                        <input type="text" class="form-control" id="register_address" name="register_address" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_city">City</label>
                                                                        <input type="text" class="form-control" id="register_city" name="register_city" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_state">State</label>
                                                                        <input type="text" class="form-control" id="register_state" name="register_state" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_zip_code">Zip Code</label>
                                                                        <input type="number" class="form-control" id="register_zip_code" name="register_zip_code" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_company_name">Company Name</label>
                                                                        <input type="text" class="form-control" id="register_company_name" name="register_company_name" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_store_phone">Store Phone</label>
                                                                        <input type="number" class="form-control" id="register_store_phone" name="register_store_phone"/>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_store_fax">Store Fax</label>
                                                                        <input type="text" class="form-control" id="register_store_fax" name="register_store_fax" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_cell_phone">Cell Phone </label>
                                                                        <input type="number" class="form-control" id="register_cell_phone" name="register_cell_phone" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_cell_phone_carrier">Cell Phone Carrier</label>
                                                                        <input type="text" class="form-control" id="register_cell_phone_carrier" name="register_cell_phone_carrier" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="business_type">Business Type</label><br>
                                                                        <input type="checkbox" class="custom-control-input" name="business_type[]" id="customCheck1" value="C Store"> C Store <br>
                                                                        <input type="checkbox" class="custom-control-input" name="business_type[]" id="customCheck2" value="Gas Station"> Gas Station <br>
                                                                        <input type="checkbox" class="custom-control-input" name="business_type[]" id="customCheck3" value="Liquor Store"> Liquor Store <br>
                                                                        <input type="checkbox" class="custom-control-input" name="business_type[]" id="customCheck4" value="Others"> Others <br>
                                                                        @if ($errors->has('business_type'))
                                                                            <span class="text-danger">{{ $errors->first('business_type') }}</span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="register_num_store">Number Of Stores </label><br>
                                                                        <select name="register_num_store" id="register_num_store">
                                                                            <option value="">None</option>
                                                                            <option value="0">Provide Later </option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
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

                                                            <div class="p-0">
                                                                <div class="form-group">
                                                                    <p style="color:rgb(32, 32, 31); font-weight:bold; font-size:12px; margin-bottom:13px; margin-top:10px">
                                                                        <span class="text-danger">*</span> Security Question (Enter the Correct answer)
                                                                    </p>
                                                                    <div style="display: flex;">
                                                                        <div id="captchaLabelSign" style="background-color:rgb(5, 145, 145); width:100%; margin-right:10px; text-align:center; padding-top:7px; font-weight:600; margin-top:2px; height:42px; border-radius:5px; color:white">
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
                                                                <div class="custom-control custom-checkbox float-lg-right">
                                                                    <input type="checkbox" name="terms" class="custom-control-input" id="customCheck11" value="1" checked>
                                                                    <label class="custom-control-label" for="customCheck11"> I
                                                                        have read and agree to the <a href="#">AASOA Alabama</a> Terms
                                                                        of Service</label>
                                                                </div>
                                                                <input type="submit" Value="Ctreate New User"  class="btn btn-reg"> 
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


        <!-- Button trigger modal
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Launch demo modal
        </button>

        <-- membership Modal -->

            <!-- Modal for Review -->
            <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Review Your Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                    <li><strong>Name:</strong> <span id="review_name"></span></li>
                    <li><strong>Email:</strong> <span id="review_email"></span></li>
                    <li><strong>City:</strong> <span id="review_city"></span></li>
                    <li><strong>Business Type:</strong> <span id="review_business_type"></span></li>
                    <!-- Add other fields as needed -->
                    </ul>
                </div>
                <div class="modal-footer">
                    <!-- Close button for editing -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>

                    <!-- Confirm and Submit button -->
                    <button type="button" id="confirmSubmit" class="btn btn-primary">Confirm & Submit</button>
                </div>
                </div>
            </div>
            </div>




            <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
            $(document).ready(function(){
            // Intercept the button click
            $('#reviewSubmitButton').click(function(event){

                // Prevent default form submission
                event.preventDefault();

                // Capture form data
                var name = $('#register_name').val();
                var email = $('#register_email').val();
                var city = $('#register_city').val();
                var businessType = $('input[name="business_type[]"]:checked').map(function() {
                    return this.value;
                }).get().join(', '); // Get the checked business type values

                // Display data in the modal for review
                $('#review_name').text(name);
                $('#review_email').text(email);
                $('#review_city').text(city);
                $('#review_business_type').text(businessType);

                // Show the modal
                $('#reviewModal').modal('show');
            });

            // Submit form after confirmation in the modal
            $('#reviewModal').on('click', '#confirmSubmit', function() {
                // Submit the form
                $('form').submit(); // This will submit the form after confirmation
            });
        });
</script>

@endsection
