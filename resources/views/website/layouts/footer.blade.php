<footer id="footer-area">
    <!-- Footer Widget Start -->
    <div class="footer-widget section-padding">
        <div class="container">
            <div class="row">
                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <div class="widgei-body">
                            <div class="footer-about">
                                <img src="{{ asset('frontend/assets/images/logo/footer-logo.svg') }}" alt="Logo" class="img-fluid" />
                                <p>
                                    AASOA of Alabama offers opportunities for retailers as well as suppliers to come together and strengthen business relationships.
                                </p>
                                <a href="callto:+1 251-776-3546">Phone: +1 251-776-3546</a>
                                {{-- <a href="#">Fax: +88474 156 362</a> <br /> --}}
                                <a href="mailto:vishalpatel@aasoaal.com">Email: vishalpatel@aasoaal.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Usefull Link</h4>
                        <div class="widgei-body">
                            <ul class="double-list footer-list clearfix">
                                <li><a href="#">Mission</a></li>
                                <li><a href="#">Chairman Message</a></li>
                                <li><a href="{{ route('event') }}">Expo</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="{{ route('membership') }}">Membership</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="#">Sister Association</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

                <!-- Single Widget Start -->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-widget-wrap">
                        <h4 class="widget-title">Gallery</h4>
                        <div class="widgei-body">
                            <div class="row">
                                <!-- Add Bootstrap classes to images -->
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_1.JPG') }}" alt="thumb 1" class="img-fluid img-thumbnail" />
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_2.JPG') }}" alt="thumb 2" class="img-fluid img-thumbnail" />
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_3.JPG') }}" alt="thumb 3" class="img-fluid img-thumbnail" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_4.JPG') }}" alt="thumb 4" class="img-fluid img-thumbnail" />
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_5.JPG') }}" alt="thumb 5" class="img-fluid img-thumbnail" />
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_6.JPG') }}" alt="thumb 6" class="img-fluid img-thumbnail" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_7.JPG') }}" alt="thumb 7" class="img-fluid img-thumbnail" />
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_8.JPG') }}" alt="thumb 8" class="img-fluid img-thumbnail" />
                                </div>
                                <div class="col-lg-3 col-sm-6 mb-3">
                                    <img src="{{ asset('frontend/assets/images/thumbnall/thumb_9.JPG') }}" alt="thumb 9" class="img-fluid img-thumbnail" />
                                </div>
                            </div>
                            <!-- View More Button Aligned Right -->
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-primary mt-3">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Widget End -->

            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
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
