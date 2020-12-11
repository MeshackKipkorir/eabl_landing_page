<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@if(Request::is('/'))
            Home
           @else
            {{Request::path()}}
          @endif || MediaPal </title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/screen/png/2.png">
    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/font-awesome.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/device-mockups.css">
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="main-content">
        <!-- Start Header -->
        <header class="ax-header haeder-default light-logo-version header-transparent axil-header-sticky">
            <div class="header-wrapper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-8 header-left">
                            <div class="logo">
                                <a href="">
                                    <img src="assets/images/mediapal-blue.png" width="170">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-6 col-4 header-right">
                            <div class="mainmenu-wrapepr">
                                <!-- Start Mainmanu Nav -->
                                <nav class="mainmenu-nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="has-dropdown"><a href="">Home</a>
                                        </li>

                                    </ul>
                                </nav>
                                <!-- End Mainmanu Nav -->
                                <div class="axil-header-extra d-flex align-items-center">



                                    <!-- Start Menu Bar  -->
                                    <div class="ax-menubar popup-navigation-activation d-block d-lg-none ml_sm--20 ml_md--20">
                                        <div>
                                            <i></i>
                                        </div>
                                    </div>
                                    <!-- End Menu Bar  -->

                                    <!-- Start Search Area  -->
                                    <div class="axil-search-area">
                                        <form action="#" class="axil-searchbar w-100">
                                            <div class="search-field">
                                                <input type="text" placeholder="Search Here...">
                                                <button class="navbar-search-btn" type="button"><i
                                            class="fal fa-search"></i></button>
                                            </div>
                                            <a href="#" class="navbar-search-close"><i class="fal fa-times"></i></a>
                                        </form>
                                    </div>
                                    <!-- End Search Area  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Start Header -->

        <!-- Start Popup Mobile Menu -->
        <div class="popup-mobile-manu">
            <div class="inner">
                <div class="mobileheader">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/keystoke.svg" alt="Logo images">
                        </a>
                    </div>
                    <a class="close-menu" href="#"></a>
                </div>
                <div class="menu-item">
                    <ul class="mainmenu-item">
                        <li class="has-children"><a href="#">Home</a>
                            <ul class="submenu">
                                <li><a href="/">Digital Agency</a></li>
                                <li><a href="home-02.html">Creative Agency</a></li>
                                <li><a href="home-03.html">Personal Portfolio</a></li>
                                <li><a href="home-04.html">Home Startup</a></li>
                                <li><a href="home-05.html">Corporate Agency</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Services</a>
                            <ul class="submenu">
                                <li><a href="/services">Services</a></li>
                                <li><a href="/services-two">Services Two</a></li>
                                <li><a href="/service-details">Services Details</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About Us</a></li>
                        <li class="has-children"><a href="#">Blog</a>
                            <ul class="submenu">
                                <li><a href="/blog">Blog List</a></li>
                                <li><a href="blog-list-two.html">Blog List Two</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="button.html">Button</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="case-study.html">Case Study</a></li>
                                <li><a href="single-case-study.html">Case Study Details</a></li>
                                <li><a href="comming-soon.html">Comming Soon</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- End Popup Mobile Menu -->

        <!-- Start Sidebar Area  -->
        <div class="side-nav">
            <div class="side-nav-inner">
                <!-- Start Search Bar  -->
                <form action="#" class="side-nav-search-form">
                    <div class="form-group search-field">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <!-- End Search Bar  -->

                <!-- Start Side Content  -->
                <div class="side-nav-content">
                    <div class="row ">
                        <!-- Start Left Bar  -->
                        <div class="col-lg-5 col-xl-6 col-12">
                            <ul class="main-navigation">
                                <li><a href="home-01.html">Home One</a></li>
                                <li><a href="home-02.html">Home Two</a></li>
                                <li><a href="home-03.html">Home Three</a></li>
                                <li><a href="home-04.html">Home Four</a></li>
                                <li><a href="home-05.html">Home Five</a></li>
                            </ul>
                        </div>
                        <!-- End Left Bar  -->

                        <!-- Start Right Bar  -->
                        <div class="col-lg-7 col-xl-6 col-12">
                            <div class="axil-contact-info-inner">

                                <!-- Start Single Address  -->
                                <div class="axil-contact-info">
                                    <address class="address">
                                        <span class="title">Contact Information</span>
                                        <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                    </address>
                                    <address class="address">
                                        <span class="title">We're Available 24/ 7. Call Now.</span>
                                        <p><a class="tel" href="tel:0794891999"><i class="fas fa-phone"></i>(+254) 794 891 999</a></p>
                                        <p><a class="tel" href="tel:0794891999"><i class="fas fa-fax"></i>(+254) 794 891 999</a></p>
                                    </address>
                                </div>
                                <!-- End Single Address  -->

                                <!-- Start Single Address  -->
                                <div class="axil-contact-info">
                                    <h5 class="title">Find us here</h5>
                                    <div class="contact-social-share d-flex align-items-center">
                                        <ul class="social-share style-rounded">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <!-- End Single Address  -->
                            </div>
                        </div>
                        <!-- End Right Bar  -->
                    </div>
                </div>
                <!-- End Side Content  -->
                <!-- End of .side-nav-inner -->
                <div class="close-sidenav" id="close-sidenav">
                    <button class="close-button"><i class="fal fa-times"></i></button>
                </div>
            </div>
        </div>
        <!-- End Sidebar Area  -->
         @yield('content')

        <!-- Start Footer Area -->
        <footer class="axil-footer footer-default theme-gradient-2">
            <div class="bg_image--2">
                <!-- Start Copyright -->
                <div class="copyright copyright-default">
                    <div class="container">
                        <div class="row row--0 ptb--20 axil-basic-thine-line">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="inner text-center text-md-left">
                                    <p>Copyright© 2020, mediapal.net</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="quick-contact">
                                    <ul class="link-hover d-flex justify-content-center justify-content-md-end liststyle">
                                        <li><a data-hover="Privacy Policy" href="">Privacy Policy</a></li>
                                        <li><a href="#">Cookie notice</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/tilt.js"></script>
    <script src="assets/js/anime.js"></script>
    <script src="assets/js/tweenmax.js"></script>
    <script src="assets/js/slipting.js"></script>
    <script src="assets/js/scrollmagic.js"></script>
    <script src="assets/js/addindicators.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/youtube.js"></script>
    <script src="assets/js/countdown.js"></script>
    <script src="assets/js/scrollup.js"></script>
    <script src="assets/js/stickysidebar.js"></script>
    <script src="assets/js/contactform.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/playvideo.js"></script>
    <script src="assets/js/client_logo.js"></script>
</body>

</html>
