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
                            <h1 class="h2">Blog List</h1>
                            <p>
                                AASOA of Alabama offers opportunities for retailers as well as suppliers.
                            </p>
                            <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let's See</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================================-->
        <!--=         Blog        =-->
        <!--==================================-->
        <div id="page-content-wrap">
            <div class="blog-page-content-wrap section-padding">
                <div class="container">
                    <div class="row">
                        <!-- Blog content Area Start -->
                        <div class="col-lg-8">
                            <div class="blog-page-contant-start">
                                <div class="row">
                                    <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="{{ asset('frontend/assets/images/blog/blog-1.jpg') }}" alt="Blog" class="img-fluid" />
                                                </div>
                                                <figcaption class="blog-meta clearfix">
                                                    <a href="#" class="author">
                                                        <div class="author-pic">
                                                            <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="Author">
                                                        </div>
                                                        <div class="author-info">
                                                            <h5>Admin</h5>
                                                            {{-- <p>2 hours Ago</p> --}}
                                                            <p>Wed, 06/21/2017 - 06:14</p>

                                                        </div>
                                                    </a>
                                                    {{-- <div class="like-comm pull-right">
                                                        <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                                        <a href="#"><i class="fa fa-heart-o"></i>12</a>
                                                    </div> --}}
                                                </figcaption>
                                            </figure>

                                            <div class="blog-content">
                                                <h3><a href="#">
                                                    Productive, Informative& Fruitful
                                                    </a>
                                                </h3>
                                                <p>
                                                    Very productive,informative&fruitful NACS show with our Associate partners (AASOA) from Verginia,North & South Carolina, NewJersey & Alabama (UMA).
                                                </p>
                                                <a href="{{route('blog.details')}}" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==-->

                                    <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="{{ asset('frontend/assets/images/blog/blog-2.jpg') }}" alt="Blog" class="img-fluid" />
                                                </div>
                                                <figcaption class="blog-meta clearfix">
                                                    <a href="#" class="author">
                                                        <div class="author-pic">
                                                            <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="Author">
                                                        </div>
                                                        <div class="author-info">
                                                            <h5>Admin</h5>
                                                            {{-- <p>2 hours Ago</p> --}}
                                                            <p>Wed, 10/19/2016 - 17:00</p>
                                                        </div>
                                                    </a>
                                                    {{-- <div class="like-comm pull-right">
                                                        <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                                        <a href="#"><i class="fa fa-heart-o"></i>12</a>
                                                    </div> --}}
                                                </figcaption>
                                            </figure>

                                            <div class="blog-content">
                                                <h3><a href="#">
                                                   Start new journey
                                                    </a>
                                                </h3>
                                                <p>
                                                    When we started our business 16 months ago we decided to use a blog as the central marketing tool for our business. We did it because we didn’t really have
                                                    {{-- any money for advertising and we never really believed that
                                                     attending networking events would work for us. “It’s been a long journey but 16 months later we now get 250,000 pageviews to our site per month, in the last year we have brought in over $500,000 in business as a direct result of the blog and the business operates in 2 countries and our content has been picked up all over the world.” --}}
                                                </p>
                                                <a href="#" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==-->

                                    <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="{{ asset('frontend/assets/images/blog/blog-3.jpg') }}" alt="Blog" class="img-fluid" />
                                                </div>
                                                <figcaption class="blog-meta clearfix">
                                                    <a href="#" class="author">
                                                        <div class="author-pic">
                                                            <img src="{{ asset('frontend/assets/images/blog/author.jpg') }}" alt="Author">
                                                        </div>
                                                        <div class="author-info">
                                                            <h5>Admin</h5>
                                                            {{-- <p>2 hours Ago</p> --}}
                                                            <p>Wed, 10/19/2016 - 17:00</p>
                                                        </div>
                                                    </a>
                                                    {{-- <div class="like-comm pull-right">
                                                        <a href="#"><i class="fa fa-comment-o"></i>77</a>
                                                        <a href="#"><i class="fa fa-heart-o"></i>12</a>
                                                    </div> --}}
                                                </figcaption>
                                            </figure>

                                            <div class="blog-content">
                                                <h3>
                                                    <a href="#">
                                                        Grow your bussiness
                                                    </a>
                                                </h3>
                                                <p>
                                                    AASOA is a best platform for business.  When we started our business 16 months ago we decided to use a blog as the central marketing tool for our business.
                                                    {{-- We did it because we didn’t really have any money for advertising and we never really believed that attending networking events would work for us. “It’s been a long journey but 16 months later we now get 250,000 pageviews to our site per month, in the last year we have brought in over $500,000 in business as a direct result of the blog and the business operates in 2 countries and our content has been picked up all over the world.” --}}
                                                </p>
                                                <a href="#" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==-->

                                    {{-- <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="{{ asset('frontend/assets/images/blog/blog-1.jpg') }}" alt="Blog" class="img-fluid" />
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
                                                <h3>
                                                    <a href="#">Recently we create a maassive project that will
                                                        be a.....</a>
                                                </h3>
                                                <p>
                                                    This is a big project of our company, we are happy to completed this type
                                                    projec which are
                                                    get world famous award
                                                </p>
                                                <a href="#" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==-->

                                    <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="{{ asset('frontend/assets/images/blog/blog-5.jpg') }}" alt="Blog" class="img-fluid" />
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
                                                <h3>
                                                    <a href="#">
                                                        Recently we create a maassive project that will
                                                        be a.....
                                                    </a>
                                                </h3>
                                                <p>
                                                    This is a big project of our company, we are happy to completed this type
                                                    projec which are
                                                    get world famous award
                                                </p>
                                                <a href="#" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==-->

                                    <!--== Single Blog Post start ==-->
                                    <div class="col-lg-6 col-md-6">
                                        <article class="single-blog-post">
                                            <figure class="blog-thumb">
                                                <div class="blog-thumbnail">
                                                    <img src="{{ asset('frontend/assets/images/blog/blog-6.jpg') }}" alt="Blog" class="img-fluid" />
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
                                                <h3>
                                                    <a href="#">
                                                        Recently we create a maassive project that will
                                                        be a.....
                                                    </a>
                                                </h3>
                                                <p>
                                                    This is a big project of our company, we are happy to completed this type
                                                    projec which are
                                                    get world famous award
                                                </p>
                                                <a href="#" class="btn btn-brand">More</a>
                                            </div>
                                        </article>
                                    </div>
                                    <!--== Single Blog Post End ==--> --}}
                                </div>

                                <!-- Pagination Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="pagination-wrap text-center">
                                            <nav>
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">50</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
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
