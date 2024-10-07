@extends('website.layouts.app')
@section('content')
<style>
    body{
        font-family: "Patua One", Arial, Tahoma, sans-serif !important;
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
                            <p>
                                AASOA of Alabama about us section. 
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="page-content-wrap">
            <div class="event-page-content-wrap section-padding">
                <div class="container">
                    
                    <div style="">
                        <h1 style="font-size:45px; font-weight:bold; color:#54a3e2">Welcome to</h1>
                        <h1 style="font-size:45px; font-weight:bold; color:#54a3e2">Asian American Store Owners Association</h1>
                        <p style="font-size:16px; font-weight:500">Established in 2009 the Asian American Store Owners Association has quickly tripled its membership allowing store owners to stay current on industry trends, network with other business owners, receive discounts and attend the annual AASOA Tradeshow and Banquet free.</p>
                        <p style="font-size:14px;font-weight:500">Representing almost over 8300 store owners throughout nationwide. We provide members the tools they need to grow and prosper. Almost 90% of our members are independent store owners and our data collection allows us to create buying power for them, as well as our chain store members. In addition, we keep up with industry news, send out important news via email newsletters, bring you product news and research trends.</p>
                        <p style="font-size:14px;font-weight:500" class="mt-5 mb-5">The Asian American Store Owners Association is here for you and we invite you to become a part of this growing organization.</p>
                        
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
                                    <img src="{{ asset('frontend/assets/images/about-page/about-img-1.jpg') }}" alt="About" 
                                         class="img-fluid img-left" style="-webkit-filter:grayscale(0); filter:grayscale(0);">
                                </div>
                                <div class="col-lg-6 mb-4"> 
                                    <div class="single-about-text">
                                        <h2>AASOA Chairman's message</h2>
                                        <p>Allow me to thank you for giving me the opportunity to serve as a Trustee Chairman of one of the most vibrant organizations in Alabama.</p>
                                        <p>I will do my best to achieve the goals established by the Asian American Store Owners Association with support from the executive committee and advisory board members.</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div style="margin-top:125px" class="row">
                                <div style="width:48%; margin-right:15px" class="col-lg-6 mb-4"> 
                                    <div class="single-about-text">
                                        <h2 class="h3">Our First Achievement in History</h2>
                                        <p>AASOA of Alabama offers opportunities for retailers as well as suppliers to come together and strengthen business relationships. By continually striving to develop benefits for our members through our Preferred.</p>
                                        <p>To constantly strive to meet or exceed our customer needs and expectations of price, service, and selection. To this end, we will perform periodic reviews of the marketplace to improve our offerings. AASOA of Alabama was established in 2012 and we are very fortunate to be able to serve local business owners.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4"> 
                                    <img style="height:400px; width:100%" src="{{ asset('frontend/assets/images/about-page/about-img-2.jpg') }}" alt="About" class="img-fluid img-right">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
@endsection
