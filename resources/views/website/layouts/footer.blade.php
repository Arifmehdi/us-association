<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div style="padding-top:35px; padding-bottom:55px" class="footer-widget">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widget-body">
                            <div class="footer-about">
                                <img src="{{ asset('frontend/assets/images/logo/logo.svg') }}" alt="Logo" class="img-fluid" />
                                <p class="content">
                                    AASOA of Alabama offers opportunities for retailers as well as suppliers to come together and strengthen business relationships.
                                </p>
                                {{-- Uncomment below if you want to add these details
                                <a href="#">Fax: +88474 156 362</a> <br />
                                <a href="callto:+1 251-776-3546">Phone: +1 251-776-3546</a>
                                <a href="mailto:vishalpatel@aasoaal.com">Email: vishalpatel@aasoaal.com</a>
                                --}}
                                <a style="" href="https://www.facebook.com/aasoaalabama" target="_blank"><i class="fa fa-facebook"></i> <span> Facebook</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div style="margin-top:35px" class="single-widget-wrap text-center">
                        <h4 class="widget-title">Useful Links</h4>
                        <div class="widget-body">
                            <ul class="footer-list clearfix">
                                <li><a href="{{ route('event') }}">Events</a></li>
                                <li><a href="{{ route('membership') }}">Membership</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                {{-- Uncomment below for more links
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Chairman Message</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Sister Association</a></li>
                                --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div style="" class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-widget-wrap" style="margin-top:32px">
                        <h4 class="widget-title">Gallery</h4>
                
                        <!-- Row 1 -->
                        <div class="row">
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_1.JPG') }}" alt="thumb 1" class="img-fluid img-thumbnail" />
                            </div>
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_2.JPG') }}" alt="thumb 2" class="img-fluid img-thumbnail" />
                            </div>
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_3.JPG') }}" alt="thumb 3" class="img-fluid img-thumbnail" />
                            </div>
                        </div>
                
                        <!-- Row 2 -->
                        <div class="row">
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_4.JPG') }}" alt="thumb 4" class="img-fluid img-thumbnail" />
                            </div>
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_5.JPG') }}" alt="thumb 5" class="img-fluid img-thumbnail" />
                            </div>
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_6.JPG') }}" alt="thumb 6" class="img-fluid img-thumbnail" />
                            </div>
                        </div>
                
                        <!-- Row 3 -->
                        <div class="row">
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_7.JPG') }}" alt="thumb 7" class="img-fluid img-thumbnail" />
                            </div>
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_8.JPG') }}" alt="thumb 8" class="img-fluid img-thumbnail" />
                            </div>
                            <div class="col-lg-4 col-4 mb-3">
                                <img src="{{ asset('frontend/assets/images/thumbnall/thumb_9.JPG') }}" alt="thumb 9" class="img-fluid img-thumbnail" />
                            </div>
                        </div>
                
                        <!-- View More Button Aligned Right -->
                        {{-- <div class="row">
                            <div class="col-12 text-right">
                                <a href="#" class="btn btn-primary mt-3">View More</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                
                
                <!-- Single Widget End -->
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div style="border-top:1px solid rgb(51, 52, 92)" class="footer-bottom primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer-bottom-text">
                        <p>© {{ date('Y') }} <a href="#">AASAO Alabama</a>, All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->
</footer>

