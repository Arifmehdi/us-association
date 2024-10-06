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
                            <h1 class="h2">About Us</h1>
                            <p>
                                AASOA of Alabama offers opportunities for retailers as well as suppliers. 
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=================================-->
        <!--=         Upcoming Event        =-->
        <!--=================================-->
        <section id="page-content-wrap">
            <div class="about-page-content-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 m-auto">
                            <!-- Single about text start -->
                            <div class="row">
                                <div class="col-lg-6 mb-4"> <!-- Column for the image -->
                                    <img src="{{ asset('frontend/assets/images/about-page/about-img-1.jpg') }}" alt="About" 
                                         class="img-fluid img-left" style="-webkit-filter:grayscale(0); filter:grayscale(0);">
                                </div>
                                <div class="col-lg-6 mb-4"> <!-- Column for the content -->
                                    <div class="single-about-text">
                                        <h2>AASOA Chairman's message</h2>
                                        <p>Allow me to thank you for giving me the opportunity to serve as a Trustee Chairman of one of the most vibrant organizations in Alabama.</p>
                                        <p>I will do my best to achieve the goals established by the Asian American Store Owners Association with support from the executive committee and advisory board members.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single about text End -->

                            <!-- Single about text start -->
                            <div style="margin-top:125px" class="row">
                                <div style="width:48%; margin-right:15px" class="col-lg-6 mb-4"> <!-- Column for the content -->
                                    <div class="single-about-text">
                                        <h2 class="h3">Our First Achievement in History</h2>
                                        <p>AASOA of Alabama offers opportunities for retailers as well as suppliers to come together and strengthen business relationships. By continually striving to develop benefits for our members through our Preferred.</p>
                                        <p>To constantly strive to meet or exceed our customer needs and expectations of price, service, and selection. To this end, we will perform periodic reviews of the marketplace to improve our offerings. AASOA of Alabama was established in 2012 and we are very fortunate to be able to serve local business owners.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4"> <!-- Column for the image -->
                                    <img style="height:400px; width:100%" src="{{ asset('frontend/assets/images/about-page/about-img-2.jpg') }}" alt="About" class="img-fluid img-right">
                                </div>
                            </div>
                            <!-- Single about text End -->

                            {{-- <!-- Single about text start -->
                            <div class="single-about-text">
                                <span class="year">2006</span>
                                <img src="{{ asset('frontend/assets/images/about-page/about-img-3.jpg') }}" alt="About" class="img-fluid img-left">
                                <h2 class="h3">Our New Genaretion</h2>
                                <p>Aenean viverra rhoncus sspede. Phasellssus leo dolor, tempus non, auctor endrerit
                                    quis, nisi. Fusce neque. Donec vitae orci sed dolor rutrum ausssctor. Sed
                                    fringilla mauris sit amet nibh.</p>
                                <p>Etiam rhoncus. Ut lddffdfqwqeo. Morbi mollis tellus ac sapien. Fusce fermentum oo
                                    nec arcu. Quisque manisl idUt leo. Morbi mollis tellus ac sapien. Fusce
                                    fermentum oo nec ante tempus hendrerit. Curabitur at lacus ac velit ornare
                                    lobortis. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                    turpis. Quisque id mi.Aenean viverra rhoncus pede. Phasellus leo dolor, tempus non, auctor
                                    endrerit quis, nisi.
                                    Fusce neque. Donec vitae orci sed dolor rutrum auctor. Sed fringilla mauris sit amet
                                    nibh.Etiam rhoncus. Ut leo. Morbi mollis tellus ac sapien. Fusce fermentum oo nec arcu.
                                    Quisque malesuada placerat nisl. Etiam sit amet orci eget faucitincidunt. Quisque
                                    rutrum. Pellentesque posuere. Praesent ac massa at ligula laoureet iaculis. Cras risus
                                    ipsum, faucibus ut, ullamcorper id, varius ac, leo.</p>
                            </div>
                            <!-- Single about text End --> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=========================-->
        <!--=         Fun fact        =-->
        <!--==========================-->
        {{-- <section id="funfact-area">
            <div class="container-fluid">
                <div class="row text-center">
                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="{{ asset('frontend/assets/images/fun-fact/user.svg') }}" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5 class="funfact-count">4025</h5>
                                <p>Members</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="{{ asset('frontend/assets/images/fun-fact/picture.svg') }}" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5 class="funfact-count">8725</h5>
                                <p>Photos</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="{{ asset('frontend/assets/images/fun-fact/event.svg') }}" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5><span class="funfact-count">231</span>+</h5>
                                <p>Events</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->

                    <!--== Single FunFact Start ==-->
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-funfact-wrap">
                            <div class="funfact-icon">
                                <img src="{{ asset('frontend/assets/images/fun-fact/medal.svg') }}" alt="Funfact">
                            </div>
                            <div class="funfact-info">
                                <h5><span class="funfact-count">32</span>+</h5>
                                <p>Awards</p>
                            </div>
                        </div>
                    </div>
                    <!--== Single FunFact End ==-->
                </div>
            </div>
        </section>--}}

        <!--===========================-->
        <!--=         Committee       =-->
        <!--===========================-->
                {{--<section class="our-honorable-commitee section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="about-page-area-title">
                            <h2>Our Honorable Committe</h2>
                        </div>
                    </div>
                </div>

                <div class="honorable-committee-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-1.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>BRYAN WATSHON<span class="committee-deg">President</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-2.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>CARLOS HELU<span class="committee-deg">Vice President</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-3.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>ANGLE TUNI<span class="committee-deg">Secretary</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-5.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>ALEX KALIFA<span class="committee-deg">Asst Secretary</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-6.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>ALEX Tuntuni<span class="committee-deg">Office Secretary</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-7.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>MAL MUHIT<span class="committee-deg">Finance Member</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-8.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>PRINCE RIMON<span class="committee-deg">Committee Member</span></h3>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="single-committee-member">
                                <div class="commitee-thumb">
                                    <img src="{{ asset('frontend/assets/images/committee/commitee-1.jpg') }}" class="img-fluid" alt="Committee" />
                                </div>
                                <h3>PRINCE KAMLA<span class="committee-deg">Committee Member</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> --}}

    <!--=============================-->
    <!--=         Testimonial       =-->
    <!--=============================-->
    {{-- <section class="people-to-say section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="about-page-area-title">
                        <h2>Some Speech About Us</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="people-to-say-wrapper owl-carousel">
                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{ asset('frontend/assets/images/testimonial/testi-3.png') }}" alt="Alumni" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Robert Albert <span class="people-deg">Founder at Boxr</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{ asset('frontend/assets/images/testimonial/testi-1.png') }}" alt="" class="img-fluid">
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Akamla Albert <span class="people-deg">Founder at Kamlakana</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{ asset('frontend/assets/images/testimonial/testi-2.png') }}" alt="" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Taklo Nahid <span class="people-deg">Minister at Nara</span></h4>
                        </div>
                        <!-- Single People Testimonial -->

                        <!-- Single People Testimonial -->
                        <div class="single-testimonial-wrap">
                            <div class="people-thumb">
                                <img src="{{ asset('frontend/assets/images/testimonial/testi-2.png') }}" alt="" class="img-fluid" />
                            </div>
                            <i class="quote-icon"></i>
                            <p>Exxcellent Lorem ipsum dolor sit amet, ectetur adipisicing elit, sed do eimod tempor
                                inciidunt ut
                                labore et dolorgna aliqua. Ut enim ad minim ostrud. </p>
                            <h4>Mal Muhit<span class="people-deg">Founder at Kamlagiri</span></h4>
                        </div>
                        <!-- Single People Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
