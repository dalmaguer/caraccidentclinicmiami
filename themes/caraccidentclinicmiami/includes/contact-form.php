<?php
/**
 * Car Accident Clinic Miami — Contact Form AJAX Handler.
 *
 * Processes the contact form submission and sends an email via wp_mail().
 * SMTP configuration is handled by the site's SMTP plugin.
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

// Register AJAX handlers for both authenticated and guest users.
add_action( 'wp_ajax_cac_contact_form', 'cac_handle_contact_form' );
add_action( 'wp_ajax_nopriv_cac_contact_form', 'cac_handle_contact_form' );

/**
 * Handle the contact form AJAX submission.
 *
 * @return never
 */
function cac_handle_contact_form() {
	// Verify nonce.
	if ( ! check_ajax_referer( 'cac_contact_form_nonce', 'nonce', false ) ) {
		wp_send_json_error(
			array( 'message' => __( 'Security check failed. Please refresh the page and try again.', 'caraccidentclinicmiami' ) ),
			403
		);
	}

	// Sanitize and validate inputs.
	$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
	$email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
	$subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? '' ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

	if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
		wp_send_json_error(
			array( 'message' => __( 'Please fill in all required fields.', 'caraccidentclinicmiami' ) ),
			400
		);
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error(
			array( 'message' => __( 'Please enter a valid email address.', 'caraccidentclinicmiami' ) ),
			400
		);
	}

	// Build the email.
	$to            = get_option( 'admin_email' );
	$email_subject = ! empty( $subject )
		? sprintf( '[Contact Form] %s', $subject )
		/* translators: %s: sender's name */
		: sprintf( __( '[Contact Form] New message from %s', 'caraccidentclinicmiami' ), $name );

	$body = sprintf(
		"Name: %s\nEmail: %s\n\nMessage:\n%s",
		$name,
		$email,
		$message
	);

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		sprintf( 'Reply-To: %s <%s>', $name, $email ),
	);

	$sent = wp_mail( $to, $email_subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success(
			array( 'message' => __( "Your message has been sent. We'll be in touch soon!", 'caraccidentclinicmiami' ) )
		);
	} else {
		wp_send_json_error(
			array( 'message' => __( 'There was a problem sending your message. Please try again or call us directly.', 'caraccidentclinicmiami' ) ),
			500
		);
	}
}
