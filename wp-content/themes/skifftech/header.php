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

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-VHL9695B65"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-VHL9695B65');
		</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#primary">--><?php //esc_html_e( 'Skip to content', 'skifftech' ); ?><!--</a>-->

	<header id="masthead" class="site-header headroom">
        <div class="header container">
            <nav class="navbar navbar-expand-lg justify-content-between">
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="https://skifftech.com/wp-content/uploads/2022/05/skiff-logo-new-version-white.png" class="logo logo-light" align="skifftech">
                    <img src="https://skifftech.com/wp-content/uploads/2022/05/skiff-logo-new-version-white.png" class="logo logo-dark" align="skifftech">
                </a>

                <div class="d-flex justify-content-end align-items-center navbar-div">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'container'     => false
                        )
                    );
                    ?>

                    <div class="right-navbar">
                        <ul class="nav">
                            <li>
                                <a href="http://skifftech.com/contact-us" class="btn btn-quote hover-sweep-top">
                                    <span>Get Started</span>
                                </a>
                            </li>
                            <li class="nav-button-li">
                                <a href="javascript:void(0)" class="nav-button">
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                    <span class="bar"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
	</header><!-- #masthead -->
