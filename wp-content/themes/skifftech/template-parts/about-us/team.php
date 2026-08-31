<?php
/**
 * About Us — Team teaser (avatar stack pulled from the live team roster).
 *
 * @package skifftech
 */

$skt_team_img_uri = get_template_directory_uri() . '/images/team/';
$skt_all_members  = array();

if ( function_exists( 'skifftech_get_leadership_members' ) && function_exists( 'skifftech_get_team_departments' ) ) {
	$skt_all_members = skifftech_get_leadership_members();
	foreach ( skifftech_get_team_departments() as $skt_dept ) {
		$skt_all_members = array_merge( $skt_all_members, $skt_dept['members'] );
	}
}

$skt_avatars    = array_slice( array_filter( $skt_all_members, function( $m ) { return ! empty( $m['image'] ); } ), 0, 5 );
$skt_team_total = count( $skt_all_members );
$skt_team_url   = function_exists( 'skifftech_get_team_page' ) && skifftech_get_team_page()
	? get_permalink( skifftech_get_team_page() )
	: home_url( '/team-members/' );
?>
<section class="sa-section">
  <div class="sa-wrap">
    <div class="sa-team reveal">
      <div class="avs">
        <?php foreach ( $skt_avatars as $skt_m ) : ?>
          <img src="<?php echo esc_url( $skt_team_img_uri . $skt_m['image'] ); ?>" alt="<?php echo esc_attr( $skt_m['name'] ); ?>" loading="lazy">
        <?php endforeach; ?>
        <?php if ( $skt_team_total > count( $skt_avatars ) ) : ?>
          <span class="plus">+<?php echo (int) ( $skt_team_total - count( $skt_avatars ) ); ?></span>
        <?php endif; ?>
      </div>
      <div class="txtc">
        <h3>The people you&rsquo;ll actually work with.</h3>
        <p>Engineers, analysts, and QA specialists with 116+ years of combined experience &mdash; real profiles, real faces, no bait-and-switch.</p>
      </div>
      <a href="<?php echo esc_url( $skt_team_url ); ?>" class="btn btn-ghost">Meet the Team <span class="arrow">&rarr;</span></a>
    </div>
  </div>
</section>
