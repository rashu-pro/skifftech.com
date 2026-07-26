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

<main id="pg-about">
  <?php get_template_part( 'template-parts/about/hero' ); ?>
  <?php get_template_part( 'template-parts/about/story' ); ?>
  <?php get_template_part( 'template-parts/about/letter' ); ?>
  <?php get_template_part( 'template-parts/about/principles' ); ?>
  <?php get_template_part( 'template-parts/about/team-teaser' ); ?>
  <?php get_template_part( 'template-parts/about/cta' ); ?>
</main><!-- #pg-about -->

<?php get_footer(); ?>
