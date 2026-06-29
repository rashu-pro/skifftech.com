<?php
/**
 * Created by PhpStorm.
 * User: Rashu
 * Date: 23-08-21
 * Time: 13.49
 */

add_shortcode('cta','cta');
function cta(){
    ?>
    <div class="cta section">
        <div class="bg-layer bg-image" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/bg_get_started_section.jpg)"></div>
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
<?php
}