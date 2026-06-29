<?php
/**
 * Template Name: Home V6
 *
 * Homepage using the V6 dark design system (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header( 'skiff' );
?>

<main id="pg-home">
  <?php get_template_part( 'template-parts/home/hero' ); ?>
</main><!-- #pg-home -->

<?php get_footer( 'skiff' ); ?>
