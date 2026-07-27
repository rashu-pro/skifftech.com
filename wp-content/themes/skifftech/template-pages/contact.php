<?php
/**
 * Template Name: Contact Us
 *
 * Contact page using the V6 dark design system (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-contact">
  <?php get_template_part( 'template-parts/contact/hero' ); ?>
  <?php get_template_part( 'template-parts/contact/form' ); ?>
</main><!-- #pg-contact -->

<?php get_footer(); ?>
