<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skifftech
 */

$templateDirectoryUri = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo get_the_title() ?> | DCP Online Control</title>
    <link rel="icon" type="image/x-icon" href="<?php echo $templateDirectoryUri ?>/images/dcp_favicon.ico">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo $templateDirectoryUri ?>/css/dcp_styles.css" rel="stylesheet">

    <style>
        .wpcf7-submit{
            background-color: #004b76;
            min-width: 180px;
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
        }
        .wpcf7-submit:hover{
            background-color: #005a8b;
            color: #fff;
        }
        .contact-page.style-2 .contact-form .form-control {
            padding: 8px 15px;
        }
    </style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-VHL9695B65"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-VHL9695B65');
		</script>
</head>

<body id="page-top">
<?php wp_body_open(); ?>

<!-- Header & Sidebar -->
<nav class="navbar navbar-expand-lg bg-white fixed-top" id="mainNav">
    <div class="container px-4">
        <a class="navbar-brand" href="javascript:void(0)"><img src="<?php echo $templateDirectoryUri ?>/images/dcp_logo_footer.png"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"></path></svg>
            </span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="https://skifftech.com/dcp-online-control/privacy-policy/">Privacy Policy</a></li>
                <li class="nav-item"><a class="nav-link" href="https://skifftech.com/dcp-online-control/terms-and-condition/">Terms &amp; Conditions</a></li>
                <li class="nav-item"><a class="nav-link active" href="javascript:void(0)">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- End / header -->
