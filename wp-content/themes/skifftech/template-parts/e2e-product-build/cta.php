<?php
/**
 * End-to-End Product Build — Final CTA.
 *
 * @package skifftech
 */

$skt_e2e_contact_url = home_url( '/contact/' );
?>
<section class="sa-section sa-final" id="contact">
  <div class="sa-wrap">
    <div class="sa-final-inner reveal">
      <div class="glow" aria-hidden="true"></div>
      <h2>Have a product in your head? <span class="gold-txt">Let&rsquo;s get it shipped.</span></h2>
      <p class="sa-lead">Book a discovery call &mdash; we&rsquo;ll map your idea into a delivery plan with milestones, timeline, and budget.</p>

      <div class="sa-final-cta">
        <a href="<?php echo esc_url( $skt_e2e_contact_url ); ?>" class="btn btn-primary">Get a Delivery Plan <span class="arrow">&rarr;</span></a>
        <a href="<?php echo esc_url( $skt_e2e_contact_url ); ?>" class="btn btn-ghost">Book a Discovery Call</a>
      </div>
    </div>
  </div>
</section>
