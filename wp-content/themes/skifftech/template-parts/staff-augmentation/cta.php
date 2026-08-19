<?php
/**
 * Staff Augmentation — Final CTA.
 *
 * @package skifftech
 */

$skt_sa_contact_url = home_url( '/contact/' );
?>
<section class="sa-section sa-final" id="contact">
  <div class="sa-wrap">
    <div class="sa-final-inner reveal">
      <div class="glow" aria-hidden="true"></div>
      <h2>Ready to <span class="gold-txt">extend your team?</span></h2>
      <p class="sa-lead">Send us the role. We&rsquo;ll come back with a shortlist within 48 hours.</p>

      <div class="sa-final-cta">
        <a href="<?php echo esc_url( $skt_sa_contact_url ); ?>" class="btn btn-primary">Book a Call <span class="arrow">&rarr;</span></a>
        <a href="<?php echo esc_url( $skt_sa_contact_url ); ?>" class="btn btn-ghost">Send Your Requirements</a>
      </div>
    </div>
  </div>
</section>
