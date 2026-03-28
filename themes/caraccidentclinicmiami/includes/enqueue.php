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
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'cac_editor_styles' );
