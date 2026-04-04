<?php
/**
 * Car Accident Clinic Miami — Enqueue styles and scripts.
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

/**
 * Enqueue block editor styles (editor only).
 */
function cac_editor_styles() {
	add_editor_style( 'assets/css/editor.css' );
	add_editor_style( 'assets/css/tailwind.css' );
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'cac_editor_styles' );

// Enqueue front-end styles and scripts.
function cac_enqueue_assets() {
	// Tailwind CSS — compiled static file, loaded early to prevent layout shift.
	wp_enqueue_style(
		'cac-tailwind',
		get_stylesheet_directory_uri() . '/assets/css/tailwind.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style( 'cac-style', get_stylesheet_uri(), array( 'cac-tailwind' ), wp_get_theme()->get( 'Version' ) );

	// Contact form assets — loaded only when the form is present on the page.
	wp_register_style(
		'cac-contact-form',
		get_stylesheet_directory_uri() . '/assets/css/contact-form.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
	wp_register_script(
		'cac-contact-form',
		get_stylesheet_directory_uri() . '/assets/js/contact-form.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	if ( cac_page_has_contact_form() ) {
		wp_enqueue_style( 'cac-contact-form' );
		wp_enqueue_script( 'cac-contact-form' );
		wp_localize_script(
			'cac-contact-form',
			'cacContactForm',
			array(
				'ajaxUrl' => admin_url( 'admin-ajax.php' ),
				'nonce'   => wp_create_nonce( 'cac_contact_form_nonce' ),
			)
		);
	}

	// Single post styles — loaded only on single post pages.
	wp_register_style(
		'cac-single-post',
		get_stylesheet_directory_uri() . '/assets/css/single-post.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	if ( is_single() ) {
		wp_enqueue_style( 'cac-single-post' );
	}

	// Medical Process pattern styles — loaded only when the pattern is present.
	wp_register_style(
		'cac-medical-process',
		get_stylesheet_directory_uri() . '/assets/css/medical-process.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	if ( cac_page_has_medical_process() ) {
		wp_enqueue_style( 'cac-medical-process' );
	}

	// Doctors accordion pattern styles — loaded only when the pattern is present.
	wp_register_style(
		'cac-doctors-accordion',
		get_stylesheet_directory_uri() . '/assets/css/doctors-accordion.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	if ( cac_page_has_doctors_accordion() ) {
		wp_enqueue_style( 'cac-doctors-accordion' );
	}
}
add_action( 'wp_enqueue_scripts', 'cac_enqueue_assets', 20 );

/**
 * Check whether the current page contains the contact form pattern.
 *
 * @return bool
 */
function cac_page_has_contact_form() {
	global $post;
	if ( ! $post instanceof WP_Post ) {
		return false;
	}
	return has_shortcode( $post->post_content, 'cac_contact_form' );
}

/**
 * Check whether the current page contains the Medical Process pattern.
 *
 * @return bool
 */
function cac_page_has_medical_process() {
	global $post;
	if ( ! $post instanceof WP_Post ) {
		return false;
	}
	return str_contains( $post->post_content, 'cac-process-step' );
}

/**
 * Check whether the current page contains the Doctors accordion pattern.
 *
 * @return bool
 */
function cac_page_has_doctors_accordion() {
	global $post;
	if ( ! $post instanceof WP_Post ) {
		return false;
	}
	return str_contains( $post->post_content, 'cac-doctors-accordion' );
}
