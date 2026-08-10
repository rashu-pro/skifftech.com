<?php
/**
 * Staff Augmentation — FAQ accordion.
 *
 * @package skifftech
 */

$skt_sa_faqs = array(
	array(
		'q' => 'Who manages the engineers day to day?',
		'a' => 'You do. Augmented engineers report to your leads and work inside your process, standups, and tools. We stay in the background handling contracts, payroll, retention, and any support you need.',
	),
	array(
		'q' => 'How fast can someone start?',
		'a' => 'Most roles are shortlisted within 48 hours. After your interviews and selection, onboarding typically takes a few days depending on your access and security setup.',
	),
	array(
		'q' => 'What if an engineer isn&rsquo;t the right fit?',
		'a' => 'Every engagement includes a trial period and a free replacement guarantee. If the fit isn&rsquo;t right, we&rsquo;ll match a replacement at no additional cost.',
	),
	array(
		'q' => 'Is there a minimum commitment?',
		'a' => 'Commitments are flexible. Monthly engagements run on a rolling basis with no long lock-in; longer embedded arrangements are available when you want continuity.',
	),
	array(
		'q' => 'How do you handle timezones and communication?',
		'a' => 'We match engineers to overlap with your team&rsquo;s working hours so collaboration stays real-time. Communication happens in your channels &mdash; Slack, standups, and your project tools.',
	),
	array(
		'q' => 'Who owns the code and IP?',
		'a' => 'You do, fully. All work product and intellectual property belong to you, assigned contractually from day one.',
	),
	array(
		'q' => 'How do you handle security, NDAs, and access?',
		'a' => 'Every engineer signs your NDA and follows your security policies. We support background checks, device requirements, and least-privilege access to match your compliance needs.',
	),
);
?>
<section class="sa-section" id="safaq">
  <div class="sa-wrap">
    <div class="sa-head sa-head-center reveal">
      <span class="eyebrow">FAQ</span>
      <h2 class="sa-h2">Questions, answered.</h2>
    </div>

    <div class="sa-faq reveal">
		<?php foreach ( $skt_sa_faqs as $skt_sa_faq ) : ?>
      <div class="sa-faq-item">
        <button type="button" class="sa-faq-q" aria-expanded="false"><?php echo wp_kses_post( $skt_sa_faq['q'] ); ?><span class="pm"></span></button>
        <div class="sa-faq-a"><p><?php echo wp_kses_post( $skt_sa_faq['a'] ); ?></p></div>
      </div>
		<?php endforeach; ?>
    </div>
  </div>
</section>
