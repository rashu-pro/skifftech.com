<?php
/**
 * Template Name: About Us
 *
 * About Us page using the V6 dark design system (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-about-us">
  <?php get_template_part( 'template-parts/about-us/hero' ); ?>
  <?php get_template_part( 'template-parts/about-us/letter' ); ?>
  <?php get_template_part( 'template-parts/about-us/how' ); ?>
  <?php get_template_part( 'template-parts/about-us/team' ); ?>
  <?php get_template_part( 'template-parts/about-us/cta' ); ?>
</main><!-- #pg-about-us -->

<?php get_footer(); ?>
