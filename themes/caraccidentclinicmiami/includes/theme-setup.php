<?php

/**
 * Car Accident Clinic Miami — Theme functions and definitions.
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
