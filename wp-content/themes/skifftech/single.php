<?php
/**
 * The template for displaying all single posts — V6 dark design system
 * (Skiff header + footer).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package skifftech
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>

	<main id="pg-blog-article">
	  <div class="ar-prog" id="arProg" aria-hidden="true"></div>

	  <?php get_template_part( 'template-parts/blog-article/header' ); ?>
	  <?php get_template_part( 'template-parts/blog-article/lead-image' ); ?>

	  <section class="ct-section" style="padding-top:0">
	    <div class="ct-wrap">
	      <article class="ar-prose reveal" id="arBody">
	        <?php the_content(); ?>
	      </article>
	    </div>
	  </section>

	  <?php get_template_part( 'template-parts/blog-article/prev-next' ); ?>
	</main><!-- #pg-blog-article -->

	<?php
endwhile;

get_footer();
