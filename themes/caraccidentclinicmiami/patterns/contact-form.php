<?php
/**
 * Title: Contact Form
 * Slug: caraccidentclinicmiami/contact-form
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/contact
 * Description: Contact form with name, email, subject, and message fields. Submits via AJAX using wp_mail().
 * Keywords: contact, form, message, inquiry, email
 * Post Types: page
 */
?>
<!-- wp:group {"metadata":{"patternName":"caraccidentclinicmiami/contact-form","name":"Contact Form","categories":["caraccidentclinicmiami","caraccidentclinicmiami/contact"]},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"light-gray"} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:5rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Get In Touch</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(1.75rem, 4vw, 2.5rem)"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(1.75rem, 4vw, 2.5rem);font-weight:800;line-height:1.1">Send us a Message</h2>
<!-- /wp:heading -->

<!-- wp:html -->
<form id="cac-contact-form" novalidate>
	<div class="cac-form-fields">
		<div class="cac-field-group">
			<label for="cac-name" class="cac-field-label">Your Name <span class="required" aria-hidden="true">*</span></label>
			<input id="cac-name" name="name" type="text" placeholder="John Doe" required autocomplete="name" />
		</div>
		<div class="cac-field-group">
			<label for="cac-email" class="cac-field-label">Email <span class="required" aria-hidden="true">*</span></label>
			<input id="cac-email" name="email" type="email" placeholder="email@domain.com" required autocomplete="email" />
		</div>
		<div class="cac-field-group">
			<label for="cac-subject" class="cac-field-label">Subject</label>
			<input id="cac-subject" name="subject" type="text" placeholder="How can we help?" autocomplete="off" />
		</div>
		<div class="cac-field-group">
			<label for="cac-message" class="cac-field-label">Message <span class="required" aria-hidden="true">*</span></label>
			<textarea id="cac-message" name="message" placeholder="Your message here..." required rows="6"></textarea>
		</div>
	</div>
	<div id="cac-form-status" class="cac-form-status" role="status" aria-live="polite"></div>
	<button type="submit" class="cac-submit-btn">Send Message</button>
</form>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
