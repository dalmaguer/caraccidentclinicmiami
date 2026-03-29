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
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'cac_editor_styles' );

// Enqueue front-end styles and scripts.
function cac_enqueue_assets() {
	wp_enqueue_style( 'cac-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'cac_enqueue_assets', 20 );
