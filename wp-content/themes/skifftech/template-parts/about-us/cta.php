<?php
/**
 * About Us — Final CTA.
 *
 * @package skifftech
 */

$skt_ab_contact_url = home_url( '/contact/' );
?>
<section class="sa-section sa-final" id="contact" style="padding-top:0">
  <div class="sa-wrap">
    <div class="sa-final-inner reveal">
      <div class="glow" aria-hidden="true"></div>
      <h2>Tell us what <span class="gold-txt">you&rsquo;re building.</span></h2>
      <p class="sa-lead">Wherever you are in the world &mdash; a 30-minute conversation is all it takes to see if we&rsquo;re the right team for it.</p>

      <div class="sa-final-cta">
        <a href="<?php echo esc_url( $skt_ab_contact_url ); ?>" class="btn btn-primary">Schedule a Meeting <span class="arrow">&rarr;</span></a>
        <a href="<?php echo esc_url( home_url( '/#models' ) ); ?>" class="btn btn-ghost">Ways to Work With Us</a>
      </div>
    </div>
  </div>
</section>
