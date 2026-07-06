<?php
/**
 * Template Name: Team
 *
 * Team page using the V6 dark design system (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-team">
  <?php get_template_part( 'template-parts/team/hero' ); ?>
  <?php get_template_part( 'template-parts/team/leadership' ); ?>
  <?php get_template_part( 'template-parts/team/roster' ); ?>
  <?php get_template_part( 'template-parts/team/cta' ); ?>
</main><!-- #pg-team -->

<?php get_footer(); ?>
