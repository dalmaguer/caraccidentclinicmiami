<?php
/**
 * Car Accident Clinic Miami — Custom Blocks functions and definitions.
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

/**
 * Disable core block patterns.
 */
function cac_disable_core_block_patterns() {
    remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'cac_disable_core_block_patterns' );


/**
 * Register custom block pattern categories.
 */
// function cac_register_pattern_categories() {
// 	register_block_pattern_category(
// 		'caraccidentclinicmiami',
// 		array( 'label' => __( 'Car Accident Clinic Miami', 'caraccidentclinicmiami' ) )
// 	);

// 	register_block_pattern_category(
// 		'caraccidentclinicmiami/hero',
// 		array( 'label' => __( 'Hero', 'caraccidentclinicmiami' ) )
// 	);

// 	register_block_pattern_category(
// 		'caraccidentclinicmiami/cta',
// 		array( 'label' => __( 'Call to Action', 'caraccidentclinicmiami' ) )
// 	);

// 	register_block_pattern_category(
// 		'caraccidentclinicmiami/content',
// 		array( 'label' => __( 'Content', 'caraccidentclinicmiami' ) )
// 	);

// 	register_block_pattern_category(
// 		'caraccidentclinicmiami/forms',
// 		array( 'label' => __( 'Forms', 'caraccidentclinicmiami' ) )
// 	);
// }
// add_action( 'init', 'cac_register_pattern_categories', 8 );

/**
 * Register custom block pattern categories.
 * Priority ≤ 8 so categories exist before WP scans pattern files (priority 10).
 */
function cac_register_pattern_categories() {
    register_block_pattern_category( 'caraccidentclinicmiami',          [ 'label' => __( 'Car Accident Clinic Miami', 'caraccidentclinicmiami' ) ] );
    register_block_pattern_category( 'caraccidentclinicmiami/hero',     [ 'label' => __( 'Hero', 'caraccidentclinicmiami' ) ] );
    register_block_pattern_category( 'caraccidentclinicmiami/content',  [ 'label' => __( 'Content', 'caraccidentclinicmiami' ) ] );
    register_block_pattern_category( 'caraccidentclinicmiami/services', [ 'label' => __( 'Services', 'caraccidentclinicmiami' ) ] );
}
add_action( 'init', 'cac_register_pattern_categories', 8 );
