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
                            <h1 class="h2">Blog Details</h1>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========================-->
        <!--=          Event        =-->
        <!--=========================-->
        <div id="page-content-wrap">
            <div class="blog-page-content-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <!-- Blog content Area Start -->
                        <div class="col-lg-8">
                            <div class="blog-page-contant-start">
                                <div class="row">
                                    <div class="blog-thumbnail">
                                        <img style="width:100%; height:450px" src="{{ asset('frontend/assets/images/blog/blog-1.jpg') }}" alt="Blog" class="img-fluid" />
                                    </div>

                                    <div class="blog-content">
                                        <h5 class="mt-5"><a href="#">
                                            Productive, Informative& Fruitful
                                            </a>
                                        </h5>
                                        <p>
                                            Very productive,informative&fruitful NACS show with our Associate partners (AASOA) from Verginia,North & South Carolina, NewJersey & Alabama (UMA).
                                        </p>
                                        
                                    </div>


                                    
                                </div>

                                <!-- Pagination Start -->
                                
                                <!-- Pagination End -->
                            </div>
                        </div>
                        <!-- Blog content Area End -->

                        <!-- Sidebar Area Start -->
                        <div class="col-lg-4 order-first order-lg-last">

                            <div class="sidebar-area-wrap">
                                <!-- Single Sidebar Start -->
                                <div class="single-sidebar-wrap">
                                    <div class="brand-search-form">
                                        <form action="https://codeboxr.net/themedemo/unialumni/html/index.html">
                                            <input type="search" placeholder="Type and hit here">
                                            <button type="button"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Single Sidebar End -->

                                <!-- Single Sidebar Start -->
                                <!-- <div class="single-sidebar-wrap">
                                    <h4 class="sidebar-title">Categories</h4>
                                    <div class="sidebar-body">
                                        <ul class="brand-unorderlist">
                                            <li><a href="#">Scholership</a></li>
                                            <li><a href="#">Alumni</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Member</a></li>
                                            <li><a href="#">Tour</a></li>
                                            <li><a href="#">Current Student</a></li>

                                        </ul>
                                    </div>
                                </div> -->
                                <!-- Single Sidebar End -->

                                <!-- Single Sidebar Start -->
                                <div class="single-sidebar-wrap d-none d-lg-block">
                                    <h4 class="sidebar-title">Popular Tags</h4>
                                    <div class="sidebar-body">
                                        <div class="tags">
                                            <a href="#">AASAO</a>
                                            <a href="#">Association</a>
                                            <a href="#">Expo 2025</a>
                                            <a class="active" href="#">AASAO Alabama</a>
                                            <a href="#">AASAO AL</a>
                                            <a href="#">Vendor</a>
                                            <a href="#">Sponsorship</a>
                                            <a href="#">Membership</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Sidebar End -->
                            </div>
                        </div>
                        <!-- Sidebar Area End -->
                    </div>
                </div>
            </div>
        </div>

@endsection
