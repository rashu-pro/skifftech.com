<?php
/**
 * About Us — Team teaser.
 *
 * Avatars reuse the existing roster photos in images/team/.
 *
 * @package skifftech
 */

$skt_ab_avatars = array(
	'rayhan-ahmed-sajib.jpg'  => 'Rayhan Ahmed Sajib',
	'asif-islam.jpg'          => 'Asif Islam',
	'shirin-akter.jpg'        => 'Shirin Akter',
	'doly-akter.jpg'          => 'Doly Akter',
	'sharif-faisal-ahmed.jpg' => 'Sharif Faisal Ahmed',
);

$skt_ab_images_uri = get_template_directory_uri() . '/images/team/';
?>
<section class="ab-section">
  <div class="ab-wrap">
    <div class="ab-team reveal">
      <div class="avs">
		<?php foreach ( $skt_ab_avatars as $skt_ab_file => $skt_ab_name ) : ?>
        <img src="<?php echo esc_url( $skt_ab_images_uri . $skt_ab_file ); ?>"
             alt="<?php echo esc_attr( $skt_ab_name ); ?>"
             width="58" height="58" loading="lazy" decoding="async">
		<?php endforeach; ?>
        <span class="plus">25+</span>
      </div>

      <div class="txtc">
        <h3>The people you&rsquo;ll actually work with.</h3>
        <p>Engineers, analysts, and QA specialists with 116+ years of combined experience &mdash; real profiles, real faces, no bait-and-switch.</p>
      </div>

      <a href="<?php echo esc_url( skifftech_page_url_by_template( 'template-pages/team.php', 'team' ) ); ?>" class="btn btn-ghost">Meet the Team <span class="arrow">&rarr;</span></a>
    </div>
  </div>
</section>
