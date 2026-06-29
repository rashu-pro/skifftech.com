<?php
/**
 * Template Name: Home New
 *
 *
 * @package skifftech
 */

get_header();
$templateDirectoryUri = get_template_directory_uri();
?>

<div class="main-wrapper">
    <!-- hero slider -->
    <div class="hero-slider-wrapper">
        <div class="hero-slider swiper-container">
            <div class="swiper-wrapper">
                <div class="slide-item swiper-slide">
                    <div class="banner-wrapper">
                        <div class="banner-inner">
                            <div class="image">
                                <div class="image-holder bg-image cover" style="background-image: url(<?php echo $templateDirectoryUri ?>/images/banner_work.jpg)">

                                    <!--                    <img src="--><?php //echo $templateDirectoryUri ?><!--/images/banner_home.jpg" class="img-fluid" alt="banner">-->
                                </div>
                                <div class="bg-shadow"></div>
                            </div>

                            <div class="banner-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider-content">
                                                <div class="slider-content-wrapper">
                                                    <h2 class="banner-title">Innovative solutions & results that grow your business</h2>
                                                    <p class="banner-title-sub">We build software solutions that users love. We create amazing apps for Android, iOS & Web. Our experienced developers and marketing team can deliver great products and services which will grow your brands & exceed your expectation.</p>
                                                    <a href="https://skifftech.com/contact-us/" class="btn hover-sweep-top">
                                                        <span>Contact Us</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="banner-inner-backdrop">
                                <div class="row no-gutters h-100">
                                    <div class="col-6 black"></div>
                                    <div class="col-6"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="slide-item swiper-slide">
                    <div class="banner-wrapper">
                        <div class="banner-inner">
                            <div class="image">
                                <div class="image-holder bg-image cover" style="background-image: url(<?php echo $templateDirectoryUri ?>/images/banner_laptop.jpg)">

                                    <!--                    <img src="--><?php //echo $templateDirectoryUri ?><!--/images/banner_home.jpg" class="img-fluid" alt="banner">-->
                                </div>
                                <div class="bg-shadow"></div>
                            </div>

                            <div class="banner-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider-content">
                                                <div class="slider-content-wrapper">
                                                    <h2 class="banner-title">Results that grow your business</h2>
                                                    <p class="banner-title-sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus amet hic iste minima placeat saepe.</p>
                                                    <a href="https://skifftech.com/contact-us/" class="btn hover-sweep-top">
                                                        <span>Get Started</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="banner-inner-backdrop">
                                <div class="row no-gutters h-100">
                                    <div class="col-6 black"></div>
                                    <div class="col-6"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
<!--            <div class="swiper-pagination"></div>-->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <!-- video bg banner -->
        <div class="banner-bg-video">
            <div class="banner-bg-wrapper">
                <video autoplay muted loop id="myVideo">
                    <source src="<?php echo get_template_directory_uri() ?>/images/office_blurry.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>

                <div class="banner-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="slider-content">
                                    <div class="slider-content-wrapper">
                                        <div class="banner-title-wrapper">
                                            <span class="banner-title" id="banner-title" style="visibility: hidden">Innovative solutions and results that grow your business</span>
                                            <h2 class="banner-title typed" id="typed"></h2>
                                        </div>

                                        <p class="banner-title-sub wow fadeInUp" data-wow-delay="2s">We build software solutions that users love. We create amazing apps for Android, iOS & Web. Our experienced developers and marketing team can deliver great products and services which will grow your brands & exceed your expectation.</p>
                                        <a href="https://skifftech.com/contact-us/" class="btn hover-sweep-top wow fadeInUp" data-wow-delay="2.5s">
                                            <span>Contact Us</span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- our service new version-->
    <div class="services d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-head text-white pt-4">
                        <h2 class="section-title text-uppercase wow fadeIn">Our Services</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <p class="wow fadeIn">We design websites and mobile apps for personal, corporate and business. Our skilled dedicated teams can build custom web applications based on your requirements.
                                </p>
                            </div>
                        </div>

                        <div class="btn-holder">
                            <a href="javascript:void(0)" class="more-details wow fadeIn"><span>Know More</span><img src="<?php echo $templateDirectoryUri ?>/images/right_arrow_yellow_small.png"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="services-holder">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-single style-3 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <h4 class="m-0">Web Design and Development</h4>
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <p>We always do our best to create amazing designs for your personal and business websites.</p>
                                        <div class="icon">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_design_yellow.png">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-3 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <h4 class="m-0">Mobile App Development</h4>
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <p>Our skilled mobile app developers are dedicated to provide cost-effective mobile app development solutions that increase revenue for our clients.</p>
                                        <div class="icon">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_mobile_app_development_yellow.png">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-3 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <h4 class="m-0">Data Migration</h4>
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <p>We always do our best to create amazing designs for your personal and business websites.</p>
                                        <div class="icon">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_mobile_app_development_yellow.png">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-3 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <h4 class="m-0">Web Development</h4>
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <p>We always do our best to create amazing designs for your personal and business websites.</p>
                                        <div class="icon">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_design_yellow.png">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="left-top-pattern" style="display: none;">
            <span class="pattern first"></span>
            <span class="pattern second"></span>
            <span class="pattern third"></span>
        </div>
    </div>

    <div class="services d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-head pt-4">
                        <h2 class="section-title text-uppercase wow fadeIn">Our Services</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <p class="wow fadeIn">We design websites and mobile apps for personal, corporate and business. Our skilled dedicated teams can build custom web applications based on your requirements.
                                </p>
                            </div>
                        </div>

                        <div class="btn-holder">
                            <a href="javascript:void(0)" class="more-details wow fadeIn"><span>Know More</span><img src="<?php echo $templateDirectoryUri ?>/images/right_arrow_yellow_small.png"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="services-holder">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-single style-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_design_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Web Development</h4>
                                        <p>We always do our best to create amazing designs for your personal and business websites.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-4 wow fadeIn" data-wow-delay="0.8s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_development_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Web Development</h4>
                                        <p>We can help you in selecting the best technology for your Custom application project to boost your business.</p>
                                    </div>

                                </div>
                                <!--                                <div class="services-single wow fadeIn" data-wow-delay="0.8s">-->
                                <!--                                    <h4 class="m-0">Data Migration</h4>-->
                                <!--                                </div>-->
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-4 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_data_migration_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Data Migration</h4>
                                        <p>We can help you in selecting the best technology for your Custom application project to boost your business.</p>
                                    </div>

                                </div>
                                <div class="services-single style-3 d-none wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <h4 class="m-0">Web Development</h4>
                                    </div>
                                    <div class="services-single-body">
                                        <p>We always do our best to create amazing designs for your personal and business websites.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-4 wow fadeIn" data-wow-delay="0.8s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_mobile_app_development_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Mobile App Development</h4>
                                        <p>Skiff data migration services move databases, websites, and servers securely, whether you're migrating from an on-premises database or another cloud.</p>
                                    </div>

                                </div>
                                <!--                                <div class="services-single wow fadeIn" data-wow-delay="0.8s">-->
                                <!--                                    <h4 class="m-0">Data Migration</h4>-->
                                <!--                                </div>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="left-top-pattern" style="display: none;">
            <span class="pattern first"></span>
            <span class="pattern second"></span>
            <span class="pattern third"></span>
        </div>
    </div>

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-head pt-4">
                        <h2 class="section-title text-uppercase wow fadeIn">Our Services</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <p class="wow fadeIn">We design websites and mobile apps for personal, corporate and business. Our skilled dedicated teams can build custom web applications based on your requirements.
                                </p>
                                <p class="wow fadeIn" data-wow-delay="0.3s">We can assist you in analyzing your business needs, designing and developing applications with the goal of increasing productivity. In addition, we ensure the system security for all software and applications that we create.</p>
                            </div>
                        </div>

                        <div class="btn-holder">
                            <a href="javascript:void(0)" class="more-details wow fadeIn"><span>Know More</span><img src="<?php echo $templateDirectoryUri ?>/images/right_arrow_yellow_small.png"> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="services-holder">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-single style-2 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_design_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Web Design and Development</h4>
                                        <p>We always do our best to create amazing designs for your personal and business websites.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-2 wow fadeIn" data-wow-delay="0.8s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_mobile_app_development_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Mobile App Development</h4>
                                        <p>We can help you in selecting the best technology for your Custom application project to boost your business.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-2 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_data_migration_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Data Migration Solution</h4>
                                        <p>We can help you in selecting the best technology for your Custom application project to boost your business.</p>
                                    </div>

                                </div>
                                <div class="services-single style-3 d-none wow fadeIn" data-wow-delay="0.5s">
                                    <div class="services-single-head">
                                        <h4 class="m-0">Custom Application Development</h4>
                                    </div>
                                    <div class="services-single-body">
                                        <p>We design and develop custom web based application for corporate, personal and business. We can assist you in analyzing your business needs, designing and developing applications with the goal of increasing productivity.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="services-single style-2 wow fadeIn" data-wow-delay="0.8s">
                                    <div class="services-single-head">
                                        <div class="">
                                            <img src="<?php echo $templateDirectoryUri ?>/images/icon_custom_application_yellow_small.png">
                                        </div>
                                    </div>
                                    <div class="services-single-body">
                                        <h4 class="m-0">Custom Application Development</h4>
                                        <p>We can help you in selecting the best technology for your Custom application project to boost your business.</p>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="left-top-pattern" style="display: none;">
            <span class="pattern first"></span>
            <span class="pattern second"></span>
            <span class="pattern third"></span>
        </div>
    </div>

    <!-- PORTFOLIO SECTION -->
    <div class="our-portfolio section bg-dark-2 position-relative">
        <div class="bg-layer bg-image" style="background-image:url(<?php echo $templateDirectoryUri ?>/images/bg_portfolio.jpg)"></div>
        <div class="container">
            <div class="section-head text-center wow slideInUp" data-wow-delay="0.5s">
                <h2 class="section-title text-yellow">Our Portfolios</h2>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p>
                        We have a proper organizational working group that is fully committed to completing any projects on time. Here's a portfolio of work we've done for our clients! ​</p>
                    </div>
                </div>
            </div>

            <div class="services-wrapper pt-5">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-projects-box">
                            <div class="image-holder">
                                <img class="img-fluid wow fadeInUp" src="<?php echo $templateDirectoryUri ?>/images/portfolio_1.jpg" alt="image">
                                <!--<a href="#" class="link-btn"><i class="fa fa-plus"></i></a>-->
                            </div>
                            <!--<div class="content">-->
                            <!--    <h3><a href="#"></a></h3>-->
                            <!--    <span></span>-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-projects-box">
                            <div class="image-holder">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="0.9s" src="<?php echo $templateDirectoryUri ?>/images/portfolio_3.jpg" alt="image">
                                <!--<a href="#" class="link-btn"><i class="fa fa-plus"></i></a>-->
                            </div>
                            <!--<div class="content">-->
                            <!--    <h3><a href="#"></a></h3>-->
                            <!--    <span></span>-->
                            <!--</div>-->
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-projects-box">
                            <div class="image-holder">
                                <img class="img-fluid wow fadeInUp" data-wow-delay="1.3s" src="<?php echo $templateDirectoryUri ?>/images/portfolio_2.jpg" alt="image">
                                <!--<a href="#" class="link-btn"><i class="fa fa-plus"></i></a>-->
                            </div>
                            <!--<div class="content">-->
                            <!--    <h3><a href="#"></a></h3>-->
                            <!--    <span></span>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONAL -->
    <div class="testimonial section bg-black">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="section-title text-yellow wow fadeInUp" data-wow-delay="0.3s">Words From Our Clients</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <p class="text-white wow fadeInUp" data-wow-delay="0.5s">Customer satisfaction matters to us</p>
                    </div>
                </div>
            </div>

            <div class="services-wrapper pt-5">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-testimonials-item wow fadeIn" data-wow-delay="0.4s">
                            <p>Skiff Technologies has helped us building and maintaining our website. They are professional and turns projects around quickly and makes any edits promptly. They have a great project management skills. They added tremendous value to the project. We are confident in their ability to help us.</p>
                            <div class="client-info" style="display:none">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="<?php echo $templateDirectoryUri ?>/images/client_1.jpg" alt="image">
                                    <div class="title">
                                        <h3>Charlie Collier</h3>
                                        <span>Startup Client</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quotaion-mark">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single-testimonials-item wow fadeIn" data-wow-delay="0.6s">
                            <p>It was a pleasure to work with Skiff Technologies throughout the entire process. They are extremely knowledgeable and will never make you feel as though you are asking for too much. I would recommend Skiff Technologies to anyone looking for a perfect website for their business.</p>
                            <div class="client-info" style="display:none">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="<?php echo $templateDirectoryUri ?>/images/client_1.jpg" alt="image">
                                    <div class="title">
                                        <h3>Allan Walker</h3>
                                        <span>Startup Client</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quotaion-mark">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Details -->
    <div class="company-details bg-dark-2" style="display:none">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="wt-icon-box-wraper text-right text-white">
                                    <span class="icon-md p-t10">
                                        <i class="fa fa-product-hunt"></i>
                                    </span>
                        <div class="icon-content">
                            <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">25</span><b>+</b></div>
                            <span class="text-uppercase">PROJECT COMPLETED</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="wt-icon-box-wraper text-right text-white">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-users"></i>
                                    </span>
                        <div class="icon-content">
                            <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">12</span><b>+</b></div>
                            <span>HAPPY CLIENTS</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="wt-icon-box-wraper text-right text-white">
                                    <span class="icon-md p-t10">
                                        <i class="fa fa-briefcase"></i>
                                    </span>
                        <div class="icon-content">
                            <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">15</span><b>+</b></div>
                            <span class="text-uppercase">PROJECT RUNNING</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="wt-icon-box-wraper text-right text-white">
                                    <span class="icon-md p-t10">
                                    	<i class="fa fa-users"></i>
                                    </span>
                        <div class="icon-content">
                            <div class="font-26 font-weight-800 text-black m-b5"><span class="counter">1500</span><b>+</b></div>
                            <span>PROJECT OVERVIEW</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- cta section -->
    <div class="cta section">
        <div class="bg-layer bg-image" style="background-image:url(<?php echo $templateDirectoryUri ?>/images/bg_get_started_section.jpg)"></div>
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <h3 class="font-big text-uppercase text-black title-animation m-b15 wow fadeInUp" data-wow-delay="0.4s">
                                <span>Would you like to start a project with us?</span>
                            </h3>
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <p class="m-0 font-20 wow fadeIn" data-wow-delay="0.7s">We are a team of highly productive, passionate, creative, and hardworking professionals who ensure that our potential clients receive quality services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center mt-4">
                        <a href="https://skifftech.com/contact-us/" class="btn btn-big hover-sweep-top wow fadeInUp" data-wow-delay="0.7s">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- TEAM SECTION -->
    <div class="about-us section bg-dark-2">

        <div class="container">
			
			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="about-image">
						<img src="<?php echo get_field('about_section_image') ?>" class="img-fluid wow fadeInLeft" data-wow-delay="0.2s">
					</div>
				</div>
				
				<div class="col-md-6 about-content wow fadeInRight" data-wow-delay="0.5s">
					<div>
						<h2 class="section-title text-yellow">About Us</h2>
						
						<p>We are a team of skilled and experienced software developers, engineers, and designers. We can provide you with the perfect solution for any of your concepts, suggestions or ideas and assist you to the best and most appropriate technology for your project.​</p>
						
					</div>
				</div>
			</div>
			

<!--             <div class="services-wrapper pt-5">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-scientist-item-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="image-holder">
                                <img src="<?php echo $templateDirectoryUri ?>/images/team_1.jpg" alt="image">
                                <ul class="social m-0 p-0">
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>Merv Adrian</h3>
                                <span>Data Management</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-scientist-item-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="image-holder">
                                <img src="<?php echo $templateDirectoryUri ?>/images/team_2.jpg" alt="image">
                                <ul class="social m-0 p-0">
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>Merv Adrian</h3>
                                <span>Data Management</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="single-scientist-item-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="image-holder">
                                <img src="<?php echo $templateDirectoryUri ?>/images/team_1.jpg" alt="image">
                                <ul class="social m-0 p-0">
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3>Merv Adrian</h3>
                                <span>Data Management</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->
        </div>
    </div>


</div>

<?php
get_footer();