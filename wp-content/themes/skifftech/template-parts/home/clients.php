<?php
/**
 * Client logo marquee — the base set below is duplicated at runtime by
 * js/home.js (until the track comfortably fills the viewport twice over,
 * then once more for the seamless translateX(-50%) loop), so only the
 * real logos need to be listed here once.
 */
$skifftech_client_logos_dir = get_template_directory_uri() . '/images/clients/' . rawurlencode( 'White logos' ) . '/';
?>
<section class="clients on-dark" id="clients" aria-label="Our clients">
  <div class="wrap">
    <div class="clients-lbl reveal">Trusted by clients around the globe</div>

    <div class="marquee reveal">
    <div class="marquee-track" id="clientTrack">
      <a class="client-logo" href="#">
        <img src="<?php echo esc_url( $skifftech_client_logos_dir . 'tech-know-world.png' ); ?>" alt="Tech Know World">
      </a>
      <a class="client-logo" href="#">
        <img src="<?php echo esc_url( $skifftech_client_logos_dir . 'dominion-dms.png' ); ?>" alt="Dominion DMS">
      </a>
      <a class="client-logo" href="#">
        <img src="<?php echo esc_url( $skifftech_client_logos_dir . 'lgcl-itt.png' ); ?>" alt="LGCL ITT">
      </a>
      <a class="client-logo" href="#">
        <img src="<?php echo esc_url( $skifftech_client_logos_dir . 'ausx-design.png' ); ?>" alt="AUSXDesign">
      </a>
      <a class="client-logo" href="#">
        <img src="<?php echo esc_url( $skifftech_client_logos_dir . 'hhc.png' ); ?>" alt="HHC">
      </a>
    </div>
  </div>
  </div>
</section>
