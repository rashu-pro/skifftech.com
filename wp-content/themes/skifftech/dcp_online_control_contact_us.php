<?php
/**
 * Template Name: DCP Contact
 *
 *
 * @package skifftech
 */
$templateDirectoryUri = get_template_directory_uri();
get_header('dcp');
?>

<!-- Content-->
<!-- Content Wrapper. Contains page content -->
<div class="page-wrapper">

    <!-- Main content -->

    <div class="bg-grey breadcrumb text-white pt-4 pb-4">
        <div class="container px-4 text-dark text-center">
            <h1 class="fw-bolder">Contact Us</h1>
        </div>
    </div>

    <div class="content-wrapper pt-sm-0 pt-md-4">
        <div class="contact-page style-2">
            <div class="container">
                <div class="row justify-content-between contact-row">

                    <!--contact address section-->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5 bg-blue">
                        <div class="contact-left">
                            <div class="contact-left-inner">
                                <div class="icon-box mb-4">
                                    <div class="icon">
                                        <img src="<?php echo $templateDirectoryUri ?>/images/dcp_icon_address.png" class="img-fluid">
                                    </div>
                                    <div class="box">
                                        <h4 class="section-title">Office Address</h4>
                                        <p>
                                            Makkah Madina Trade Centre, 5th Floor, Plot 78,
                                            Agrabad C/A Chittagong, 4100
                                        </p>
                                    </div>
                                </div>

                                <div class="icon-box">
                                    <div class="icon">
                                        <img src="<?php echo $templateDirectoryUri ?>/images/dcp_icon_email.png" class="img-fluid">
                                    </div>
                                    <div class="box">
                                        <h4 class="section-title">Email address</h4>
                                        <p><a href="mailto:support@skifftech.com">support@skifftech.com</a> </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--contact form section-->
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7 bg-blue-light">
                        <?php echo do_shortcode('[contact-form-7 id="3861" title="DCP-Contact Form"]
') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End / Content-->

<?php
get_footer('dcp');