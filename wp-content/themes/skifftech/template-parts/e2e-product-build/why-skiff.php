<?php
/**
 * End-to-End Product Build — Why use our team (quick-glance matrix).
 *
 * @package skifftech
 */

$skt_e2e_included = array(
	'Access to experienced technical talent, no hiring required',
	'A solution built around your requirements, not a template',
	'One team accountable for the whole outcome',
	'Architecture built to scale as demand grows',
	'Fixed or milestone-based pricing',
	'Full IP ownership, assigned from day one',
);
?>
<section class="sa-section">
  <div class="sa-wrap">
    <div class="sa-head reveal">
      <span class="eyebrow">Why Skiff</span>
      <h2 class="sa-h2">Why use our software development team?</h2>
      <p class="sa-lead">An end-to-end team is the right call when you want one partner to own the whole product lifecycle &mdash; turning your idea into a working, scalable product without you managing the complexity of getting there.</p>
    </div>

    <div class="sa-quickcmp reveal">
      <div class="sa-qc-row head">
        <div class="sa-qc-cell">What you get with Skiff</div>
        <div class="sa-qc-cell hi">Included</div>
      </div>

		<?php foreach ( $skt_e2e_included as $skt_e2e_item ) : ?>
      <div class="sa-qc-row">
        <div class="sa-qc-cell"><?php echo esc_html( $skt_e2e_item ); ?></div>
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
