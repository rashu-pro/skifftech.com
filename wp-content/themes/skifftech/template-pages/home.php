<?php
/**
 * Template Name: Home Page Template
 *
 *
 * @package skifftech
 */

get_header();
$templateDirectoryUri = get_template_directory_uri();
?>

<div class="main-wrapper">
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
                        <div class="col-md-6">
                            <h2 class="banner-title">Innovative solutions & results that grow your business</h2>
                            <p class="banner-title-sub">We build software solutions that users love. We create amazing apps for Android, iOS & Web. Our experienced developers and marketing team can deliver great products and services which will grow your brands & exceed your expectation.</p>
                            <a href="https://skifftech.com/contact-us/" class="btn btn-primary">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--    HOW CAN WE HELP SECTION-->
    <div class="our-services section bg-light">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="section-title">Our Services</h2>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p>We design websites and mobile apps for personal, corporate and business. Our skilled dedicated teams can build custom web applications based on your requirements. 
                        </p>
                        <p>
                            We can assist you in analyzing your business needs, designing and developing applications with the goal of increasing productivity. In addition, we ensure the system security for all software and applications that we create.
                            </p>
                            <p>Please contact us if you have any questions about our software and application development strategy.​</p>
                    </div>
                </div>
            </div>

            <div class="services-wrapper pt-5">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="service-single">
                            <div class="service-single-inner">
                                <div class="icon-holder mb-4">
                                    <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_design.png">
                                </div>
                                <div class="service-single-content">
                                    <h4 class="font-roboto font-medium font-700 mb-3">Web Design and Development</h4>
                                    <p class="m-10">
                                        We always do our best to create amazing designs for your personal and business websites.
                                    </p>
                                    <p class="m-0">
                                        We invest our time to understand our customer needs for their business before delivering a well-thought-out design in a short period of time. For web development, we support ASP.NET, MS SQL Server, HTML, PHP, JAVA, AJAX, JQuery, JSP, CSS2, and the MySQL database.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="service-single">
                            <div class="service-single-inner">
                                <div class="icon-holder mb-4">
                                    <img src="<?php echo $templateDirectoryUri ?>/images/icon_web_development.png">
                                </div>
                                <div class="service-single-content">
                                    <h4 class="font-roboto font-medium font-700 mb-3">Data Migration Solution</h4>
                                    <p class="m-10">Skiff data migration services move databases, websites, and servers securely, whether you're migrating from an on-premises database or another cloud. 
                                    </p>
                                    
                                    <p class="m-0">
                                  Skiff Database Migration Service enables you to easily and securely transfer databases to Skiff. Our Migration Service can move your data from and among the most popular commercial and open-source databases.
</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="service-single">
                            <div class="service-single-inner">
                                <div class="icon-holder mb-4">
                                    <img src="<?php echo $templateDirectoryUri ?>/images/ios-development.png">
                                </div>
                                <div class="service-single-content">
                                    <h4 class="font-roboto font-medium font-700 mb-3">Custom Application Development</h4>
                                    <p class="m-10">
                                        We can help you in selecting the best technology for your Custom application project to boost your business.
                                    </p>
                                    <p class="m-0">
                                        Skiff combines consulting experience in custom application creation, data processing, integration, and tech advisory services to provide full end-to-end digital solutions for the most challenging business problems.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PORTFOLIO SECTION -->
    <div class="our-portfolio section">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="section-title">Our Portfolios</h2>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <p>We are a team of highly productive, passionate, creative, and hardworking professionals who ensure that our potential clients receive quality services.
                        </p>
                        <p>
                        The company claims to provide great web, data migration and custom app development services to a large community. We assist our clients in identifying the best solution and product to deliver high-quality experience and help to achieve the best outcomes.
                        </p>
                        <p>
                        We have highly qualified and experienced developers and marketing team who can understand and meet any business needs. Our services are focused on quality rather than profit.
                        </p>
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
                                <img src="<?php echo $templateDirectoryUri ?>/images/portfolio_1.jpg" alt="image" class="img-fluid">
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
                                <img src="<?php echo $templateDirectoryUri ?>/images/portfolio_3.jpg" alt="image" class="img-fluid">
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
                                <img src="<?php echo $templateDirectoryUri ?>/images/portfolio_2.jpg" alt="image" class="img-fluid">
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
    <div class="testimonial section bg-333">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="section-title text-white">Words From Our Clients</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <p class="text-white">Customer Satisfaction Matters To Us​</p>
                    </div>
                </div>
            </div>

            <div class="services-wrapper pt-5">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="single-testimonials-item">
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
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="single-testimonials-item">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Company Details -->
    <div class="company-details" style="display:none">
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

    <!-- TEAM SECTION -->
    <div class="our-portfolio section bg-light">
        <div class="container">
			
			<div class="row no-gutters">
				<div class="col-md-6">
					<div class="about-image">
						<img src="<?php echo get_field('about_section_image') ?>" class="img-fluid">
					</div>
				</div>
				
				<div class="col-md-6" style="background:#212142;color:#fff;display:flex;align-items:center;padding:50px">
					<div>
						<h2 class="section-title">About Us</h2>
						
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

    <div class="cta section">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div>
                            <h3 class="font-roboto font-weight-600 m-b15">Would you like to start a project with us?</h3>
                            <p class="m-0">We are a team of highly productive, passionate, creative, and hardworking professionals who ensure that our potential clients receive quality services.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right">
                        <a href="https://skifftech.com/contact-us/" class="btn btn-primary btn-big">Get Started</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>

<?php
get_footer();