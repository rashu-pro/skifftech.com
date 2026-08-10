<?php
/**
 * Template Name: Dedicated Development Team
 *
 * Dedicated Development Team service page using the V6 dark design system
 * (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-dedicated-team">
  <?php get_template_part( 'template-parts/dedicated-team/hero' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/positioning' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/outcomes' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/how' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/composition' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/expertise' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/models' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/comparison' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/faq' ); ?>
  <?php get_template_part( 'template-parts/dedicated-team/cta' ); ?>
</main><!-- #pg-dedicated-team -->

<?php get_footer(); ?>
