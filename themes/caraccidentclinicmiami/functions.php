<?php
/**
 * Car Accident Clinic Miami — Block Theme functions and definitions.
 *
 * @package Caraccidentclinicmiami
 * @since   1.0.0
 */

define( 'CAC_THEME_VERSION', '1.0.0' );


// Setup
include_once get_template_directory() . '/includes/theme-setup.php';
include_once get_template_directory() . '/includes/enqueue.php';
include_once get_template_directory() . '/includes/blocks-setup.php';


// Shortcodes
include_once get_template_directory() . '/includes/shortcodes.php';

// Helpers
include_once get_template_directory() . '/helpers/icons.php';
