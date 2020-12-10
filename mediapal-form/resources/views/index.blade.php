<!DOCTYPE html>
<html class="no-js vlt-is--custom-cursor" lang="en">

<head>
    <meta charset="utf-8">
    <title>Jobs || WorkScout</title>
    <meta name="description" content="Jobs Alerts Website">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--Framework-->
    <link rel="stylesheet" href="{{asset('css/framework/bootstrap.min.css')}}">
    <!--Fonts-->
    <link rel="stylesheet" href="{{asset('css/fonts/Inter/style.css')}}">
    <!--Plugins-->
    <link rel="stylesheet" href="{{asset('css/vlt-plugins.min.css')}}">
    <!--Style-->
    <link rel="stylesheet" href="{{asset('css/vlt-main.min.css')}}">
    <!--Custom-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body class=" animsition">
<!--Header-->
<header class="vlt-header">
    <div class="vlt-navbar vlt-navbar--main vlt-navbar--fixed">
        <div class="vlt-navbar-background"></div>
        <div class="vlt-navbar-inner">
            <div class="vlt-navbar-inner--left">
                <!--Logo--><a class="vlt-navbar-logo" href="index-2.html">
                    <img class="white" src="{{asset('img/mediapal-blue.png')}}"  alt="Mikael"></a>
                <!--Contacts-->
                <nav class="vlt-navbar-contacts d-none d-md-block">
                    <ul>
                        <li><a href="tel:+79281012345">+254 700 000 000</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">info@workscout.com</a></li>
                        <li class="sep">/</li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </nav>
            </div>
            <div class="vlt-navbar-inner--right">
                <div class="d-flex align-items-center">
                    <!--Menu Burger--><a class="vlt-menu-burger js-offcanvas-menu-open" href="#"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                            <line x1="3" y1="12" x2="21" y2="12" />
                            <line x1="3" y1="6" x2="21" y2="6" />
                            <line x1="3" y1="18" x2="21" y2="18" /></svg></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Offcanvas Menu-->
<div class="vlt-offcanvas-menu">
    <div class="vlt-offcanvas-menu__header">
        <!--Locales-->

        <!--Menu Burger--><a class="vlt-menu-burger vlt-menu-burger--opened js-offcanvas-menu-close" href="#"><svg
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" /></svg></a>
    </div>
    <nav class="vlt-offcanvas-menu__navigation">
        <!--Navigation-->
        <ul class="sf-menu">
            <li data-menuanchor="Home"><a href="#Home">Home</a></li>
            <li data-menuanchor="Services"><a href="#Subscribe">Subscribe</a></li>

            <li data-menuanchor="Contact"><a href="#Contact">Contact</a></li>
        </ul>
    </nav>
    <div class="vlt-offcanvas-menu__footer">
        <!--Socials-->

        <!--Copyright-->
        <div class="vlt-offcanvas-menu__copyright">
            <p>&copy; 2020 Copiright.<br>All rights reserved.</p>
        </div>
    </div>
</div>
<!--Site Overlay-->
<div class="vlt-site-overlay"></div>
<!--Fixed Socials-->

<!--Main-->
<main class="vlt-main">
    <!--Fullpage Slider-->
    <div class="vlt-fullpage-slider" data-loop-top="" data-loop-bottom="" data-speed="800">
        <!--Home-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Home" data-brightness="dark"
             style="background-image: url({{asset('img/root/red-background.jpg')}});">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Particles-->
                    <div class="vlt-section__particles">
                        <div class="vlt-particle vlt-fade-in-left vlt-custom--1451"
                             style="background-image: url({{asset('img/root/plus-dark-pattern.png')}}); transition-duration: 1s;"></div>
                        <div class="vlt-particle d-none d-xl-block vlt-fade-in-right vlt-custom--1512"
                             style="background-image: url({{asset('img/root/elipse-home-slide.png')}}); transition-duration: 1.5s; transition-delay: 300ms;">
                        </div>
                        <div class="vlt-particle vlt-custom--4124" style="background-image: url({{asset('img/attachment-011.png')}};">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 offset-lg-1">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
                                    <h5 class="vlt-display-1 has-white-color">Work Scout</h5>
                                    <div class="vlt-gap-10"></div>
                                    <h1 class="vlt-large-heading has-white-color">Let’s Find Jobs For You</h1>
                                    <div class="vlt-gap-40"></div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <!--Counter Up Small-->
                                            <div class="vlt-counter-up-small" data-ending-number="12" data-animation-speed="1000"
                                                 data-delimiter=""><span class="counter">600</span>
                                                <h6 class="vlt-display-1">Available<br>jobs</h6>
                                            </div>
                                            <div class="vlt-gap-20--sm"></div>
                                        </div>
                                        <div class="col-auto">
                                            <!--Counter Up Small-->
                                            <div class="vlt-counter-up-small" data-ending-number="18" data-animation-speed="1000"
                                                 data-delimiter=""><span class="counter">1000</span>
                                                <h6 class="vlt-display-1">Subscribers</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vlt-gap-40"></div>
                                    <ul class="sf-menu">
                                        <li data-menuanchor="Subscribe">
                                            <a class="vlt-link has-white-color" href="#Subscribe">Subscribe</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Services-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Subscribe" data-brightness="light">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Particles-->
                    <div class="vlt-section__particles">
                        <div class="vlt-particle vlt-custom--1259 vlt-fade-in-right"
                             style="background-image: url({{asset('img/root/plus-light-pattern.png')}}); animation-delay: 750ms;"></div>
                        <div class="vlt-particle vlt-custom--2355 vlt-fade-in-left"
                             style="background-image: url({{asset('img/root/elipse-light.png')}}); animation-delay: 500ms;"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 offset-lg-1 d-none d-lg-block">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
                                    <!--Counter Up-->
                                    <div class="vlt-counter-up" data-ending-number="8" data-animation-speed="2000" data-delimiter="">
                                        <span class="counter">0</span><sup>+</sup>
                                    </div>
                                    <div class="vlt-gap-40"></div>
                                    <h6>Years <br>Experience <br>Working</h6>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
                                    <h4>Find your next job, fast. <br> <span
                                            class="has-first-color">Subscribe To Get The Latest Job Alerts</span></h4>
                                </div>
                                <div class="vlt-gap-70"></div>
                                <div class="row">



                                    <div class="col-md-6">
                                        <!--Animated Block-->
                                        <div class="vlt-animated-block" style="animation-delay:200ms; animation-duration:700ms;">
                                            <!--Services-->
                                            <div class="vlt-services">

                                                <div class="form-group">
                                                    <label for="exampleName">Name</label>
                                                    <input type="text" class="form-control" id="exampleName" aria-describedby="namelHelp" placeholder="Enter Your Name">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleNumber">Phone Number</label>
                                                    <input type="text" class="form-control" id="exampleNumber" aria-describedby="namelHelp" placeholder="Enter Your Phone Number">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleEducation">Select Highest Education Level</label>
                                                    <select class="form-control" id="exampleEducation">
                                                        <option>Education Level</option>
                                                        <option>PHD</option>
                                                        <option>Masters</option>
                                                        <option>Bachelors</option>
                                                        <option>Dilpoma</option>
                                                        <option>Certificate</option>
                                                        <option>High School</option>
                                                    </select>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="vlt-gap-40"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <!--Animated Block-->
                                        <div class="vlt-animated-block" style="animation-delay:300ms; animation-duration:700ms;">
                                            <div class="form-group">
                                                <label for="exampleAreaofStudy">Select Area of Study</label>
                                                <select class="form-control" id="exampleAreaofStudy">
                                                    <option>Education Level</option>
                                                    <option>PHD</option>
                                                    <option>Masters</option>
                                                    <option>Bachelors</option>
                                                    <option>Dilpoma</option>
                                                    <option>Certificate</option>
                                                    <option>High School</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleJob">Select job interest</label>
                                                <select class="form-control" id="exampleJob">
                                                    <option>Accountant</option>
                                                    <option>Secretary</option>
                                                    <option>Minister</option>
                                                    <option>Pastor</option>
                                                    <option>Plumber</option>
                                                    <option>Engineer</option>
                                                    <option>Analyst</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="exampleExperience">Select years of experience</label>
                                                <select class="form-control" id="exampleExperience">
                                                    <option>Years</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleLocation">Select your preferred location</label>
                                                <select class="form-control" id="exampleLocation">
                                                    <option>location</option>
                                                    <option>Nairobi</option>
                                                    <option>Nakuru</option>
                                                    <option>Kisumu</option>
                                                    <option>Moyale</option>
                                                    <option>Mombasa</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="vlt-gap-40"></div>
                                    </div>
                                    <div class="offset-4">
                                        <!--Animated Block-->
                                        <div class="vlt-animated-block" style="animation-delay:400ms; animation-duration:700ms;">
                                            <!--Services-->
                                            <div class="vlt-services">

                                            </div>
                                        </div>
                                        <div class="vlt-gap-40--sm"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <!--Animated Block-->
                                        <div class="vlt-animated-block" style="animation-delay:500ms; animation-duration:700ms;">
                                            <!--Services-->
                                            <div class="vlt-services">
                                                <button class="vlt-btn vlt-btn--secondary">Subscribe to receive alerts</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <!--Animated Block-->
                                        <div class="vlt-animated-block" style="animation-delay:500ms; animation-duration:700ms;">
                                            <!--Services-->
                                            <div class="vlt-services">

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Contact-->
        <!--Section-->
        <div class="vlt-section pp-scrollable" data-anchor="Contact" data-brightness="dark">
            <div class="vlt-section__vertical-align">
                <div class="vlt-section__content">
                    <!--Ken Burn Effect-->
                    <div class="vlt-section__ken-burn-background"><img src="{{asset('img/attachment-05.jpg')}}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 offset-lg-1">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" style="animation-delay:0s; animation-duration:700ms;">
                                    <h1 class="has-white-color">Contact</h1>
                                    <div class="vlt-gap-20"></div>
                                    <div class="vlt-gap-50"></div>
                                    <div class="has-white-color">
                                        <h6 class="vlt-display-1 has-gray-color">Email:</h6>
                                        <div class="vlt-gap-5"></div><a href="#">info@worksocut.com</a>
                                    </div>
                                    <div class="vlt-gap-30"></div>
                                    <div class="has-white-color">
                                        <h6 class="vlt-display-1 has-gray-color">Phone:</h6>
                                        <div class="vlt-gap-5"></div><a href="#">0730909090</a>
                                    </div>
                                    <div class="vlt-gap-40"></div><a class="vlt-btn vlt-btn--secondary" href="#"><span
                                            class="vlt-btn__text">Get direction</span><span class="vlt-btn__icon vlt-btn__icon--right"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-map-pin">
                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                          <circle cx="12" cy="10" r="3" /></svg></span></a>
                                </div>
                                <div class="vlt-gap-70--sm"></div>
                            </div>
                            <div class="col-lg-6">
                                <!--Animated Block-->
                                <div class="vlt-animated-block" style="animation-delay:100ms; animation-duration:700ms;">
                                    <h5 class="has-white-color">Let's Work Together We're dedicated to helping you find a job
                                        <span class="has-first-color">as soon as possible!</span></h5>
                                    <div class="vlt-gap-40"></div>
                                    <form class="vlt-contact-form" novalidate="novalidate">
                                        <div class="vlt-form-row two-col">
                                            <div class="vlt-form-group">
                                                <label class="has-white-color" for="name">Your name (required)</label>
                                                <input type="text" id="name" name="name" required="required" placeholder="Your Name">
                                            </div>
                                            <div class="vlt-form-group">
                                                <label class="has-white-color" for="email">Your email (required)</label>
                                                <input type="email" id="email" name="email" required="required" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="vlt-form-group">
                                            <label class="has-white-color" for="message">Your Message</label>
                                            <textarea name="message" id="message" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <div class="message success">Your message is successfully sent...</div>
                                        <div class="message danger">Sorry something went wrong!</div>
                                        <!--Button-->
                                        <button class="vlt-btn vlt-btn--primary"><span class="vlt-btn__text">Contact Us</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Progress Bar-->
        <ul class="vlt-fullpage-slider-progress-bar">
            <li data-menuanchor="Home"></li>
            <li data-menuanchor="Subscribe"></li>
            <li data-menuanchor="Contact"></li>
        </ul>
        <!--Numbers-->
        <div class="vlt-fullpage-slider-numbers"></div>
    </div>
    <!--Footer-->
    <footer class="vlt-footer vlt-footer--fixed">
        <!--Copyright-->
        <div class="vlt-footer-copyright">
            <p>&copy; 2020 Copiright.<br>All rights reserved.</p>
        </div>
    </footer>
</main>
<!--Libs-->

<script src="{{asset('js/scripts/index.js')}}"></script>
<script src="{{asset('vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/scripts/vlt-plugins.min.js')}}"></script>
<script src="{{asset('js/scripts/vlt-helpers.js')}}"></script>
<script src="{{asset('js/scripts/vlt-controllers.min.js')}}"></script>
</body>

</html>
