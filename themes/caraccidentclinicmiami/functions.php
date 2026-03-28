<?php
/**
 * Car Accident Clinic Miami — Block Theme functions and definitions.
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

define( 'CAC_THEME_VERSION', '1.0.0' );

/**
 * Register custom block pattern categories.
 */
function cac_register_pattern_categories() {
	register_block_pattern_category(
		'caraccidentclinicmiami',
		array( 'label' => __( 'Car Accident Clinic Miami', 'caraccidentclinicmiami' ) )
	);

	register_block_pattern_category(
		'caraccidentclinicmiami/hero',
		array( 'label' => __( 'Hero', 'caraccidentclinicmiami' ) )
	);

	register_block_pattern_category(
		'caraccidentclinicmiami/cta',
		array( 'label' => __( 'Call to Action', 'caraccidentclinicmiami' ) )
	);

	register_block_pattern_category(
		'caraccidentclinicmiami/content',
		array( 'label' => __( 'Content', 'caraccidentclinicmiami' ) )
	);

	register_block_pattern_category(
		'caraccidentclinicmiami/forms',
		array( 'label' => __( 'Forms', 'caraccidentclinicmiami' ) )
	);
}
add_action( 'init', 'cac_register_pattern_categories', 8 );

/**
 * Enqueue block editor styles (editor only).
 */
function cac_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'cac_editor_styles' );
