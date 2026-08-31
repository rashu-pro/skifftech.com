<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package skifftech
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function skifftech_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'skifftech_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function skifftech_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'skifftech_pingback_header' );

/**
 * Estimated reading time for a post, e.g. "7 min read".
 *
 * @param int|WP_Post $post Post ID or object. Defaults to the current post.
 * @return string
 */
function skifftech_reading_time( $post = null ) {
	$word_count = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', $post ) ) );
	$minutes    = max( 1, (int) ceil( $word_count / 200 ) );

	return sprintf( '%d min read', $minutes );
}

/**
 * The Epub Reader plugin's `single_template` filter (er-custom-post.php,
 * reader_template()) returns an undefined $single for anything that isn't
 * its own epub post type, discarding the template WordPress had already
 * resolved and silently falling back to index.php for every ordinary post —
 * so single.php never actually runs. Force it back for singular posts here
 * rather than editing the third-party plugin file.
 *
 * @param string $template Resolved template path.
 * @return string
 */
function skifftech_fix_single_template( $template ) {
	if ( is_singular( 'post' ) ) {
		$theme_single = get_theme_file_path( 'single.php' );
		if ( file_exists( $theme_single ) ) {
			return $theme_single;
		}
	}

	return $template;
}
add_filter( 'template_include', 'skifftech_fix_single_template', 99 );

/**
 * URL of the page currently assigned the Blog template
 * (template-pages/blog.php), resolved dynamically since it can be
 * renamed/re-slugged in wp-admin. Falls back to /blogs/ if none is assigned.
 *
 * @return string
 */
function skifftech_get_blog_url() {
	static $url = null;

	if ( null === $url ) {
		$pages = get_posts(
			array(
				'post_type'   => 'page',
				'post_status' => 'publish',
				'meta_key'    => '_wp_page_template', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
				'meta_value'  => 'template-pages/blog.php', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value
				'numberposts' => 1,
			)
		);
		$url = $pages ? get_permalink( $pages[0] ) : home_url( '/blogs/' );
	}

	return $url;
}
