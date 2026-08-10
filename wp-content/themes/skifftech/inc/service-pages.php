<?php
/**
 * Service page helpers.
 *
 * The V6 service pages (Dedicated Development Team, End-to-End Product Build,
 * and future siblings) cross-link to each other. Slugs are chosen by whoever
 * creates the page in WP Admin, so links are resolved by page template instead
 * of being hardcoded.
 *
 * @package skifftech
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Templates that use the shared service page design (css/service-page.css).
 *
 * Keys are the template files relative to the theme root; values are the
 * fallback slug used when no published page has been assigned the template yet.
 *
 * @return array<string,string> Template file => fallback slug.
 */
function skifftech_service_page_templates() {
	return array(
		'template-pages/dedicated-team.php'      => 'dedicated-development-team',
		'template-pages/e2e-product-build.php'   => 'end-to-end-product-build',
		'template-pages/staff-augmentation.php'  => 'staff-augmentation',
	);
}

/**
 * Whether the current request uses one of the shared service page templates.
 *
 * @return bool True when the shared service page assets should be enqueued.
 */
function skifftech_is_service_page() {
	return is_page_template( array_keys( skifftech_service_page_templates() ) );
}

/**
 * Permalink of the page assigned a given service page template.
 *
 * Falls back to the template's default slug when no page uses the template,
 * so links still point somewhere sensible on a fresh install.
 *
 * @param string $template Template file, e.g. 'template-pages/dedicated-team.php'.
 * @return string Escaped-ready URL.
 */
function skifftech_service_page_url( $template ) {
	$templates = skifftech_service_page_templates();
	$fallback  = isset( $templates[ $template ] ) ? $templates[ $template ] : '';

	$cache_key = 'skifftech_service_page_url_' . md5( $template );
	$cached    = wp_cache_get( $cache_key, 'skifftech' );

	if ( false !== $cached ) {
		return $cached;
	}

	$pages = get_posts(
		array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_key'       => '_wp_page_template', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
			'meta_value'     => $template, // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value
			'no_found_rows'  => true,
		)
	);

	$url = $pages ? get_permalink( $pages[0] ) : home_url( '/' . $fallback . '/' );

	wp_cache_set( $cache_key, $url, 'skifftech' );

	return $url;
}
