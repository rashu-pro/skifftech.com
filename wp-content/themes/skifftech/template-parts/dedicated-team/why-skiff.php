<?php
/**
 * Dedicated Development Team — Why use our team (quick-glance matrix).
 *
 * @package skifftech
 */

$skt_ddt_included = array(
	'You approve every member before they join',
	'A PM included as your single point of contact',
	'Zero hiring effort on your side',
	'One fixed monthly cost, no surprise invoices',
	'Rolling commitment after the initial term',
	'Free replacement guarantee',
);
?>
<section class="sa-section">
  <div class="sa-wrap">
    <div class="sa-head reveal">
      <span class="eyebrow">Why Skiff</span>
      <h2 class="sa-h2">Why use our dedicated development team?</h2>
      <p class="sa-lead">Each team is composed around your roadmap, not pulled off a bench &mdash; a PM, 2&ndash;6 engineers matched to your stack, QA from sprint one, and design or DevOps added when the work calls for it.</p>
    </div>

    <div class="sa-quickcmp reveal">
      <div class="sa-qc-row head">
        <div class="sa-qc-cell">What you get with Skiff</div>
        <div class="sa-qc-cell hi">Included</div>
      </div>

		<?php foreach ( $skt_ddt_included as $skt_ddt_item ) : ?>
      <div class="sa-qc-row">
        <div class="sa-qc-cell"><?php echo esc_html( $skt_ddt_item ); ?></div>
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
