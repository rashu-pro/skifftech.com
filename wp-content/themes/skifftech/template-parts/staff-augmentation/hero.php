<?php
/**
 * Staff Augmentation — Hero.
 *
 * @package skifftech
 */

?>
<section class="sa-section sa-hero">
  <div class="sa-wrap">
    <div class="sa-hero-grid">
      <div class="reveal">
        <nav class="sa-crumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( home_url( '/#services' ) ); ?>">Services</a><span class="sep">/</span><span class="cur">Staff Augmentation</span>
        </nav>

        <span class="eyebrow">Staff Augmentation</span>
        <h1>Unlock Your Team&rsquo;s Full Potential with <span class="gold-txt">Dedicated Engineers.</span></h1>
        <p class="sa-lead">We place vetted senior engineers directly inside your existing team &mdash; your stack, your tools, your process. You stay in charge of the roadmap; we take care of sourcing, vetting, contracts, and retention. Most roles get a shortlist within 48 hours.</p>

        <div class="sa-hero-cta">
          <a href="#contact" class="btn btn-primary">Book a Call <span class="arrow">&rarr;</span></a>
          <a href="#how" class="btn btn-ghost">See How It Works</a>
        </div>
      </div>

      <div class="sa-hero-visual reveal">
        <?php // Signature motif: engineers connected around your team's core (inline SVG, no image asset). ?>
        <svg class="sa-graph" viewBox="0 0 440 380" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <g stroke="var(--sa-gold-line)" stroke-width="1">
            <line x1="220" y1="190" x2="90" y2="80" />
            <line x1="220" y1="190" x2="360" y2="95" />
            <line x1="220" y1="190" x2="70" y2="250" />
            <line x1="220" y1="190" x2="370" y2="270" />
            <line x1="220" y1="190" x2="200" y2="330" />
            <line x1="90" y1="80" x2="360" y2="95" stroke-opacity=".4" />
            <line x1="70" y1="250" x2="200" y2="330" stroke-opacity=".4" />
          </g>
          <g class="sa-node" fill="var(--sa-card)" stroke="var(--sa-gold-line)" stroke-width="1.2">
            <circle cx="90" cy="80" r="10" />
            <circle cx="360" cy="95" r="10" />
            <circle cx="70" cy="250" r="10" />
            <circle cx="370" cy="270" r="10" />
            <circle cx="200" cy="330" r="10" />
          </g>
          <circle cx="220" cy="190" r="30" fill="var(--sa-gold-dim)" stroke="var(--sa-gold)" stroke-width="1.5" />
          <circle cx="220" cy="190" r="6" fill="var(--sa-gold-2)" />
        </svg>
      </div>
    </div>

    <?php // Proof strip. ?>
    <div class="sa-proof reveal">
      <div class="sa-metric"><div class="num"><b>500</b>+</div><div class="lbl">Vetted engineers</div></div>
      <div class="sa-metric"><div class="num"><b>48</b>h</div><div class="lbl">Avg. shortlist</div></div>
      <div class="sa-metric"><div class="num"><b>95</b>%</div><div class="lbl">Retention rate</div></div>
      <div class="sa-metric"><div class="num">Top <b>3</b>%</div><div class="lbl">Acceptance rate</div></div>
    </div>
  </div>
</section>
