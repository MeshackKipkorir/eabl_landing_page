@extends('layout')
@section('content')
        <!-- Start Page Wrapper -->
        <main class="page-wrapper">

            <!-- Start Slider Area -->
            <div class="axil-slider-area axil-slide-activation">
                <!-- Start Single Slide -->
                <div class="axil-slide slide-style-default theme-gradient slider-fixed-height d-flex align-items-center paralax-area" style="background-image: url('assets/images/bg/bg.png');height:985px;">
                    <div class="container">
                        <div class="row align-items-center pt_md--60 mt_sm--60">
                            <div class="col-lg-7 col-12 order-2 order-lg-1">
                                <div class="content pt_md--30 pt_sm--30">
                                    <h1 class="axil-display-1 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="500ms">Advertising Orchestrated</h1>
                                    <p class="subtitle-3 wow slideFadeInUp" data-wow-duration="1s" data-wow-delay="800ms">Data Driven Omni-channel Programmatic Digital Experience Platform with a Global Reach
                                    </p>
                                        <a class="axil-button btn-large btn-transparent wow slideFadeInUp"  href="#form" data-wow-duration="1s" data-wow-delay="1300ms">
                                            <span class="button-text">Learn More</><span class="button-icon"></span>

                                            <!-- <video width="320" height="240" controls>
                                              <source src="assets/video/mediapal.mp4" type="video/mp4">
                                                <source src="movie.ogg" type="video/ogg">
                                                  Your browser does not support the video tag.
                                            </video> -->
                                          </a>
                                </div>

                            </div>
                            <div class="col-lg-5 col-12 order-1 order-lg-2">
                                <div class="topskew-thumbnail-group text-left text-lg-right">
                                    <div class="thumbnail paralax-image">
                                        <img src="assets/images/others/keystoke-image-3.jpg" alt="Keystoke Images">
                                    </div>
                                    <div class="image-group">
                                        <img class="paralax-image" src="assets/images/others/keystoke-image-4.svg" alt="Keystoke Images">
                                    </div>
                                    <div class="shape-group">
                                        <div class="shape shape-1 paralax--1">
                                            <img src="assets/images/others/shape-05.svg" alt="keystoke">
                                        </div>
                                        <div class="shape shape-2">
                                            <img class="customOne" src="assets/images/others/shape-06.svg" alt="keystoke">
                                        </div>
                                        <div class="shape shape-3 paralax--3">
                                            <img src="assets/images/others/shape-04.svg" alt="keystoke">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
            <!-- End Slider Area -->

            <!-- Start About Us Area -->
            <div class="axil-about-us-area ax-section-gap bg-color-white axil-shape-position">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                            <div class="axil-about-inner">
                                <div class="section-title text-left">
{{--                                    <span class="sub-title extra08-color move-up wow">about us</span>--}}
                                    <h2 class="title move-up wow">Join our lucrative clientele
                                        <br /></h2>
                                        <p class="subtitle-2 mb--50 mb_lg--20 mb_md--20 mb_sm--15 move-up wow">
                                            Fill the form to get more details
                                        </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-5 offset-xl-1 col-md-12 col-12 mt_md--30 mt_sm--30" id="form">
                            <div class="contact-form-wrapper">
                                <!-- Start Contact Form -->
                                <div class="axil-contact-form contact-form-style-1">
                                    <h3 class="title">Please fill in the details below for inquiries</h3>
                                    <form method="post" action="{{route('storeUserData')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="form-group">
                                            @if ($errors->any())
                                                @foreach($errors->all() as $error)
                                            <p class="alert alert-danger">{{$error}}</p>
                                                @endforeach
                                            @endif
                                            <input type="text" name="name">
                                            <label>Full Name</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email">
                                            <label>Email Address</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone_number">
                                            <label>Phone Number</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="company">
                                            <label>Agency/Brand</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="location">
                                            <label>Designation</label>
                                            <span class="focus-border"></span>
                                        </div>
                                        <div class="form-group">
                                            <button class="axil-button btn-large btn-transparent w-100">
                                                <span class="button-text">Submit</span><span
                                                    class="button-icon"></span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="callto-action-wrapper text-center">
                                        <span class="text">Or call us now</span>
                                        <span><i class="fal fa-phone-alt"></i> <a href="tel:0794891995">(+254) 794 891 999</a></span>
                                    </div>
                                </div>
                                <!-- End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Shape Group  -->
                <div class="axil-shape-group">
                    <div class="shape shape-1">
                        <img src="assets/images/others/shape-12.svg" alt="Shape Images">
                    </div>
                    <div class="shape shape-2">
                        <img src="assets/images/others/shape-03.svg" alt="Shape Images">
                    </div>
                </div>
                <!-- End Shape Group  -->
            </div>
            <!-- End About Us Area -->

            <!-- Start Counterup Area -->
            <div class="axil-counterup-area ax-section-gap bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title text-center">
{{--                                <span class="sub-title extra08-color wow" data-splitting>experts in field</span>--}}
                                <h3 class="title wow" data-splitting>Key Metrics</h3>
{{--                                <p class="subtitle-2 wow" data-splitting>In vel varius turpis, non dictum sem. Aenean in--}}
{{--                                    efficitur ipsum, in--}}
{{--                                    egestas ipsum. Mauris in mi ac tellus.</p>--}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start Counterup Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="axil-counterup mt--60 text-center counter-first move-up wow">
                                <div class="icon">
                                    <img src="assets/images/counterup/shape-01.png" alt="Shape Images">
                                </div>
                                <h3 class="">1.5B +</h3>
                                <p>Profiled Users</p>
                            </div>
                        </div>
                        <!-- End Counterup Area -->

                        <!-- Start Counterup Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="axil-counterup mt--60 text-center counter-first move-up wow">
                                <div class="icon">
                                    <img src="assets/images/counterup/shape-02.png" alt="Shape Images">
                                </div>
                                <h3 class=" ">1T +</h3>
                                <p>Impressions</p>
                            </div>
                        </div>
                        <!-- End Counterup Area -->

                        <!-- Start Counterup Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="axil-counterup mt--60 mt_md--30 mt_sm--30 text-center counter-first move-up wow">
                                <div class="icon">
                                    <img src="assets/images/counterup/shape-03.png" alt="Shape Images">
                                </div>
                                <h3 class="count">20</h3>
                                <p>Ad Formats</p>
                            </div>
                        </div>
                        <!-- End Counterup Area -->

                        <!-- Start Counterup Area -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                            <div class="axil-counterup mt--60 text-center counter-first move-up wow">
                                <div class="icon">
                                    <img src="assets/images/counterup/shape-04.png" alt="Shape Images">
                                </div>
                                <h3 class="">3M +</h3>
                                <p>Apps&Sites</p>
                            </div>
                        </div>
                        <!-- End Counterup Area -->

                    </div>
                </div>
            </div>



        </main>
        <!-- End Page Wrapper -->
@endsection
