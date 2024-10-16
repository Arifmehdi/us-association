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
                            <h1 class="h2">Contact Us</h1>
                            <p>
                                AASOA of Alabama offers opportunities for retailers as well as suppliers.
                            </p>
                            <!-- <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============================-->
        <!--=         Contact Us        =-->
        <!--=============================-->
        <section id="page-content-wrap">
            <div style="margin-top:-25px" class="contact-page-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact-content-inner">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <!-- Map Area Start -->
                                        <div class="map-area-wrap">
                                            {{-- <iframe src="https://snazzymaps.com/embed/75079"></iframe> --}}
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13750.47381533132!2d-88.26447073459975!3d30.503546683102556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x889bc9f068fdb415%3A0x1338341c17dded1d!2sSt%20Elmo%2C%20AL%2036544%2C%20USA!5e0!3m2!1sen!2sbd!4v1727985582882!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <!-- Map Area End -->
                                    </div>

                                    <div class="col-lg-6 m-auto">
                                        <div class="contact-form-wrap">
                                            <h3>Send Message</h3>
                                            <form action="{{ route('contact.store') }}" method="post">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name"  id="name" placeholder="Your Full Name" class="form-control">
                                                                @if ($errors->has('name'))
                                                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email"  id="email" placeholder="Your Email" class="form-control">
                                                                @if ($errors->has('email'))
                                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="subject">Subject</label>
                                                        <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
                                                        @if ($errors->has('subject'))
                                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                                        @endif
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="message">Message</label>
                                                        <textarea name="message" id="message" rows="10" cols="80" placeholder="Your Message" class="form-control"></textarea>
                                                        @if ($errors->has('message'))
                                                            <span class="text-danger">{{ $errors->first('message') }}</span>
                                                        @endif
                                                    </div>
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
                                                    {{-- <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cbxsendme" name="cbxsendme" value="on">
                                                                <label class="custom-control-label" for="cbxsendme">Send Me CC</label>
                                                            </div> --}}

                                                    <button class="btn btn-reg">Send</button>
                                                    
                                                    <div id="cbx-formalert"></div>
                                                </form>
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
