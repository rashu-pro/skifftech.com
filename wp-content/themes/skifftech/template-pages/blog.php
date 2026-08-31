<?php
/**
 * Template Name: Blog
 *
 * Blog index page using the V6 dark design system (Skiff header + footer).
 * Lists real published posts: the newest as a featured card, the rest in a
 * paginated grid.
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

get_header();

$skt_blog_paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : ( get_query_var( 'page' ) ? get_query_var( 'page' ) : 1 );

$skt_featured_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 1,
		'no_found_rows'  => true,
	)
);
$skt_featured_post = $skt_featured_query->have_posts() ? $skt_featured_query->posts[0] : null;

$skt_grid_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => 6,
		'paged'          => $skt_blog_paged,
		'post__not_in'   => $skt_featured_post ? array( $skt_featured_post->ID ) : array(),
	)
);
?>

<main id="pg-blog">
  <?php get_template_part( 'template-parts/blog/hero' ); ?>
  <?php get_template_part( 'template-parts/blog/featured', null, array( 'post' => $skt_featured_post ) ); ?>
  <?php get_template_part( 'template-parts/blog/grid', null, array( 'query' => $skt_grid_query, 'paged' => $skt_blog_paged ) ); ?>
</main><!-- #pg-blog -->

<?php
wp_reset_postdata();
get_footer();
