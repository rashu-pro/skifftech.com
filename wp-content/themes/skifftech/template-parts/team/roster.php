<?php
/**
 * Team roster — departments and member cards.
 * Member data lives in template-parts/team/team-data.php so the cards here
 * and the individual profile pages (template-pages/team-profile.php) stay
 * in sync without duplicating content.
 */

$team_img_uri = get_template_directory_uri() . '/images/team/';

require get_theme_file_path( 'template-parts/team/team-data.php' );
?>

<section class="tm-section" id="team">
  <div class="tm-wrap">

    <div class="tm-head reveal">
      <span class="eyebrow">The team</span>
      <h2 class="tm-h2">The people you&rsquo;ll actually work with.</h2>
      <p class="tm-lead">No bait-and-switch &mdash; the profiles below are the engineers, analysts, and QA specialists who staff our engagements. Open any profile for full experience and skills.</p>
    </div>

    <?php foreach ( $skifftech_departments as $dept ) : ?>
      <div class="tm-dept">
        <div class="tm-dept-head reveal">
          <h3><?php echo $dept['title']; // phpcs:ignore -- static, escaped HTML entities ?></h3>
        </div>
        <div class="tm-grid">
          <?php foreach ( $dept['members'] as $m ) : ?>
            <div class="tm-card reveal">
              <div class="ph<?php echo empty( $m['image'] ) ? ' noimg' : ''; ?>">
                <?php if ( ! empty( $m['exp'] ) ) : ?>
                  <span class="exp"><?php echo esc_html( $m['exp'] ); ?></span>
                <?php endif; ?>
                <?php if ( ! empty( $m['image'] ) ) : ?>
                  <img src="<?php echo esc_url( $team_img_uri . $m['image'] ); ?>" alt="<?php echo esc_attr( $m['name'] ); ?>" loading="lazy">
                <?php else : ?>
                  <span class="init"><?php echo esc_html( $m['initials'] ); ?></span>
                <?php endif; ?>
              </div>
              <div class="bd">
                <h4><?php echo esc_html( $m['name'] ); ?></h4>
                <div class="role"><?php echo esc_html( $m['role'] ); ?></div>
                <?php if ( ! empty( $m['modal'] ) ) : ?>
                  <?php $profile_url = skifftech_team_member_profile_url( $m['slug'] ); ?>
                  <?php if ( $profile_url ) : ?>
                    <a class="more" href="<?php echo esc_url( $profile_url ); ?>">
                      View profile <span class="ar">&rarr;</span>
                    </a>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>
