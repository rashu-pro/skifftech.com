<?php
/**
 * The header for our theme — V6 dark gold design.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skifftech
 */

$tpl = get_template_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Inter:wght@400;450;500;600&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
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

<header id="hdr">
  <div class="hdr-row">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
      <img src="https://skifftech.com/wp-content/uploads/2022/05/skiff-logo-new-version-white.png"
           alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
           class="brand-logo">
    </a>

    <?php wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class'     => 'navlinks',
        'container'      => false,
    ) ); ?>

    <div class="nav-cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-skiff">Schedule a Meeting</a>
      <button class="burger" id="burger" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>

  </div><!-- .hdr-row -->

  <!-- Mobile navigation panel (full-page drawer) -->
  <div id="mnav">
    <?php wp_nav_menu( array(
        'theme_location' => 'menu-1',
        'container'      => false,
        'menu_id'        => 'mnav-menu',
        'menu_class'     => 'mnav-list',
    ) ); ?>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-skiff mnav-cta">Schedule a Meeting</a>
  </div>

</header><!-- #hdr -->
