@extends('Layouts.homeLayout')

@section('title')
    BIM
@endsection

@section('main')
    <div class="page-content bg-white">

        <!-- Banner  -->
        <div class="dz-bnr-inr style-2" style="background-image: url('assets/images/banner/banner-2.png')">
            <div class="banner-gradient"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="dz-bnr-inr-entry">
                            <h1>Service Details</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="banner-media">
                            <img src="assets/images/banner/pic1.png" alt="/">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Services Details Start -->
        <div class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 m-b30">
                        <aside class="side-bar left sticky-top">
                            <div class="widget service_menu_nav wow fadeInUp" data-wow-delay="0.2s">
                                <ul>
                                    <li class="active"><a href="javascript:void(0);">Motivation</a> </li>
                                    <li><a href="javascript:void(0);">Workout</a></li>
                                    <li><a href="javascript:void(0);">Online Courses</a> </li>
                                    <li><a href="javascript:void(0);">Fat Loss</a>  </li>
                                    <li><a href="javascript:void(0);">Perfect Diet</a> </li>
                                    <li><a href="javascript:void(0);">Health Coach</a> </li>
                                    <li><a href="javascript:void(0);">Weight Gain</a> </li>
                                </ul>
                                <svg width="250" height="70" viewBox="0 0 250 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 38L250 0L210 70L0 38Z" fill="url(#paint0_linear_306_1296)"></path>
                                    <defs>
                                        <linearGradient id="paint0_linear_306_1296" x1="118.877" y1="35.552" x2="250.365" y2="35.552" gradientUnits="userSpaceOnUse">
                                            <stop offset="1" stop-color="var(--primary)"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <div class="widget_contact wow fadeInUp" data-wow-delay="0.3s">
                                <div class="widget-content">
                                    <div class="icon-bx">
                                        <i class="flaticon-contact-center"></i>
                                    </div>
                                    <h4>Do you need any help?</h4>
                                    <div class="phone-number"><a href="tel:+4733378901">+91 12345 678 98</a></div>
                                    <h6 class="email">info@dexignzone.com</h6>
                                    <div class="link-btn">
                                        <a href="contact-us.html" class="btn btn-secondary btn-skew">
                                            <span class="skew-inner"><span class="text">Contact Us</span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="dz-media m-b30 wow fadeInUp" data-wow-delay="0.4s">
                            <img src="assets/images/blog/large/pic1.jpg" alt="">
                        </div>
                        <div class="dz-content">
                            <div class="m-b40">
                                <h3 class="title m-b15 font-weight-700 wow fadeInUp" data-wow-delay="0.5s">Providing world class service experiences.</h3>
                                <p class="wow fadeInUp" data-wow-delay="1.2s">We are an independent gym that is committed to working with you to gain the results you want. Whether your aim is to loose weight tone up build bulk or gain weight we can put together a gym programme or recommend the right classes for you to attend in our studios.</p>
                                <p class="wow fadeInUp" data-wow-delay="1.4s">We offer the best support and service you can imagine. Use our support forum if you have any questions and our team will respond. We have thousands of solved threads and a customer satisfaction of 97%. We do care that your site runs great!</p>
                            </div>

                            <div class="m-b40">
                                <h4 class="m-b15 wow fadeInUp" data-wow-delay="0.6s">Learn About Fitness From These Mistakes</h4>
                                <ul class="pr-list style-2 dark m-b30 wow fadeInUp" data-wow-delay="1.8s">
                                    <li><i class="flaticon-check-mark"></i>Overall Health and Wellness</li>
                                    <li><i class="flaticon-check-mark"></i>Progress Evaluation</li>
                                    <li><i class="flaticon-check-mark"></i>Rewards and Incentives</li>
                                    <li><i class="flaticon-check-mark"></i>Tracking Technology</li>
                                    <li><i class="flaticon-check-mark"></i>Motivation and Competition</li>
                                    <li><i class="flaticon-check-mark"></i>Community Engagement</li>
                                    <li><i class="flaticon-check-mark"></i>Tracking Progress</li>
                                    <li><i class="flaticon-check-mark"></i>Variety of Activities</li>
                                </ul>
                                <p class="wow fadeInUp" data-wow-delay="0.7s">We offer the best support and service you can imagine. Use our support forum if you have any questions and our team will respond. We have thousands of solved threads and a customer satisfaction of 97%. We do care that your site runs great!</p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-6 m-b30">
                                    <h3 class="m-b10 font-weight-700 wow fadeInUp" data-wow-delay="0.8s">Start Online Courses ?</h3>
                                    <p class="wow fadeInUp" data-wow-delay="2.2s">We are an independent gym that is committed to working with you to gain the results you want.</p>
                                    <p class="m-b0 wow fadeInUp" data-wow-delay="2.4s">Whether your aim is to loose weight tone up build bulk or gain weight we can put together a gym programme or recommend the right classes for you to attend in our studios members benefit.</p>
                                </div>
                                <div class="col-xl-6 m-b30">
                                    <div class="dz-media wow fadeInUp" data-wow-delay="0.9s">
                                        <img src="assets/images/blog/blog-grid/pic1.jpg" class="img-cover" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->

        <!-- Call To Action -->
        <section class="call-action style-2 bg-img-fix bg-primary">
            <div class="container">
                <div class="inner-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="text-center text-lg-start col-xl-6 m-lg-b20 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="title m-0"><span class="font-weight-400">Subscribe To Our </span>Newsletter</h2>
                        </div>
                        <div class="text-center text-lg-end col-xl-6 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <form class="dzSubscribe" action="https://powerzone.dexignzone.com/xhtml/assets/script/mailchamp.php" method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <div class="input-skew">
                                            <input name="dzEmail" required="required" type="email" class="form-control" placeholder="Your Email Address">
                                        </div>
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit" class="btn btn-secondary btn-lg btn-skew h-100"><span class="skew-inner"><span class="text">Subscribe Now</span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action -->

    </div>
@endsection