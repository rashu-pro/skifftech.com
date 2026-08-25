<?php
/**
 * Dedicated Development Team — Hero.
 *
 * @package skifftech
 */

?>
<section class="sa-section sa-hero">
  <div class="sa-wrap">
    <div class="sa-hero-grid">
      <div class="reveal">
        <nav class="sa-crumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( home_url( '/#models' ) ); ?>">Ways to Work With Us</a><span class="sep">/</span><span class="cur">Dedicated Development Team</span>
        </nav>

        <h1>Your Development Team, <span class="gold-txt">Without the Hiring Headache.</span></h1>
        <p class="sa-lead">You bring the roadmap; we bring the whole team behind it. Engineers, a project manager, and QA &mdash; hand-picked for your product, working only on your product, with delivery managed for you. You set the direction; we make it ship.</p>

        <div class="sa-hero-cta">
          <a href="#contact" class="btn btn-primary">Get a Team Blueprint <span class="arrow">&rarr;</span></a>
          <a href="#how" class="btn btn-ghost">See How It Works</a>
        </div>
      </div>

      <div class="sa-hero-visual reveal">
        <?php // Signature motif: you -> PM -> full team (inline SVG, no image asset). ?>
        <svg class="sa-graph" viewBox="0 0 440 380" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <g stroke="var(--sa-gold-line)" stroke-width="1">
            <line x1="220" y1="190" x2="85" y2="125" />
            <line x1="220" y1="190" x2="355" y2="125" />
            <line x1="220" y1="190" x2="72" y2="265" />
            <line x1="220" y1="190" x2="368" y2="265" />
            <line x1="220" y1="190" x2="158" y2="325" />
            <line x1="220" y1="190" x2="282" y2="325" />
            <line x1="85" y1="125" x2="355" y2="125" stroke-opacity=".35" />
            <line x1="158" y1="325" x2="282" y2="325" stroke-opacity=".35" />
          </g>
          <line x1="220" y1="68" x2="220" y2="160" stroke="var(--sa-gold)" stroke-width="1.5" stroke-dasharray="3 5" />
          <g class="sa-node" fill="var(--sa-card)" stroke="var(--sa-gold-line)" stroke-width="1.2">
            <circle cx="85" cy="125" r="10" />
            <circle cx="355" cy="125" r="10" />
            <circle cx="72" cy="265" r="10" />
            <circle cx="368" cy="265" r="10" />
            <circle cx="158" cy="325" r="10" />
            <circle cx="282" cy="325" r="10" />
          </g>
          <g font-family="'JetBrains Mono',monospace" font-size="10" fill="var(--sa-dim)" text-anchor="middle" letter-spacing=".08em">
            <text x="85" y="105">DEV</text>
            <text x="355" y="105">DEV</text>
            <text x="52" y="248">QA</text>
            <text x="392" y="248">UX</text>
            <text x="158" y="349">DEVOPS</text>
            <text x="282" y="349">DEV</text>
            <text x="220" y="40" fill="var(--sa-gold-2)">YOU</text>
          </g>
          <circle cx="220" cy="52" r="14" fill="var(--sa-gold-dim)" stroke="var(--sa-gold)" stroke-width="1.5" />
          <circle cx="220" cy="190" r="30" fill="var(--sa-gold-dim)" stroke="var(--sa-gold)" stroke-width="1.5" />
          <text x="220" y="195" font-family="'JetBrains Mono',monospace" font-size="11" fill="var(--sa-gold-2)" text-anchor="middle" letter-spacing=".08em">PM</text>
        </svg>
      </div>
    </div>

    <?php // Proof strip. ?>
    <div class="sa-proof reveal">
      <div class="sa-metric"><div class="num"><b>1&ndash;2</b> wks</div><div class="lbl">Team assembly</div></div>
      <div class="sa-metric"><div class="num"><b>8</b>+ yrs</div><div class="lbl">Avg. seniority</div></div>
      <div class="sa-metric"><div class="num"><b>1</b></div><div class="lbl">Point of contact</div></div>
      <div class="sa-metric"><div class="num"><b>95</b>%</div><div class="lbl">Team retention</div></div>
    </div>
  </div>
</section>
