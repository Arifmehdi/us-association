@extends('website.layouts.app')
@section('content')
<style>
    .slider-bac-first{
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width:100%;
        height:600px;
        background-image:url({{ asset('frontend/assets/images/slider/t1.jpg') }})

    }
    .fourth-slide{
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width:100%;
        height:600px;
        background-image:url({{ asset('frontend/assets/images/slider/m1.jpg') }})

    }
    .slider-fifth{
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width:100%;
        height:600px;
        background-image:url({{ asset('frontend/assets/images/slider/h1.jpg') }})

    }
    @media (max-width: 1500px) {
    .slider-bac-first {
        background-image: url({{ asset('frontend/assets/images/slider/t2.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
    .fourth-slide {
        background-image: url({{ asset('frontend/assets/images/slider/m2.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
    .slider-fifth {
        background-image: url({{ asset('frontend/assets/images/slider/h2.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
}
    @media (max-width: 1200px) {
    .slider-bac-first {
        background-image: url({{ asset('frontend/assets/images/slider/t3.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
    .slider-fifth {
        background-image: url({{ asset('frontend/assets/images/slider/h3.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
}

/* Small screens */
@media (max-width: 768px) {
    .slider-bac-first {
        background-image: url({{ asset('frontend/assets/images/slider/t4.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
}
@media (max-width: 500px) {
    .slider-bac-first {
        background-image: url({{ asset('frontend/assets/images/slider/t5.jpg') }});
        height: 600px; /* Adjust height if needed */
    }
}


</style>

<!--==========================-->

<!--=         Banner         =-->
<!--==========================-->
<section id="slider-area">
    <div class="slider-active-wrap owl-carousel text-center text-md-start">


        <!-- <div class="single-slide-wrap slider-bac-first" style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        {{-- <div class="slider-content">
                            <h1>We Are Proud</h1>
                            <h3>Member of <span>AASAO</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                                need academic, relocation, career, projects, mentorship, etc. you can ask the community
                                and get responses in three.</p>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div> -->

        <div class="single-slide-wrap slider-fifth" style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="slider-content">
                            <h1>2025 Gulf Coast Expo</h1>
                            <h3>Join Us <span>June 5th 2025</span></h3>
                            <p>Alabama's only Buying Trade show.</p>
                            <p>At Renaissance  Convention Centre, Montgomery, AL.</p>
                            <a href="{{ asset('frontend/assets/document/AASOA_Exhibitor_2025_v02.pdf') }}" style="border-radius:5px" class="btn btn-brand about-btn mt-3" target=-"_blank">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="single-slide-wrap " style="background-size: cover; background-position: center;
        background-repeat: no-repeat;
        width:100%;
        height:600px; background-image:url({{ asset('frontend/assets/images/slider/b.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        {{-- <div class="slider-content">
                            <h1>We Are Proud</h1>
                            <h3>Member of <span>AASAO</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                                need academic, relocation, career, projects, mentorship, etc. you can ask the community
                                and get responses in three.</p>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="single-slide-wrap " style="background-size: cover; background-position: center;
        background-repeat: no-repeat;
        width:100%;
        height:600px; background-image:url({{ asset('frontend/assets/images/slider/l.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        {{-- <div class="slider-content">
                            <h2>We Are Not Proud</h2>
                            <h3>Member of <span>AASAO</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                                need academic, relocation, career, projects, mentorship, etc. you can ask the community
                                and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand">our mission</a>
                                <a href="#" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="single-slide-wrap fourth-slide" style="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        {{-- <div class="slider-content">
                            <h2>Why Proud for u</h2>
                            <h3>Member of <span>AASAO</span></h3>
                            <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                                need academic, relocation, career, projects, mentorship, etc. you can ask the community
                                and get responses in three.</p>
                            <div class="slider-btn">
                                <a href="#" class="btn btn-brand">our mission</a>
                                <a href="#" class="btn btn-brand-rev">our story</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    {{-- <div class="social-networks-icon">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> <span>3.2m Followers</span></a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i> <span>7.2k Likes</span></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i> <span>2.2k Subscribers</span></a></li>
        </ul>
    </div>--}}

</section>


<!--=================================-->
<!--=         Upcoming Event        =-->
<!--=================================-->
{{-- <section id="upcoming-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="upcoming-event-wrap">
                    <div class="up-event-titile">
                        <h3>Upcoming event</h3>
                    </div>
                    <div class="upcoming-event-content owl-carousel">
                        <!-- No 1 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="{{ asset('frontend/assets/images/event/event-img-1.jpg') }}"
                                            class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s 27 February 2023</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="2024/9/10"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="#">We are going to arrange a get
                                                        together!</a></h3>
                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisi ut aliquipv ex ea.</p>
                                                <a href="#" class="btn btn-brand btn-brand-dark">join
                                                    with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->


                        <!-- No 2 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="{{ asset('frontend/assets/images/event/event-img-2.jpg') }}"
                                            class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s 27 February 2023</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="2018/9/10"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="#">We are going to arrange a get
                                                        together!</a></h3>
                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisi ut aliquipv ex ea.</p>
                                                <a href="#" class="btn btn-brand btn-brand-dark">join
                                                    with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->


                        <!-- No 3 Event -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="{{ asset('frontend/assets/images/event/event-img-3.jpg') }}"
                                            class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date">It’s 27 February 2023</h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="2025/9/10"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="#">We are going to arrange a get
                                                        together!</a></h3>
                                                <p>Hello everybody Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim and minim veniam, quis nostrud exercitation ullamco
                                                    laboris nisi ut aliquipv ex ea.</p>
                                                <a href="#" class="btn btn-brand btn-brand-dark">join
                                                    with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- partial -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <a href="{{ route('event.details') }}" class="btn w-100 mb-4" style="background: #dd9933; height: 45px; line-height: 30px; border-radius: 5px; font-size: 16px; color: rgb(39, 38, 38);">
                    <i class="fa fa-globe me-3"></i> Gulf Coast Expo 2025
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScwmrBf9cIhn-xEQ60DmAys0Ib-xEcK8uKtPIu_EI2VBi_Upw/viewform" target="_blank" class="btn w-100" style="background: #dd9933; height: 45px; line-height: 30px; border-radius: 5px; font-size: 16px; color: rgb(39, 38, 38);">
                    <i class="fa fa-id-card me-3"></i> Exhibitor Registration
                </a>
            </div>
        </div>
    </div>

</section>


<!--=========================-->
<!--=         About         =-->
<!--=========================-->
<section id="responsibility-area" style="margin: 0 auto"  class="section-padding">
    <div class="about-area-wrapper">
        <div class="container">
            <div class="row justify-content-start">
                <!-- Image Column -->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="about-thumb">
                        <img src="{{ asset('frontend/assets/images/misc/about-bg.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <!-- Content Column -->
                <div class="col-lg-6">
                    <div style="width:95%; margin-left:29px" class="about-content-wrap">
                        <div class="section-title text-lg-left">
                            <h2 class="">Our Mission</h2>
                        </div>
                        <p style="margin-top:-45px">
                            To constantly strive to meet or exceed our customer needs and expectations of price, service, and selection.
                            To this end, we will perform periodic reviews of the marketplace to improve our offerings.
                            AASOA of Alabama was established in 2012 and we are very fortunate to be able to serve local business owners.
                        </p>
                        <a href="#" style="border-radius:5px" class="btn btn-brand about-btn mt-3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--=================================-->
<!--=         See For        =-->
<!--=================================-->


<!--= Responsibility Section with 6 Cards =-->
<section  class="section-padding">
    <div class="container">
        {{--
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>See For</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==--> --}}

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-responsibility"
                    style="min-width: 250px; max-width: 350px; min-height: 350px; height: auto; margin: 20px auto; border: 1px solid #ddd; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius:6px">
                    <img src="{{ asset('frontend/assets/images/responsibility/01.png') }}" alt="Responsibility"
                        style="max-width: 100%; height: auto;">
                    <h5 class="mt-4">About US</h5>
                    <p>AASOA offers opportunities for retailers as well as suppliers to come together
                        and strengthen business relationships. By continually striving to develop benefits for our
                        members through our Preferred</p>
                    <a href="{{ route('about') }}"><button
                            style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">Read
                            More</button></a>

                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-responsibility"
                    style="min-width: 250px; max-width: 350px; min-height: 350px; height: auto; margin: 20px auto; border: 1px solid #ddd; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius:6px">
                    <img src="{{ asset('frontend/assets/images/responsibility/02.png') }}" alt="Responsibility"
                        style="max-width: 100%; height: auto;">
                    <h5 class="mt-4">Membership</h5>
                    <p>Retail Membership Supplier Membership AASOA membership is open to all store owners of gas
                        stations,
                        convenience stores and liquor stores. Whether you are an independent owner or part of a large
                    </p>
                    <a href="{{ route('membership') }}"><button
                            style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">Read
                            More</button></a>

                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-responsibility"
                    style="min-width: 250px; max-width: 350px; min-height: 350px; height: auto; margin: 20px auto; border: 1px solid #ddd; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius:6px">
                    <img src="{{ asset('frontend/assets/images/responsibility/03.png') }}" alt="Responsibility"
                        style="max-width: 100%; height: auto;">
                    <h5 class="mt-4">Mission</h5>
                    <p>To constantly strive to meet or exceed our customer needs and expectations of price, service,
                        and selection. To this end, we will perform periodic reviews of the marketplace to improve our
                        offerings.</p>
                    <button
                        style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">Read
                        More</button>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-responsibility"
                    style="min-width: 250px; max-width: 350px; min-height: 350px; height: auto; margin: 20px auto; border: 1px solid #ddd; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius:6px">
                    <img src="{{ asset('frontend/assets/images/responsibility/04.png') }}" alt="Responsibility"
                        style="max-width: 100%; height: auto;">
                    <h5 class="mt-4">2025 Gulf Coast Expo</h5>
                    <ul>
                        <li>June 5, 2025</li>
                        <li>Renaissance Montgomery Hotel & Spa at the Convention Centre, Montgomery, AL</li>
                        <li><a href="{{ route('event') }}"><u>Show Details</u></a> </li>
                        <br>
                    </ul>
                    <a href="{{ route('event') }}"><button
                            style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">Read
                            More</button></a>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-responsibility"
                    style="min-width: 250px; max-width: 350px; min-height: 350px; height: auto; margin: 20px auto; border: 1px solid #ddd; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius:6px">
                    <img src="{{ asset('frontend/assets/images/responsibility/03.png') }}" alt="Responsibility"
                        style="max-width: 100%; height: auto;">
                    <h5 class="mt-4">Sponsor</h5>
                    <ul>
                        <li>Rino Air</li>
                        <li>DTT</li>
                        <li>Anryd Enterprises</li>
                        <br>
                        <br>
                    </ul>
                    <a href="#"><button
                            style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">Read
                            More</button></a>

                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-4 col-sm-6">
                <div class="single-responsibility"
                    style="min-width: 250px; max-width: 350px; min-height: 350px; height: auto; margin: 20px auto; border: 1px solid #ddd; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);border-radius:6px">
                    <img src="{{ asset('frontend/assets/images/responsibility/02.png') }}" alt="Responsibility"
                        style="max-width: 100%; height: auto;">
                    <h5 class="mt-4">Blogs</h5>
                    <p>To constantly strive to meet or exceed our customer needs and expectations of price,
                        service, and selection. To this end, we will perform periodic reviews of the marketplace to
                        improve our offerings.</p>
                    <a href="{{ route('blog') }}"><button
                            style="margin-top: 10px; padding: 8px 16px; background-color: #007bff; color: white; border: none; cursor: pointer; border-radius: 5px;">Read
                            More</button></a>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section>




<!--=================================-->
<!--=         Responsibility        =-->
<!--=================================-->
{{-- <section id="responsibility-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Responsibility</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Responsibility Content Wrapper ==-->
        <div class="row text-center text-sm-left">
            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{ asset('frontend/assets/images/responsibility/01.png') }}" alt="Responsibility">
                    <h4>Scholarship</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{ asset('frontend/assets/images/responsibility/02.png') }}" alt="Responsibility">
                    <h4>Help Current Students</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{ asset('frontend/assets/images/responsibility/03.png') }}" alt="Responsibility">
                    <h4>Help Our University</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->

            <!--== Single Responsibility Start ==-->
            <div class="col-lg-3 col-sm-6">
                <div class="single-responsibility">
                    <img src="{{ asset('frontend/assets/images/responsibility/04.png') }}" alt="Responsibility">
                    <h4>Build Our Community</h4>
                    <p>De create building thinking about your requirment and latest treand on our marketplace area</p>
                </div>
            </div>
            <!--== Single Responsibility End ==-->
        </div>
        <!--== Responsibility Content Wrapper ==-->
    </div>
</section> --}}

<!--================================-->
<!--=         Fun Fact        =-->
<!--================================-->
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
</section> --}}

<!--======================-->
<!--=         Job        =-->
<!--======================-->
{{-- <section id="job-opportunity" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent Jobs</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Job opportunity Wrapper ==-->
        <div class="job-opportunity-wrapper">
            <div class="row">
                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="{{ asset('frontend/assets/images/job/compnay-logo-1.png') }}"
                                            alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Urgently Need Five Data Center Specialist</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus
                                est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="{{ asset('frontend/assets/images/job/compnay-logo-2.png') }}"
                                            alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Product Owner (m/f) for our Charter Business</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus
                                est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="{{ asset('frontend/assets/images/job/compnay-logo-1.png') }}"
                                            alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Backend Developer (Java) (m/f) wanted for leading</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus
                                est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job btn-expired disabled">Expired</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="{{ asset('frontend/assets/images/job/compnay-logo-2.png') }}"
                                            alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">API Architect and Lead - Python, SQLAlchemy, GraphQL</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus
                                est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="{{ asset('frontend/assets/images/job/compnay-logo-3.png') }}"
                                            alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Remotely - Javascript Developer Node.js</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus
                                est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job btn-expired disabled">Expired</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->

                <!--== Single Job opportunity Start ==-->
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="single-job-opportunity">
                        <div class="job-opportunity-text">
                            <div class="job-oppor-logo">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <img src="{{ asset('frontend/assets/images/job/compnay-logo-4.png') }}"
                                            alt="Job">
                                    </div>
                                </div>
                            </div>
                            <h3><a href="#">Five Years Experience Data Center Specialist Needed</a></h3>
                            <p>Claritas est etiam procsus dymicus, qui sequitur mutationem Claritas est etiam procsus
                                est etiam procsus dymicus.<a href="#">[...]</a></p>
                        </div>
                        <a href="#" class="btn btn-job">Apply now</a>
                    </div>
                </div>
                <!--== Single Job opportunity End ==-->
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" class="btn btn-brand btn-loadmore">All job list</a>
                </div>
            </div>
        </div>
        <!--== Job opportunity Wrapper ==-->
    </div>
</section> --}}
{{--
<!--==========================-->
<!--=         Gallery        =-->
<!--==========================-->
<section id="gallery-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our gallery</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Gallery Container Warpper ==-->
        <div class="gallery-content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Gallery Menu Start -->
                    <div class="gallery-menu text-center">
                        <span class="active" data-filter="*">All</span>
                        <span data-filter=".old">Old Memories</span>
                        <span data-filter=".event">Event</span>
                        <span data-filter=".pic">Our Picnic</span>
                        <span class="d-none d-sm-inline-block" data-filter=".recent">Recent</span>
                    </div>
                    <!-- Gallery Menu End -->

                    <!-- Gallery Item content Start -->
                    <div class="row gallery-gird">
                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 recent event">
                            <div class="single-gallery-item gallery-bg-1">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="{{ asset('frontend/assets/images/gallery/gellary-img-1.jpg') }}"
                                        class="btn-zoom image-popup">
                                        <img src="{{ asset('frontend/assets/images/zoom-icon.png') }}" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 old event pic">
                            <div class="single-gallery-item video gallery-bg-2">
                                <a href="https://www.youtube.com/watch?v=uWQ_8CtvzoY?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                    class="btn btn-video-play video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 recent pic">
                            <div class="single-gallery-item gallery-bg-3">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="{{ asset('frontend/assets/images/gallery/gellary-img-3.jpg') }}"
                                        class="btn-zoom image-popup">
                                        <img src="{{ asset('frontend/assets/images/zoom-icon.png') }}" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 old">
                            <div class="single-gallery-item gallery-bg-4">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="{{ asset('frontend/assets/images/gallery/gellary-img-4.jpg') }}"
                                        class="btn-zoom image-popup">
                                        <img src="{{ asset('frontend/assets/images/zoom-icon.png') }}" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 pic event">
                            <div class="single-gallery-item gallery-bg-5">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="{{ asset('frontend/assets/images/gallery/gellary-img-5.jpg') }}"
                                        class="btn-zoom image-popup">
                                        <img src="{{ asset('frontend/assets/images/zoom-icon.png') }}" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 old recent">
                            <div class="single-gallery-item gallery-bg-6">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="{{ asset('frontend/assets/images/gallery/gellary-img-6.jpg') }}"
                                        class="btn-zoom image-popup">
                                        <img src="{{ asset('frontend/assets/images/zoom-icon.png') }}" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 pic">
                            <div class="single-gallery-item video gallery-bg-7">
                                <a href="https://www.youtube.com/watch?v=gXFATcwrO-U?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=1&amp;loop=1"
                                    class="btn btn-video-play video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <!-- Single Gallery End -->

                        <!-- Single Gallery Start -->
                        <div class="col-lg-3  col-sm-6 pic recent old">
                            <div class="single-gallery-item gallery-bg-8">
                                <div class="gallery-hvr-wrap">
                                    <div class="gallery-hvr-text">
                                        <h4>University Cumpus</h4>
                                        <p class="gallery-event-date">28 Oct, 2018</p>
                                    </div>
                                    <a href="{{ asset('frontend/assets/images/gallery/gellary-img-8.jpg') }}"
                                        class="btn-zoom image-popup">
                                        <img src="{{ asset('frontend/assets/images/zoom-icon.png') }}" alt="a">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Gallery End -->
                    </div>
                    <!-- Gallery Item content End -->
                </div>
            </div>
        </div>
        <!--== Gallery Container Warpper==-->
    </div>
</section>

<!--=================================-->
<!--=         Call To Action        =-->
<!--=================================-->
<section id="scholership-promo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="scholership-promo-text">
                    <h2>AASAO ALABAMA Provide <span>opportunity</span> For grow!</h2>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the need
                        academic, relocation, career, projects, mentorship, etc you can ask the community and get </p>
                    <a href="{{ route('membership') }}" class="btn btn-brand">Membership</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Scholership Promo Area End ==--> --}}



<!--=============================-->
<!--=         jjj        =-->
<!--=============================-->


<div id="responsibility-area">
    <div class="typography-page-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4"> <!-- Column for the image -->
                    <img style="height:300px" src="{{ asset('frontend/assets/images/about-page/about-img-1.jpg') }}" alt="Image"
                        class="img-fluid" /> <!-- Ensure image is responsive -->
                </div>
                <div class="col-lg-6 mb-4 mess"> <!-- Column for the content -->
                    <article>
                        <h4>AASOA Chairman's message</h4>
                        <p>Allow me to thank you for giving me the opportunity to serve as a Trustee Chairman of one of
                            the most vibrant organizations in Alabama.
                            I will do my best to achieve the goals established by the Asian American Store Owners
                            Association with support from the executive committee and
                            advisory board members.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

<!--=============================-->
<!--=         Testimonial       =-->
<!--=============================-->
<section class="people-to-say section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="about-page-area-title">
                    <h2>Testimonial</h2>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="people-to-say-wrapper owl-carousel">
                    <!-- Single People Testimonial -->
                    <div class="single-testimonial-wrap">
                        <div class="people-thumb">
                            <img src="{{ asset('frontend/assets/images/testimonial/testi-1.png') }}" alt="Alumni"
                                class="img-fluid" />
                        </div>
                        <i class="quote-icon"></i>
                        <p>"I’ve been working with AASOA for years now and cannot give enough positive feedback on my
                            experience with them. 
                            From seeing the way they provide unbiased and honest recommendations to their members on all
                            types of business needs to be able to solidify my position as a
                            preferred vendor – the board members have shown nothing but absolute professionalism. 
                            Knowing how much they strive to provide the best
                            pportunities for their members has given me complete faith and confidence in their
                            association and I love working with them. "</p>
                        <h4>New Member <span class="people-deg">Mobile, AL</span></h4>
                    </div>
                    <!-- Single People Testimonial -->

                    <!-- Single People Testimonial -->
                    <div class="single-testimonial-wrap">
                        <div class="people-thumb">
                            <img src="{{ asset('frontend/assets/images/testimonial/testi-1.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <i class="quote-icon"></i>

                        <p>"I could not imagine a better association to work with than AASOA. 
                            In our numerous years of working with companies and individual owners, we have found the
                            absolute best experience comes from AASOA. 
                            The organization is a great market place for both vendor and store owner.  Bringing together
                            best practices with like minded individuals that want the best for their customers. 
                            It is truly an honor to work you and we look forward to many more years of providing great
                            service and customer loyalty while building both of our brands. "</p>

                        <h4>New Member<span class="people-deg">Mobile, AL</span></h4>
                    </div>
                    <!-- Single People Testimonial -->
                    <!-- Single People Testimonial -->
                    <div class="single-testimonial-wrap">
                        <div class="people-thumb">
                            <img src="{{ asset('frontend/assets/images/testimonial/testi-1.png') }}" alt="Alumni"
                                class="img-fluid" />
                        </div>
                        <i class="quote-icon"></i>
                        <p>"I’ve been working with AASOA for years now and cannot give enough positive feedback on my
                            experience with them. 
                            From seeing the way they provide unbiased and honest recommendations to their members on all
                            types of business needs to be able to solidify my position as a
                            preferred vendor – the board members have shown nothing but absolute professionalism. 
                            Knowing how much they strive to provide the best
                            pportunities for their members has given me complete faith and confidence in their
                            association and I love working with them. "</p>
                        <h4>New Member <span class="people-deg">Mobile, AL</span></h4>
                    </div>
                    <!-- Single People Testimonial -->

                    <!-- Single People Testimonial -->
                    <div class="single-testimonial-wrap">
                        <div class="people-thumb">
                            <img src="{{ asset('frontend/assets/images/testimonial/testi-1.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <i class="quote-icon"></i>
                        <p>"I could not imagine a better association to work with than AASOA. 
                            In our numerous years of working with companies and individual owners, we have found the
                            absolute best experience comes from AASOA. 
                            The organization is a great market place for both vendor and store owner.  Bringing together
                            best practices with like minded individuals that want the best for their customers. 
                            It is truly an honor to work you and we look forward to many more years of providing great
                            service and customer loyalty while building both of our brands. "</p>
                        <h4>New Member<span class="people-deg">Mobile, AL</span></h4>
                    </div>
                    <!-- Single People Testimonial -->

                </div>
            </div>
        </div>
    </div>
</section>


{{--
<!--=======================-->
<!--=         Blog        =-->
<!--=======================-->
<section id="blog-area" class="section-padding">
    <div class="container">
        <!--== Section Title Start ==-->
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Recent News</h2>
                </div>
            </div>
        </div>
        <!--== Section Title End ==-->

        <!--== Blog Content Wrapper ==-->
        <div class="row">
            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="{{ asset('frontend/assets/images/blog/blog-1.jpg') }}" alt="Blog"
                                class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-pic">
                                    <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Daney williams</h5>
                                    <p>2 hours Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">Recently we create a maassive project that</a></h3>
                        <p>This is a big project of our company, we are happy to completed this type projec which are
                            get world famous award</p>
                        <a href="#" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->

            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="{{ asset('frontend/assets/images/blog/blog-2.jpg') }}" alt="Blog"
                                class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-pic">
                                    <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Myra Hindley</h5>
                                    <p>1 Day Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">Myra Hindley and her lover, Ian Brady, plotted and</a></h3>
                        <p>This is a big project of our company, we are happy to completed this type projec which are
                            get world famous award</p>
                        <a href="#" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->

            <!--== Single Blog Post start ==-->
            <div class="col-lg-4 col-md-6">
                <article class="single-blog-post">
                    <figure class="blog-thumb">
                        <div class="blog-thumbnail">
                            <img src="{{ asset('frontend/assets/images/blog/blog-3.jpg') }}" alt="Blog"
                                class="img-fluid" />
                        </div>
                        <figcaption class="blog-meta clearfix">
                            <a href="#" class="author">
                                <div class="author-pic">
                                    <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="Author">
                                </div>
                                <div class="author-info">
                                    <h5>Aileen Wuornos</h5>
                                    <p>3 mins Ago</p>
                                </div>
                            </a>
                            <div class="like-comm pull-right">
                                <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                <a href="#"><i class="fa fa-heart-o"></i>12</a>
                            </div>
                        </figcaption>
                    </figure>

                    <div class="blog-content">
                        <h3><a href="#">Nurse with a private practice, racked up dozens of victims</a>
                        </h3>
                        <p>This is a big project of our company, we are happy to completed this type projec which are
                            get world famous award</p>
                        <a href="#" class="btn btn-brand">More</a>
                    </div>
                </article>
            </div>
            <!--== Single Blog Post End ==-->
        </div>
        <!--== Blog Content Wrapper ==-->
    </div>
</section> --}}

@endsection
