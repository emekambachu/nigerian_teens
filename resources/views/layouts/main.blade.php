<!DOCTYPE html>

<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Nigerian Teens Beauty Pageant, nigeria, porthacourt, voting, girls" />
    <meta name="author" content="Nigerian Teens Beauty Pageant" />
    <meta name="robots" content="" />
    <meta name="description" content="Nigerian Teens Beauty Pageant, Nigeria, porthacourt" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{ asset('main/nigerian_teens_logo.png')  }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/nigerian_teens_logo.png')  }}" />

    <!-- PAGE TITLE HERE -->
    <title>@yield('title') | Nigerian Teens</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
    <script src="{{ asset('main/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('main/js/respond.min.js') }}"></script>
    <![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap.min.css') }}">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/fontawesome/css/font-awesome.min.css') }}" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/flaticon.min.css') }}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/animate.min.css') }}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/owl.carousel.min.css') }}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/bootstrap-select.min.css') }}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/magnific-popup.min.css') }}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/loader.min.css') }}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/style.css') }}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{ asset('main/css/skin/skin-1.css') }}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/css/custom.css') }}">


    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/plugins/revolution/revolution/css/settings.css') }}">

    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('main/plugins/revolution/revolution/css/navigation.css') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>

<body id="bg">

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-1 ">

        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="wt-topbar-left clearfix">
                        <ul class="list-unstyled e-p-bx pull-right">
                            <li><i class="fa fa-envelope"></i>info@nigerianteens.com</li>
                            <li><i class="fa fa-phone"></i>08091304065, 08181073065, 09014818914</li>
                        </ul>
                    </div>
                    <div class="wt-topbar-right clearfix">
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="https://www.instagram.com/nigerianteensbeautypageant/"
                                   class="fa fa-instagram"></a></li>
                            <li><a href=""
                                   class="fa fa-facebook"></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- Search Link -->

        <!-- Search Form -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('main/nigerian_teens_logo.png') }}" width="100" alt="" />
                        </a>
                    </div>
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('vote-contestants.index') }}">Contestants</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('registration') }}">Registration</a></li>
                            <li><a href="{{ url('contact') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">

        @yield('contents')

    </div>
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    <footer class="site-footer footer-light">
        <!-- COLL-TO ACTION START -->
        <div class="section-full overlay-wraper bg-primary" style="background-image:url({{ asset('main/images/background/bg-7.png') }});">

            <div class="section-content ">
                <!-- COLL-TO ACTION START -->
                <div class="wt-subscribe-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="call-to-action-left p-tb50 p-r50">
                                    <h1 class="text-uppercase m-b10">Join The Nigerian Teens</h1>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="call-to-action-right p-tb50">
                                    <a href="{{ url('registration') }}"
                                       class="site-button-secondry text-uppercase radius-sm font-weight-600">Sign up
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- FOOTER BLOCKES START -->
        <div class="footer-top overlay-wraper">
            <div class="overlay-main"></div>
            <div class="container">
                <div class="row">
                    <!-- ABOUT COMPANY -->
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_about">
                            <h4 class="widget-title">Contacts</h4>
                            <p><strong>Email:</strong> info@nigerianteens.com</p>
                            <p><strong>Call us:</strong> 08091304065, 08181073065, 09014818914</p>
                            <p><strong>Address:</strong>  Plot f6 Abacha road GRA, Port Harcourt, Rivers state, Nigeria</p>
                        </div>
                    </div>

                    <!-- USEFUL LINKS -->
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="widget-title">Useful links</h4>
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
{{--                                <li><a href="{{ route('vote-contestants.index') }}">Contestants</a></li>--}}
                                <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('contact') }}">Contacts</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- NEWSLETTER -->
                    <div class="col-md-4 col-sm-6">
                        <!-- SOCIAL LINKS -->
                        <div class="widget widget_social_inks">
                            <h4 class="widget-title">Social Links</h4>
                            <ul class="social-icons social-square social-darkest">
                                <li><a href="https://www.instagram.com/nigerianteensbeautypageant/"
                                       class="fa fa-instagram"></a></li>
                                <li><a href=""
                                       class="fa fa-facebook"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- FOOTER COPYRIGHT -->
        <div class="footer-bottom overlay-wraper">
            <div class="overlay-main"></div>
            <div class="container p-t30">
                <div class="row">
                    <div class="wt-footer-bot-left">
                        <span class="copyrights-text">© {{ date('Y') }} Nigerian Teens. All Rights Reserved.</span>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- FOOTER END -->

    <!-- BUTTON TOP START -->
    <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>

</div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script   src="{{ asset('main/js/jquery-1.12.4.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script   src="{{ asset('main/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->

<script   src="{{ asset('main/js/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script   src="{{ asset('main/js/jquery.bootstrap-touchspin.min.js') }}"></script><!-- FORM JS -->

<script   src="{{ asset('main/js/magnific-popup.min.js') }}"></script><!-- MAGNIFIC-POPUP JS -->

<script   src="{{ asset('main/js/waypoints.min.js') }}"></script><!-- WAYPOINTS JS -->
<script   src="{{ asset('main/js/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script   src="{{ asset('main/js/waypoints-sticky.min.js') }}"></script><!-- COUNTERUP JS -->

<script  src="{{ asset('main/js/isotope.pkgd.min.js') }}"></script><!-- MASONRY  -->

<script   src="{{ asset('main/js/owl.carousel.min.js') }}"></script><!-- OWL  SLIDER  -->

<script   src="{{ asset('main/js/stellar.min.js') }}"></script><!-- PARALLAX BG IMAGE   -->
<script   src="{{ asset('main/js/scrolla.min.js') }}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script   src="{{ asset('main/js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script   src="{{ asset('main/js/shortcode.js') }}"></script><!-- SHORTCODE FUCTIONS  -->

<!-- REVOLUTION JS FILES -->
<script  src="{{ asset('main/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script  src="{{ asset('main/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script  src="{{ asset('main/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script src="{{ asset('main/js/rev-script-1.js') }}"></script>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Aug 18, 2021 18:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>

</body>

</html>
