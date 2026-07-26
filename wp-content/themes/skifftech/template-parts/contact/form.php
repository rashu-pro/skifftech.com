<?php
/**
 * Contact page — info panel + message form.
 *
 * @param array $args {
 *     @type bool   $sent  Whether the message was just sent successfully.
 *     @type string $error Validation/mail error message, if any.
 * }
 */

$sent  = ! empty( $args['sent'] );
$error = $args['error'] ?? '';
?>
<section class="ct-section" style="padding-top:0" id="message">
<div class="ct-wrap">

  <div class="ct-card reveal">

    <!-- LEFT: contact info -->
    <div class="ct-info">
      <h2>Get in Touch</h2>
      <p>Have a project in mind or a question for our team? Reach out directly, or send us a message and we&rsquo;ll get back to you shortly.</p>

      <div class="ct-items">
        <a class="ct-item-lnk" href="tel:+8801767839243">
          <div class="ic"><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6A19.8 19.8 0 012.1 4.2 2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.4 1.8.7 2.7a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.4-1.2a2 2 0 012.1-.5c.9.3 1.8.6 2.7.7a2 2 0 011.7 2z"/></svg></div>
          <div>
            <div class="lbl">Phone</div>
            <div class="val">+880 176 783 9243</div>
          </div>
        </a>
        <a class="ct-item-lnk" href="mailto:info@skifftech.com">
          <div class="ic"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg></div>
          <div>
            <div class="lbl">Email</div>
            <div class="val">info@skifftech.com</div>
          </div>
        </a>
      </div>

      <div class="ct-social">
        <a href="https://www.facebook.com/skiff.technologies" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24"><path d="M14 9h3V6h-3c-2 0-3 1-3 3v2H8v3h3v6h3v-6h3l1-3h-4V9z"/></svg></a>
        <a href="https://www.linkedin.com/company/skiff-technologies/?originalSubdomain=bd" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><svg viewBox="0 0 24 24"><path d="M4 4h4v16H4zM6 2a2 2 0 110 4 2 2 0 010-4zM10 9h4v2a4 4 0 014-2c3 0 4 2 4 5v6h-4v-5c0-1-1-2-2-2s-2 1-2 2v5h-4z"/></svg></a>
      </div>
    </div>

    <!-- RIGHT: form -->
    <div class="ct-form-side">
      <span class="eyebrow">Send a message</span>
      <h2 style="font-size:clamp(24px,3vw,32px);font-weight:800;letter-spacing:-.02em;margin:14px 0 10px">We would be delighted to hear from you</h2>
      <p class="intro" style="color:var(--tl-mut);font-size:15.5px;line-height:1.65;margin-bottom:30px">Just leave a message with some description of what you are looking for and our team will do the rest.</p>

      <?php if ( $sent ) : ?>

        <div class="ct-status ok">Thanks &mdash; your message has been sent. We&rsquo;ll be in touch shortly.</div>

      <?php else : ?>

        <?php if ( $error ) : ?>
          <div class="ct-status err"><?php echo esc_html( $error ); ?></div>
        <?php endif; ?>

        <form id="ctForm" method="post" action="<?php echo esc_url( get_permalink() . '#message' ); ?>">
          <?php wp_nonce_field( 'skifftech_contact_form', 'skifftech_contact_nonce' ); ?>
          <input type="text" name="skt_hp" value="" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px">

          <div class="ct-field-row">
            <div class="ct-field">
              <label for="ct-name">Name</label>
              <input type="text" id="ct-name" name="name" placeholder="Your full name" required>
            </div>
            <div class="ct-field">
              <label for="ct-email">Email</label>
              <input type="email" id="ct-email" name="email" placeholder="you@company.com" required>
            </div>
          </div>
          <div class="ct-field-row">
            <div class="ct-field">
              <label for="ct-country">Country</label>
              <select id="ct-country" name="country" required>
                <option value="" disabled selected>Select your country</option>
                <option>United States</option>
                <option>United Kingdom</option>
                <option>Canada</option>
                <option>Australia</option>
                <option>Germany</option>
                <option>Bangladesh</option>
                <option>Other</option>
              </select>
            </div>
            <div class="ct-field">
              <label for="ct-subject">Subject</label>
              <input type="text" id="ct-subject" name="subject" placeholder="What's this about?" required>
            </div>
          </div>
          <div class="ct-field">
            <label for="ct-message">Message</label>
            <textarea id="ct-message" name="message" placeholder="Tell us a little about what you're looking for&hellip;" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message <span class="arrow">&rarr;</span></button>
        </form>

      <?php endif; ?>
    </div>

  </div>

</div>
</section>
