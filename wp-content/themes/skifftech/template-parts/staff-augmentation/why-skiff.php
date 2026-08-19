<?php
/**
 * Staff Augmentation — Why use our team (quick-glance matrix).
 *
 * @package skifftech
 */

$skt_sa_included = array(
	'Only the top 3% clear our vetting process',
	'6-stage technical & communication evaluation',
	'You interview and approve every hire',
	'No long-term lock-in required',
	'2-week trial period',
	'Free replacement guarantee',
);
?>
<section class="sa-section">
  <div class="sa-wrap">
    <div class="sa-head reveal">
      <span class="eyebrow">Why Skiff</span>
      <h2 class="sa-h2">Why use our staff augmentation team?</h2>
      <p class="sa-lead">Every engineer clears a rigorous evaluation before they ever reach your shortlist &mdash; so the only decision left for you is which one to hire.</p>
    </div>

    <div class="sa-quickcmp reveal">
      <div class="sa-qc-row head">
        <div class="sa-qc-cell">What you get with Skiff</div>
        <div class="sa-qc-cell hi">Included</div>
      </div>

		<?php foreach ( $skt_sa_included as $skt_sa_item ) : ?>
      <div class="sa-qc-row">
        <div class="sa-qc-cell"><?php echo esc_html( $skt_sa_item ); ?></div>
        <div class="sa-qc-cell hi-col">
          <span class="sa-qc-check yes">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12l5 5L20 6" /></svg>
          </span>
        </div>
      </div>
		<?php endforeach; ?>
    </div>
  </div>
</section>
