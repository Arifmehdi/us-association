<header class="site-header header-fixed" data-responsive-width="991">
    <div class="header-topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <!-- <a href="mailto:vishalpatel@aasoaal.com"><strong>Email:</strong> vishalpatel@aasoaal.com</a>
                        <a href="callto:251-776-3546"><strong>Contact: </strong>251-776-3546</a> -->
                        <a href="https://www.facebook.com/aasoaalabama" target="_blank"><i class="fab fa-facebook-f" ></i> <span> Facebook</span></a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-end">
                    <div class="preheader-right">
                        @if (Route::has('login'))
                            @auth
                                <a title="Login" class="btn-auth btn-auth-rev" href="{{route('admin.dashboard')}}">Dashboard</a>
                            @else
                                <a title="Login" class="btn-auth btn-auth-rev" href="{{route('login')}}">Login</a>
                            @endauth
                        @endif
                        {{-- <a title="Register" class="btn-auth btn-auth" href="{{ route('register')}}">Signup</a> --}}
                        {{-- <a title="Vendor Register" class="btn-auth btn-auth" href="{{ route('vendor')}}">Vendor</a> --}}
                        <a title="Vendor Register" class="btn-auth btn-auth" href="https://docs.google.com/forms/d/e/1FAIpQLScwmrBf9cIhn-xEQ60DmAys0Ib-xEcK8uKtPIu_EI2VBi_Upw/viewform" target="_blank">Vendor</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.header-topbar -->

    <div class="container">
        <div class="header-inner">
            <nav id="site-navigation" class="main-nav">
                <div class="site-logo">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ asset('frontend/assets/images/logo/log.png') }}" alt="site logo" class="main-logo" />
                        <img src="{{ asset('frontend/assets/images/logo/log.png') }}" alt="site logo" class="logo-sticky" />
                    </a>

                    <div class="burger-menu">
                        <span class="bar-one"></span>
                        <span class="bar-two"></span>
                        <span class="bar-three"></span>
                    </div>
                </div>
                <!-- /.site-logo -->

                <div class="menu-wrapper main-nav-container canvas-menu-wrapper" id="mega-menu-wrap">
                    <div class="canvas-header">
                        <div class="mobile-offcanvas-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('frontend/assets/images/logo/logo.svg')}}" alt="site logo" class="logo-sticky" />
                            </a>
                        </div>

                        <div class="close-menu" id="page-close-main-menu">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>

                    <ul class="codeboxr-main-menu">
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li class="has-submenu menu-item-depth-0">
                            <a href="{{ route('event') }}">Event</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('event') }}">Gulf Coast Expo 2025</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="{{ route('sponsorship') }}">Sponsorship</a></li> --}}
                        {{--<li><a href="{{route('sponsorship')}}">Sponsors</a></li>--}}
                        <li><a href="{{ route('membership') }}">Membership</a></li>
                        {{--<li><a href="{{ route('gallery') }}">Gallery</a></li>--}}
                        {{--<li><a href="{{ route('blog') }}">Blog</a></li>--}}
                        <li class="has-submenu menu-item-depth-0">
                            <a href="#">Help</a>
                            <ul class="sub-menu">
                                
                            {{--<li><a href="#">FAQ</a></li> --}}
                                <li>
                                    <a href="{{ route('contact') }}">Contact</a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.menu-wrapper -->
            </nav>
            <!-- /.site-nav -->
        </div>
        <!-- /.header-inner -->
    </div>
    <!-- /.container-full -->
</header>
<!-- /.site-header -->
