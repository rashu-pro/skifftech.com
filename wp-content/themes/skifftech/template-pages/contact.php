<?php
/**
 * Template Name: Contact Us
 *
 * Contact page using the V6 dark design system (Skiff header + footer).
 * Assign in WP Admin → Page Attributes → Template.
 *
 * @package skifftech
 */

$skifftech_contact_sent  = false;
$skifftech_contact_error = '';

if ( isset( $_POST['skifftech_contact_nonce'] ) && wp_verify_nonce( wp_unslash( $_POST['skifftech_contact_nonce'] ), 'skifftech_contact_form' ) ) {

	if ( ! empty( $_POST['skt_hp'] ) ) {
		// Honeypot tripped — pretend success, send nothing.
		$skifftech_contact_sent = true;
	} else {
		$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
		$email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
		$country = sanitize_text_field( wp_unslash( $_POST['country'] ?? '' ) );
		$subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? '' ) );
		$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

		if ( ! $name || ! is_email( $email ) || ! $country || ! $subject || ! $message ) {
			$skifftech_contact_error = 'Please fill in every field with a valid email address.';
		} else {
			$headers = array( 'Reply-To: ' . $name . ' <' . $email . '>' );
			$body    = "Name: {$name}\nEmail: {$email}\nCountry: {$country}\n\n{$message}";

			$skifftech_contact_sent = wp_mail( get_option( 'admin_email' ), '[Contact Us] ' . $subject, $body, $headers );

			if ( ! $skifftech_contact_sent ) {
				$skifftech_contact_error = 'Something went wrong sending your message — please try again or email us directly.';
			}
		}
	}
}

get_header();
?>

<main id="pg-contact">
  <?php get_template_part( 'template-parts/contact/hero' ); ?>
  <?php
  get_template_part(
	  'template-parts/contact/form',
	  null,
	  array(
		  'sent'  => $skifftech_contact_sent,
		  'error' => $skifftech_contact_error,
	  )
  );
  ?>
</main><!-- #pg-contact -->

<?php get_footer(); ?>
