@extends('Layouts.homeLayout')

@section('title')
    Classes
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
                            <h1>Our Services</h1>
                            <!-- Breadcrumb Row -->
                            <nav aria-label="breadcrumb" class="breadcrumb-row">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                                </ul>
                            </nav>
                            <!-- Breadcrumb Row End -->
                        </div>
                    </div>
                </div>
                <div class="banner-media">
                    <img src="assets/images/banner/pic3.png" alt="/">
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Our Team -->
        <section class="content-inner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.1s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-fitness"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Our Classes</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-user"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Our Trainers</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.3s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-medal"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Memberships</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-calendar"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Our Timeline</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-verify-1"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Our Trust</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-supplement-bottle"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Our Supplement</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.7s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-premium"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Premium Plan</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-training"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Weight Lifting</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="0.9s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-contact-center"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Online Support</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="1.0s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-settings-1"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Gym Services</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="1.1s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-exercise-2"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Streching</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 m-b30">
                        <div class="icon-bx-wraper style-1 hover-aware box-hover wow fadeInUp" data-wow-delay="1.2s">
                            <div class="icon-bx m-b20">
                                <div class="icon-cell text-primary">
                                    <i class="flaticon-star"></i>
                                </div>
                            </div>
                            <div class="icon-content">
                                <h4 class="dz-title m-b10"><a href="/serviceDetails">Best Rating</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <a href="/serviceDetails" class="btn-link">Read More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                            <div class="effect"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Team -->

        <!-- Call To Action -->
        <section class="call-action style-2 bg-img-fix bg-primary">
            <div class="container">
                <div class="inner-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="text-center text-lg-start col-xl-6 m-lg-b20 wow fadeInUp" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <h2 class="title m-0"><span class="font-weight-400">Subscribe To Our </span>Newsletter</h2>
                        </div>
                        <div class="text-center text-lg-end col-xl-6 wow fadeInUp" data-wow-delay="0.4s"
                            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                            <form class="dzSubscribe"
                                action="https://powerzone.dexignzone.com/xhtml/assets/script/mailchamp.php"
                                method="post">
                                <div class="dzSubscribeMsg"></div>
                                <div class="form-group">
                                    <div class="input-group mb-0">
                                        <div class="input-skew">
                                            <input name="dzEmail" required="required" type="email"
                                                class="form-control" placeholder="Your Email Address">
                                        </div>
                                        <div class="input-group-addon">
                                            <button name="submit" value="Submit" type="submit"
                                                class="btn btn-secondary btn-lg btn-skew h-100"><span
                                                    class="skew-inner"><span class="text">Subscribe
                                                        Now</span></span></button>
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
