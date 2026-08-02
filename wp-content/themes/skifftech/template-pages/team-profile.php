<?php
/**
 * Template Name: Team Profile
 *
 * Individual team member profile page — replaces the old in-page modal on
 * the Team page. Auto-provisioned as a child page of "Team" for every member
 * with 'modal' data (see inc/team-profile.php); the current page's slug is
 * matched against template-parts/team/team-data.php to find its content.
 *
 * @package skifftech
 */

$skifftech_member = skifftech_find_team_member( get_post()->post_name );

if ( ! $skifftech_member ) {
	wp_safe_redirect( home_url( '/team/' ) );
	exit;
}

$m           = $skifftech_member;
$mo          = $m['modal'];
$team_img_uri = get_template_directory_uri() . '/images/team/';

get_header();
?>

<main id="pg-team-profile">

<!-- ============ HERO ============ -->
<section class="pf-section pf-hero">
  <div class="pf-wrap">
    <?php $skifftech_team_page = skifftech_get_team_page(); ?>
    <nav class="pf-crumb reveal" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span>
      <?php if ( $skifftech_team_page ) : ?>
        <a href="<?php echo esc_url( get_permalink( $skifftech_team_page ) ); ?>">Our Team</a><span class="sep">/</span>
      <?php endif; ?>
      <span class="cur"><?php echo esc_html( $m['name'] ); ?></span>
    </nav>

    <div class="pf-hero-inner reveal">
      <div class="pf-photo<?php echo empty( $m['image'] ) ? ' noimg' : ''; ?>">
        <?php if ( ! empty( $m['image'] ) ) : ?>
          <img src="<?php echo esc_url( $team_img_uri . $m['image'] ); ?>" alt="<?php echo esc_attr( $m['name'] ); ?>">
        <?php else : ?>
          <span class="init"><?php echo esc_html( $m['initials'] ); ?></span>
        <?php endif; ?>
      </div>
      <div class="pf-hero-body">
        <div class="role"><?php echo esc_html( $m['role'] ); ?></div>
        <h1><?php echo esc_html( $m['name'] ); ?></h1>
        <div class="pf-badges">
          <?php if ( ! empty( $mo['exp2'] ) ) : ?>
            <span class="pf-badge"><?php echo esc_html( $mo['exp2'] ); ?></span>
          <?php endif; ?>
          <?php if ( ! empty( $m['department'] ) ) : ?>
            <span class="pf-badge"><?php echo $m['department']; // phpcs:ignore -- static, escaped HTML entities ?></span>
          <?php endif; ?>
          <?php foreach ( (array) ( $mo['badges'] ?? array() ) as $badge ) : ?>
            <span class="pf-badge"><?php echo esc_html( $badge ); ?></span>
          <?php endforeach; ?>
        </div>
        <div class="pf-hero-cta">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Work With Our Team <span class="arrow">&rarr;</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if ( ! empty( $mo['bio'] ) ) : ?>
<!-- ============ ABOUT ============ -->
<section class="pf-section">
  <div class="pf-wrap">
    <div class="pf-eyebrow reveal">About</div>
    <div class="pf-about reveal pf-about-wrap" id="pfAboutWrap">
      <?php foreach ( $mo['bio'] as $para ) : ?>
        <p><?php echo $para; // phpcs:ignore -- static, escaped HTML entities ?></p>
      <?php endforeach; ?>
    </div>
    <button class="pf-about-more" id="pfAboutMore"><span class="lbl">Read full bio</span> <span class="ar">&#9662;</span></button>
  </div>
</section>
<?php endif; ?>

<?php if ( ! empty( $mo['vision'] ) ) : ?>
<!-- ============ VISION ============ -->
<section class="pf-section">
  <div class="pf-wrap">
    <div class="pf-eyebrow reveal">Professional vision</div>
    <div class="pf-vision reveal"><?php echo $mo['vision']; // phpcs:ignore -- static, escaped HTML entities ?></div>
  </div>
</section>
<?php endif; ?>

<?php if ( ! empty( $mo['skills'] ) ) : ?>
<!-- ============ SKILLS ============ -->
<section class="pf-section">
  <div class="pf-wrap">
    <div class="pf-eyebrow reveal">Top core proficiencies</div>
    <div class="pf-skills reveal">
      <?php foreach ( $mo['skills'] as $skill ) : ?>
        <span class="pf-skill"><?php echo $skill; // phpcs:ignore -- static, escaped HTML entities ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ( ! empty( $mo['jobs'] ) ) : ?>
<!-- ============ EXPERIENCE (current Skiff role only, featured) ============ -->
<?php $skifftech_current_job = $mo['jobs'][0]; ?>
<section class="pf-section">
  <div class="pf-wrap">
    <div class="pf-eyebrow reveal">Experience</div>
    <div class="pf-job reveal">
      <div class="yr"><?php echo esc_html( $skifftech_current_job[0] ); ?></div>
      <h3><?php echo $skifftech_current_job[1]; // phpcs:ignore -- static, escaped HTML entities ?></h3>
      <p><?php echo esc_html( $skifftech_current_job[2] ); ?></p>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if ( ! empty( $mo['education'] ) || ! empty( $mo['languages'] ) ) : ?>
<!-- ============ EDUCATION ============ -->
<section class="pf-section">
  <div class="pf-wrap">
    <?php if ( ! empty( $mo['education'] ) ) : ?>
      <div class="pf-eyebrow reveal">Academic qualifications</div>
      <div class="pf-edu reveal">
        <?php foreach ( $mo['education'] as $ed ) : ?>
          <div class="pf-ed">
            <div class="dg"><?php echo esc_html( $ed[0] ); ?></div>
            <div class="in"><?php echo $ed[1]; // phpcs:ignore -- static, escaped HTML entities ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if ( ! empty( $mo['languages'] ) ) : ?>
      <div class="pf-eyebrow reveal" style="margin-top:44px">Language &amp; tool proficiencies</div>
      <div class="pf-langs reveal">
        <?php foreach ( $mo['languages'] as $lang ) : ?>
          <span class="pf-lang"><?php echo esc_html( $lang[0] ); ?></span>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if ( ! empty( $mo['certifications'] ) ) : ?>
<!-- ============ CERTIFICATIONS ============ -->
<section class="pf-section" id="certifications">
  <div class="pf-wrap">
    <div class="pf-eyebrow reveal">Certifications</div>
    <div class="pf-cert-car reveal">
      <div class="pf-cert-track" id="pfCertTrack">
        <?php foreach ( $mo['certifications'] as $i => $cert ) : ?>
          <?php $has_img = ! empty( $cert['image'] ); ?>
          <div class="pf-cert" <?php echo $has_img ? 'data-cert="c' . (int) $i . '" role="button" tabindex="0"' : ''; ?>>
            <div class="th<?php echo $has_img ? '' : ' noimg'; ?>">
              <?php if ( $has_img ) : ?>
                <span class="zoom"><svg viewBox="0 0 24 24"><path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7-11-7-11-7z"/><circle cx="12" cy="12" r="3"/></svg></span>
                <img src="<?php echo esc_url( $cert['image'] ); ?>" alt="<?php echo esc_attr( $cert['title'] ); ?>" loading="lazy">
              <?php else : ?>
                <span class="badge-ic"><svg viewBox="0 0 24 24"><path d="M12 2l2.9 6 6.6.7-4.9 4.5 1.3 6.5L12 16.3 6.1 19.7l1.3-6.5-4.9-4.5 6.6-.7z"/></svg></span>
              <?php endif; ?>
            </div>
            <div class="bd">
              <div class="src"><?php echo $cert['source']; // phpcs:ignore -- static, escaped HTML entities ?></div>
              <h4><?php echo $cert['title']; // phpcs:ignore -- static, escaped HTML entities ?></h4>
              <?php if ( ! empty( $cert['date'] ) ) : ?>
                <div class="dt"><?php echo esc_html( $cert['date'] ); ?></div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="pf-cert-nav">
        <div class="pf-cert-arrows">
          <button class="pf-cnav" id="pfCertPrev" aria-label="Previous"><svg viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg></button>
          <button class="pf-cnav" id="pfCertNext" aria-label="Next"><svg viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg></button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ CERT LIGHTBOXES ============ -->
<?php foreach ( $mo['certifications'] as $i => $cert ) : ?>
  <?php if ( empty( $cert['image'] ) ) continue; ?>
  <div class="pf-lightbox" id="lb-c<?php echo (int) $i; ?>">
    <div class="pf-lb-inner">
      <button class="pf-lb-close" aria-label="Close">&times;</button>
      <img src="<?php echo esc_url( $cert['image'] ); ?>" alt="<?php echo esc_attr( $cert['title'] ); ?>">
      <div class="pf-lb-cap"><?php echo $cert['source'] . ' — ' . $cert['title']; // phpcs:ignore -- static, escaped HTML entities ?><?php echo ! empty( $cert['date'] ) ? ' · ' . esc_html( $cert['date'] ) : ''; ?></div>
    </div>
  </div>
<?php endforeach; ?>
<?php endif; ?>

<?php if ( ! empty( $mo['recommendations'] ) ) : ?>
<!-- ============ RECOMMENDATIONS ============ -->
<section class="pf-section">
  <div class="pf-wrap">
    <div class="pf-eyebrow reveal">Recommendations</div>
    <h2 class="pf-h2 reveal">What colleagues and clients say.</h2>
    <div class="pf-rec-list reveal">
      <?php foreach ( $mo['recommendations'] as $i => $rec ) : ?>
        <div class="pf-rec-item reveal<?php echo $i >= 3 ? ' pf-rec-hidden' : ''; ?>">
          <div class="pf-rec-head">
            <div class="nm"><?php echo esc_html( $rec['name'] ); ?></div>
            <div class="ti"><?php echo esc_html( $rec['title'] ); ?></div>
          </div>
          <div class="rel"><?php echo esc_html( $rec['relationship'] ); ?></div>
          <div class="pf-rec-quote" id="rec-q-<?php echo (int) $i; ?>"><?php echo $rec['quote']; // phpcs:ignore -- static, escaped HTML entities ?></div>
          <button class="pf-rec-more" data-rec="rec-q-<?php echo (int) $i; ?>">Read more</button>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if ( count( $mo['recommendations'] ) > 3 ) : ?>
      <div class="pf-more-note reveal" style="margin-top:8px">
        <button class="btn btn-ghost" id="pfShowAllRecs">View all <?php echo (int) count( $mo['recommendations'] ); ?> recommendations <span class="arrow">&rarr;</span></button>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<!-- ============ CONTACT / CTA ============ -->
<section class="pf-section" id="contact">
  <div class="pf-wrap">
    <div class="pf-final-inner reveal">
      <div class="glow"></div>
      <h2>Put this team on <span class="gold-txt">your next project.</span></h2>
      <p>Whether you need one specialist or a full dedicated team — start a conversation and we'll match the right people to your work.</p>
      <div class="pf-final-cta">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Start a Project <span class="arrow">&rarr;</span></a>
        <a href="<?php echo esc_url( home_url( '/#models' ) ); ?>" class="btn btn-ghost">Ways to Work With Us</a>
      </div>
    </div>
  </div>
</section>

</main><!-- #pg-team-profile -->

<?php get_footer(); ?>
