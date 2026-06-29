<?php
/**
 * Template Name: Blank — Skiff Header
 *
 * Blank canvas template using the V6 dark header (header-skiff.php).
 * Assign this template to any page in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header( 'skiff' );
?>

<style>
  /* Push content below the 78px fixed header */
  .skiff-page-wrap { padding-top: 78px; min-height: 100vh; background: #100F0D; }
</style>

<main id="primary" class="skiff-page-wrap">
  <?php
  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;
  ?>
</main>

<?php get_footer( 'skiff' ); ?>
