<?php
/**
 * About Us — Founder's letter.
 *
 * @package skifftech
 */

$skt_cto_photo = get_template_directory_uri() . '/images/team/mohammad-istiaque-shawn.jpeg';
$skt_cto_url    = function_exists( 'skifftech_team_member_profile_url' ) ? skifftech_team_member_profile_url( 'shawn' ) : '';
?>
<section class="sa-section">
  <div class="sa-wrap">
    <div class="sa-head reveal">
      <span class="eyebrow">A note from our CTO</span>
      <h2 class="sa-h2">Why Skiff exists.</h2>
    </div>

    <div class="sa-letter reveal">
      <div class="ph">
        <img src="<?php echo esc_url( $skt_cto_photo ); ?>" alt="Mohammad Istiaque Shawn">
      </div>
      <div class="bd">
        <div class="salut">To everyone who builds with us &mdash;</div>
        <p>I started my career the way most engineers do: writing code for other people&rsquo;s decisions. What I saw, again and again, was good software failing for reasons that had nothing to do with code &mdash; unclear requirements, teams that changed every quarter, and vendors who optimized for invoices instead of outcomes.</p>
        <p>Skiff is our answer to that. We help startups and businesses design, build, and scale software systems that are <b>reliable, cost-efficient, and built for growth</b> &mdash; and we do it as a team that stays: same engineers, same accountability, from the first architecture discussion to years after launch.</p>
        <div class="pull">&ldquo;I don&rsquo;t just develop software &mdash; I design systems that support long-term business success.&rdquo;</div>
        <p>That sentence has guided every hire we&rsquo;ve made and every engagement we&rsquo;ve taken. If you bring us your product, you&rsquo;ll get people who treat it like their own &mdash; because around here, that&rsquo;s the only way we know how to work.</p>
        <div class="sa-sign">
          <?php if ( $skt_cto_url ) : ?>
            <div class="nm"><a href="<?php echo esc_url( $skt_cto_url ); ?>"><?php echo esc_html( 'Mohammad Istiaque Shawn' ); ?></a></div>
          <?php else : ?>
            <div class="nm">Mohammad Istiaque Shawn</div>
          <?php endif; ?>
          <div class="rl">CTO &amp; Solutions Architect &middot; Skiff Technologies</div>
        </div>
      </div>
    </div>
  </div>
</section>
