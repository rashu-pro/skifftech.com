<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skifftech
 */

?>

	<footer id="colophon" class="site-footer style-new">

        <div class="footer-main">
            <div class="footer-content">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-md-7">
                            <div class="footer-logo">
								<a href="https://skifftech.com"><img src="https://skifftech.com/wp-content/uploads/2022/05/skiff-logo-new-version-white.png" class="img-fluid"></a>
                            </div>

                            <div class="footer-menu-wrapper">
                                <ul class="nav justify-content-start mt-4">
<!--                                     <li><a href="https://skifftech.com/">Home</a> </li> -->
                                    <li><a href="https://skifftech.com/about-us/">About Us</a> </li>
                                    <li><a href="https://skifftech.com/contact-us/">Contact Us</a> </li>
                                    <li><a href="https://skifftech.com/services/">Our Services</a> </li>
									<li><a href="https://skifftech.com/blogs/">Blogs</a> </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div>
                            <h4>ADDRESS</h4>
                            <p class="address-text">
                            <span><i class="fa fa-map-marker"></i></span> <span class="pl-2">1103, CDA Avenue, East Nasirabad,<br> Panchlaish, Chittagong</span>
                            </p>
                            </div>

                            <div class="footer-widgets">
<!--                                 <h3 class="footer-widgets-title mb-4 text-white">Contact Us</h3> -->
                                <div class="footer-widgets-content">
                                    <p class="nav justify-content-start-2 mt-4">
                                        <a href="tel:+8801767839243"><i class="fa fa-phone"></i> <span class="pl-2">+8801767839243</span> </a>
                                        <a href="mailto:info@skifftech.com" class="d-block d-sm-block d-md-inline-block ml-0 ml-md-2"><i class="fa fa-envelope"></i> <span class="pl-2">info@skifftech.com</span> </a>
                                    </p>
<!--                                     <p class="mb-0"><i class="fa fa-map-marker"></i> <span class="pl-2">1103 CDA Avenue, Chittagong, Bangladesh</span></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="site-info">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="m-0 text-center text-md-left">Copyright © <?php echo date('Y') ?> Skiff Technologies, All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <ul class="nav social-nav pt-3 pt-md-0">
                            <li><a class="fb" href="https://www.facebook.com/skiff.technologies" target="_blank"><i class="fa fa-facebook"></i> </a> </li>
                            <li><a class="twt" href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
<!--                             <li><a class="yt" href="javascript:void(0)"><i class="fa fa-youtube"></i> </a> </li> -->
                            <li><a class="ln" href="javascript:void(0)"><i class="fa fa-linkedin"></i> </a> </li>
                        </ul>
                    </div>
                </div>

            </div>

        </div><!-- .site-info -->
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
