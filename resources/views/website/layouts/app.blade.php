<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> AASOA - Alabama</title>

    <!-- twitter card starts from here, if you don't need remove this section -->
    <!-- <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@yourtwitterusername" />
    <meta name="twitter:creator" content="@yourtwitterusername" />
    <meta name="twitter:url" content="http://twitter.com/" />
    <meta name="twitter:title" content="AASOA - Alabama" /> -->
    <!-- maximum 140 char -->
    <!-- <meta name="twitter:description" content="AASOA - Alabama is a assocciation for growth" /> -->
    <!-- maximum 140 char -->
    <!-- <meta name="twitter:image" content="{{ asset('frontend/assets/images/twittercardimg/twittercard-144-144.png') }}" /> -->
    <!-- when you post this page url in twitter , this image will be shown -->
    <!-- twitter card ends here -->

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <!-- <meta property="og:title" content="AASOA ALABAMA" />
    <meta property="og:url" content="http://your domain here.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="AASOA ALABAMA" /> -->
    <!--meta property="fb:admins" content="" /-->
    <!-- use this if you have  -->
    <!-- <meta property="og:type" content="website" /> -->
    <!-- 'article' for single page  -->
    <!-- <meta property="og:image" content="{{ asset('frontend/assets/images/opengraph/fbphoto-476-476.png') }}" /> -->
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends here -->

    <!-- desktop bookmark -->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('frontend/assets/images/favicon/favicon.ico') }}" />
    <meta name="theme-color" content="#ffffff" />

    <!-- icons & favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon/favicon.ico') }}" />
    <!-- this icon shows in browser toolbar -->
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon/favicon.ico') }}" />
    <!-- this icon shows in browser toolbar -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('frontend/assets/images/favicon/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/assets/images/favicon/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('frontend/assets/images/favicon/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/assets/images/favicon/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('frontend/assets/images/favicon/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/assets/images/favicon/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('frontend/assets/images/favicon/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/assets/images/favicon/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/favicon/apple-icon-180x180.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('frontend/assets/images/favicon/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/favicon/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('frontend/assets/images/favicon/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/favicon/favicon-16x16.png') }}" /> --}}


    <!-- Dependency Styles -->
    <link id="style-bundle" rel="stylesheet" href="{{ asset('frontend/assets/vendors/css/bundle.css') }}" type="text/css" />
    <!-- Site Stylesheet -->
    <link id="cbx-style" rel="stylesheet" href="{{ asset('frontend/assets/css/style-default.css') }}" type="text/css" />
    
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet" />

    <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



</head>

<body id="home-v1" class="home-page-one" data-style="default">
    <a href="#" class="scroll-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <div id="main_content" class="main-content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
@include('website.layouts.navbar')


@yield('content')
        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
@include('website.layouts.footer')


    </div>
    <!-- /#site -->

        <script>
        $(document).ready(function() {
            @if (session('success'))
                toastr.success('{{ session('success') }}', 'Success', {
                    closeButton: true,
                    progressBar: true,
                });
            @endif

            @if (session('error'))
                toastr.error('{{ session('error') }}', 'Error', {
                    closeButton: true,
                    progressBar: true,
                });
            @endif
        });
    </script>

    <!-- Dependency Scripts -->
    <script id="script-bundle" src="{{ asset('frontend/assets/vendors/js/bundle.js') }}"></script>

    {{-- <script id="color-switcher" src="{{ asset('frontend/assets/js/switcher.js') }}"></script> --}}
    <!-- Site Scripts -->
    <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/min.js/0.1.0/$.min.js" integrity="sha512-Vk32j+kJ1fSJgeHkuFGOv/yUCplzmJnxxEq4MYkahPvFz6Yc98N616M8XG+mMIz43WGTaAhRloa643yBES75Ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>

</html>
