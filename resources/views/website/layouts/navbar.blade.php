<header class="site-header header-fixed" data-responsive-width="991">
    <div class="header-topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:aasoa@mail.com"><strong>Email:</strong> aasoa@mail.com</a>
                        <a href="#"><strong>Hotline:</strong>+1 251-776-3546</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-end">
                    <div class="preheader-right">
                        <a title="Login" class="btn-auth btn-auth-rev" href="register.html">Login</a>
                        <a title="Register" class="btn-auth btn-auth" href="register.html">Signup</a>
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
                        <img src="{{ asset('frontend/assets/images/logo/logo.svg') }}" alt="site logo" class="main-logo" />
                        <img src="{{ asset('frontend/assets/images/logo/logo.svg') }}" alt="site logo" class="logo-sticky" />
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
                        <li><a href="{{ route('event') }}">Expo</a></li>
                        <li><a href="{{ route('sponsorship') }}">Sponsorship</a></li>
                        <li><a href="{{ route('membership') }}">Membership</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li class="has-submenu menu-item-depth-0">
                            <a href="#">Help</a>
                            <ul class="sub-menu">
                                <li><a href="#">FAQ</a></li>
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
