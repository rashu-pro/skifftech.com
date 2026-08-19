<?php
/**
 * End-to-End Product Build — Hero.
 *
 * @package skifftech
 */

?>
<section class="sa-section sa-hero">
  <div class="sa-wrap">
    <div class="sa-hero-grid">
      <div class="reveal">
        <nav class="sa-crumb" aria-label="Breadcrumb">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span class="sep">/</span><a href="<?php echo esc_url( home_url( '/#models' ) ); ?>">Ways to Work With Us</a><span class="sep">/</span><span class="cur">End-to-End Product Build</span>
        </nav>

        <h1>Bring the Vision. <span class="gold-txt">We&rsquo;ll Own Everything Else.</span></h1>
        <p class="sa-lead">Skiff Technologies offers a complete end-to-end software development process to take a new product from idea to launch. From concept to exceptional product &mdash; our end-to-end development solutions handle discovery, design, engineering, QA, and launch as one accountable partner, then stick around for what comes after.</p>

        <div class="sa-hero-cta">
          <a href="#contact" class="btn btn-primary">Get a Delivery Plan <span class="arrow">&rarr;</span></a>
          <a href="#how" class="btn btn-ghost">See the Process</a>
        </div>
      </div>

      <div class="sa-hero-visual reveal">
        <?php // Signature motif: idea -> discovery -> design -> build -> launch -> beyond (inline SVG, no image asset). ?>
        <svg class="sa-graph" viewBox="0 0 440 380" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <g stroke="var(--sa-gold-line)" stroke-width="1">
            <line x1="55" y1="310" x2="135" y2="235" />
            <line x1="135" y1="235" x2="215" y2="270" />
            <line x1="215" y1="270" x2="295" y2="175" />
            <line x1="295" y1="175" x2="355" y2="90" />
          </g>
          <line x1="376" y1="66" x2="412" y2="38" stroke="var(--sa-gold)" stroke-width="1.5" stroke-dasharray="3 5" />
          <g class="sa-node" fill="var(--sa-card)" stroke="var(--sa-gold-line)" stroke-width="1.2">
            <circle cx="55" cy="310" r="10" />
            <circle cx="135" cy="235" r="10" />
            <circle cx="215" cy="270" r="10" />
            <circle cx="295" cy="175" r="10" />
            <circle cx="412" cy="38" r="8" />
          </g>
          <g font-family="'JetBrains Mono',monospace" font-size="10" fill="var(--sa-dim)" text-anchor="middle" letter-spacing=".08em">
            <text x="55" y="338">IDEA</text>
            <text x="135" y="215">DISCOVERY</text>
            <text x="215" y="298">DESIGN</text>
            <text x="295" y="155">BUILD</text>
            <text x="412" y="20">BEYOND</text>
            <text x="355" y="140" fill="var(--sa-gold-2)">LAUNCH</text>
          </g>
          <circle cx="355" cy="90" r="30" fill="var(--sa-gold-dim)" stroke="var(--sa-gold)" stroke-width="1.5" />
          <circle cx="355" cy="90" r="6" fill="var(--sa-gold-2)" />
        </svg>
      </div>
    </div>

    <?php // Proof strip. ?>
    <div class="sa-proof reveal">
      <div class="sa-metric"><div class="num"><b>1</b></div><div class="lbl">Accountable partner</div></div>
      <div class="sa-metric"><div class="num"><b>4&ndash;6</b> mo</div><div class="lbl">Typical idea to launch</div></div>
      <div class="sa-metric"><div class="num"><b>Weekly</b></div><div class="lbl">Working demos</div></div>
      <div class="sa-metric"><div class="num"><b>100</b>%</div><div class="lbl">IP ownership yours</div></div>
    </div>
  </div>
</section>
