@extends('website.layouts.app')
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Patua+One&display=swap');
    body{
        
        background: white;
    }
    .about-back {
    background-image: url('{{ asset('frontend/assets/images/globe.png') }}'); /* Path to your image */
    background-size: 69% auto; /* Image covers 60% of the width, height is automatic (maintains aspect ratio) */
    background-position: right center; /* Align the image to the right */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    padding-top:35px;
}
@media (max-width: 991px) {
    .about-back {
    
    background-size: 100% auto; 
    
}
}




</style>
        <!--==========================-->
        <!--=         About        =-->
        <!--==========================-->
<section id="page-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto text-center">
                        <div class="page-title-content">
                            <h1 class="h2">About Us</h1>
                            
                            <!-- <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="page-content-wrap">
            <div class="event-page-content-wrap">
                <div class="container">
                    <div>
                        <div class="about-back" style="">
                            <h1  style="font-size:40px; font-weight:bold; color:#54a3e2; padding-top:25px;font-family: "Patua One", Arial, Tahoma, sans-serif !important;">Welcome to</h1>
                            <h1 style="font-size:40px; font-weight:bold; color:#54a3e2" class="mb-5">Asian American Store Owners Association</h1>
                            <p style="font-size:16px; font-weight:600; width:86%; color:rgb(112, 111, 111)" class="mb-5">Established in 2009 the Asian American Store Owners Association has quickly tripled its membership allowing store owners to stay current on industry trends, network with other business owners, receive discounts and attend the annual AASOA Tradeshow and Banquet free.</p>
                            <p style="font-size:16px;font-weight:600; width:86%; color:rgb(112, 111, 111)">Representing almost over 8300 store owners throughout nationwide. We provide members the tools they need to grow and prosper. Almost 90% of our members are independent store owners and our data collection allows us to create buying power for them, as well as our chain store members. In addition, we keep up with industry news, send out important news via email newsletters, bring you product news and research trends.</p>
                            <p style="font-size:16px;font-weight:600; width:86%; color:rgb(112, 111, 111)" class="mt-5 mb-5">The Asian American Store Owners Association is here for you and we invite you to become a part of this growing organization.</p>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>

        
        <section id="page-content-wrap">
            <div class="about-page-content-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 m-auto">
                            
                            <div class="row">

                                <div class="col-lg-6 mb-4">
                                    <div style="position: relative; overflow: hidden;">
                                        <div style="width: 96%; height: 250px; border: 2px solid rgb(3, 194, 201); border-radius: 10px; margin-top: 55px; margin-left: 15px;">
                                            <!-- Optional content inside the border div can go here -->
                                        </div>
                                        <img src="{{ asset('frontend/assets/images/about-page/about-img-1.jpg') }}" 
                                             alt="About" class="img-fluid img-right" 
                                             style="position: absolute; top: -42px; left: 0; height: calc(100% + 40px); width: 100%; object-fit: cover; -webkit-filter: grayscale(0); filter: grayscale(0);">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 mb-4"> 
                                    <div style="width:95%; margin-top:55px; margin-left:25px" class="single-about-text">
                                        <h3 style="font-weight:600" class="about-title">AASOA Chairman's message</h3>
                                        <p>Allow me to thank you for giving me the opportunity to serve as a Trustee Chairman of one of the most vibrant organizations in Alabama.</p>
                                        <p>I will do my best to achieve the goals established by the Asian American Store Owners Association with support from the executive committee and advisory board members.</p>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div style="margin-top:125px" class="row second">
                               
                                
                                
                                <div style="" class="col-lg-6 mb-4"> 
                                    <div style="width:95%; margin-top:55px; margin-right:25px" class="single-about-text">
                                        <h3 style="font-weight:600" class="about-title">Our First Achievement in History</h3>
                                        <p>AASOA of Alabama offers opportunities for retailers as well as suppliers to come together and strengthen business relationships. By continually striving to develop benefits for our members through our Preferred.</p>
                                        <p>To constantly strive to meet or exceed our customer needs and expectations of price, service, and selection. To this end, we will perform periodic reviews of the marketplace to improve our offerings. AASOA of Alabama was established in 2012 and we are very fortunate to be able to serve local business owners.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div style="position: relative;">
                                        <div style="width: 96%; height: 400px; border: 2px solid rgb(3, 194, 201); border-radius: 10px; overflow: hidden; margin-top: 55px; margin-left: 15px;">
                                            <!-- Optional content inside the border div can go here -->
                                        </div>
                                        <img style="position: absolute; top: -52px; left: 0; height: calc(100% + 48px); width: 100%; object-fit: cover; border-right-bottom-radius: 27px;" 
                                             src="{{ asset('frontend/assets/images/about-page/about-img-2.jpg') }}" 
                                             alt="About" class="img-fluid img-right">
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="page-content-wrap">
            <div class="contact-page-wrap section-padding">
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
                                            <form action="#" id="cbx-contact-form">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="cbxname">Name</label>
                                                            <input type="text" name="cbxname" required id="cbxname" placeholder="Your Full Name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-group">
                                                            <label for="cbxemail">Email</label>
                                                            <input type="email" name="cbxemail" required id="cbxemail" placeholder="Your Email" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="cbxsubject">Subject</label>
                                                    <input type="text" name="cbxsubject" id="cbxsubject" placeholder="Subject" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label for="cbxmessage">Message</label>
                                                    <textarea name="cbxmessage" id="cbxmessage" rows="10" cols="80" placeholder="Your Message" class="form-control"></textarea>
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
