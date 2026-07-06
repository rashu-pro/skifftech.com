<?php
/**
 * Template Name: Home V6
 *
 * Homepage using the V6 dark design system (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();
?>

<main id="pg-home">
  <?php get_template_part( 'template-parts/home/hero' ); ?>
  <?php get_template_part( 'template-parts/home/clients' ); ?>
  <?php get_template_part( 'template-parts/home/reviews' ); ?>
  <?php get_template_part( 'template-parts/home/models' ); ?>
  <?php get_template_part( 'template-parts/home/services' ); ?>
  <?php 
  //get_template_part( 'template-parts/home/products' );
   ?>
  <?php get_template_part( 'template-parts/home/case-study' ); ?>
  <?php 
  //get_template_part( 'template-parts/home/industries' ); 
  ?>
  <?php get_template_part( 'template-parts/home/why' ); ?>
  <?php get_template_part( 'template-parts/home/process' ); ?>
  <?php get_template_part( 'template-parts/home/tech-stack' ); ?>
  <?php get_template_part( 'template-parts/home/stats' ); ?>
  <?php get_template_part( 'template-parts/home/faq' ); ?>
  <?php get_template_part( 'template-parts/home/cta' ); ?>
</main><!-- #pg-home -->

<?php get_footer(); ?>
