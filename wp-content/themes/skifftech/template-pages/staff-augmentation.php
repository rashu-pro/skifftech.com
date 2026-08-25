<?php
/**
 * Template Name: Staff Augmentation
 *
 * Staff Augmentation service page using the V6 dark design system
 * (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-staff-augmentation">
  <?php get_template_part( 'template-parts/staff-augmentation/hero' ); ?>
  <?php get_template_part( 'template-parts/staff-augmentation/positioning' ); ?>
  <?php get_template_part( 'template-parts/staff-augmentation/outcomes' ); ?>
  <?php get_template_part( 'template-parts/staff-augmentation/why-skiff' ); ?>
  <?php get_template_part( 'template-parts/staff-augmentation/how' ); ?>
  <?php get_template_part( 'template-parts/staff-augmentation/faq' ); ?>
  <?php get_template_part( 'template-parts/staff-augmentation/cta' ); ?>
</main><!-- #pg-staff-augmentation -->

<?php get_footer(); ?>
