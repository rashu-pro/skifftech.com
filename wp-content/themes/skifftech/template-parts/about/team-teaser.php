<?php
$ab_team_img_uri = get_template_directory_uri() . '/images/team/';
$ab_teaser_faces  = array(
	array( 'rayhan-ahmed-sajib.jpg', 'Rayhan Ahmed Sajib, Data Analyst Manager at Skiff Technologies' ),
	array( 'asif-islam.jpg', 'Asif Islam, Lead Data Analyst at Skiff Technologies' ),
	array( 'shirin-akter.jpg', 'Shirin Akter, Lead Software QA Engineer at Skiff Technologies' ),
	array( 'doly-akter.jpg', 'Doly Akter, SQL Data Analyst at Skiff Technologies' ),
	array( 'ashraful-alam-akand.jpg', 'Ashraful Alam Akand, Sr. Data Engineer at Skiff Technologies' ),
);
?>
<section class="ab-section">
  <div class="ab-wrap">
    <div class="ab-team reveal">
      <div class="avs">
        <?php foreach ( $ab_teaser_faces as $face ) : ?>
          <img src="<?php echo esc_url( $ab_team_img_uri . $face[0] ); ?>" alt="<?php echo esc_attr( $face[1] ); ?>">
        <?php endforeach; ?>
        <span class="plus">25+</span>
      </div>
      <div class="txtc">
        <h3>The people you&rsquo;ll actually work with.</h3>
        <p>Engineers, analysts, and QA specialists with 116+ years of combined experience &mdash; real profiles, real faces, no bait-and-switch.</p>
      </div>
      <a href="<?php echo esc_url( home_url( '/team-members/' ) ); ?>" class="btn btn-ghost">Meet the Team <span class="arrow">&rarr;</span></a>
    </div>
  </div>
</section>
