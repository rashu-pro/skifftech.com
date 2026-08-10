<?php
/**
 * Template Name: End-to-End Product Build
 *
 * End-to-End Product Build service page using the V6 dark design system
 * (Skiff header + footer). Shares css/service-page.css and js/service-page.js
 * with the other service pages.
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-e2e-product-build" class="sa-page">
  <?php get_template_part( 'template-parts/e2e-product-build/hero' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/positioning' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/outcomes' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/how' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/promise' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/capabilities' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/models' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/comparison' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/faq' ); ?>
  <?php get_template_part( 'template-parts/e2e-product-build/cta' ); ?>
</main><!-- #pg-e2e-product-build -->

<?php get_footer(); ?>
