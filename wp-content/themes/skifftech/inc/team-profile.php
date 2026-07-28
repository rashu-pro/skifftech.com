<?php
/**
 * Team member profile pages — data helpers + auto-provisioning.
 *
 * Team data is a plain PHP array (template-parts/team/team-data.php), not a
 * CPT/ACF field group. Each member with a 'modal' key gets a full profile
 * page (template-pages/team-profile.php) instead of the old in-page modal.
 * Those pages are real WP Pages — created automatically as children of
 * whichever page is assigned the "Team" template, the first time an admin
 * screen loads after a new member is added, so there is no manual per-person
 * page setup and the roster grid's "View profile" links always resolve.
 *
 * @package skifftech
 */

/**
 * Return the team departments array, included once and cached for the request.
 *
 * @return array
 */
function skifftech_get_team_departments() {
	static $departments = null;

	if ( null === $departments ) {
		require get_theme_file_path( 'template-parts/team/team-data.php' );
		$departments = $skifftech_departments;
	}

	return $departments;
}

/**
 * Find a team member by slug, with their department title merged in.
 *
 * @param string $slug Member slug (e.g. 'rayhan').
 * @return array|null
 */
function skifftech_find_team_member( $slug ) {
	foreach ( skifftech_get_team_departments() as $dept ) {
		foreach ( $dept['members'] as $member ) {
			if ( $member['slug'] === $slug ) {
				$member['department'] = $dept['title'];
				return $member;
			}
		}
	}

	return null;
}

/**
 * The page currently assigned the "Team" template (template-pages/team.php),
 * whatever its slug happens to be — resolved dynamically rather than assumed,
 * since it can be renamed/re-slugged in wp-admin.
 *
 * @return WP_Post|null
 */
function skifftech_get_team_page() {
	static $team_page = false; // false = not looked up yet; null = looked up, none found.

	if ( false === $team_page ) {
		$pages     = get_posts(
			array(
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'meta_key'       => '_wp_page_template', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
				'meta_value'     => 'template-pages/team.php', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value
				'numberposts'    => 1,
			)
		);
		$team_page = $pages ? $pages[0] : null;
	}

	return $team_page;
}

/**
 * A member's existing profile page (child of the Team page with a matching
 * slug), if it has been provisioned.
 *
 * @param string $slug Member slug.
 * @return WP_Post|null
 */
function skifftech_get_team_member_page( $slug ) {
	$team_page = skifftech_get_team_page();

	if ( ! $team_page ) {
		return null;
	}

	$children = get_posts(
		array(
			'post_type'   => 'page',
			'post_status' => 'any',
			'post_parent' => $team_page->ID,
			'name'        => $slug,
			'numberposts' => 1,
		)
	);

	return $children ? $children[0] : null;
}

/**
 * Permalink for a member's profile page, if it has been provisioned.
 *
 * @param string $slug Member slug.
 * @return string Empty string if the page doesn't exist yet.
 */
function skifftech_team_member_profile_url( $slug ) {
	$page = skifftech_get_team_member_page( $slug );

	return $page ? get_permalink( $page ) : '';
}

/**
 * Auto-provision a profile page for every team member that has 'modal' data
 * and doesn't already have one. Idempotent — only inserts what's missing, so
 * it's cheap to run on every admin screen load and self-heals if a page is
 * deleted or a new member is added to the data array later.
 */
function skifftech_provision_team_profile_pages() {
	$team_page = skifftech_get_team_page();

	if ( ! $team_page ) {
		return;
	}

	foreach ( skifftech_get_team_departments() as $dept ) {
		foreach ( $dept['members'] as $member ) {
			if ( empty( $member['modal'] ) ) {
				continue;
			}

			if ( skifftech_get_team_member_page( $member['slug'] ) ) {
				continue;
			}

			$page_id = wp_insert_post(
				array(
					'post_type'   => 'page',
					'post_status' => 'publish',
					'post_parent' => $team_page->ID,
					'post_name'   => $member['slug'],
					'post_title'  => $member['name'],
				),
				true
			);

			if ( ! is_wp_error( $page_id ) ) {
				update_post_meta( $page_id, '_wp_page_template', 'template-pages/team-profile.php' );
			}
		}
	}
}
add_action( 'admin_init', 'skifftech_provision_team_profile_pages' );
