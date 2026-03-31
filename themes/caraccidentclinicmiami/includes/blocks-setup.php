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
function cac_disable_core_block_patterns()
{
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'cac_disable_core_block_patterns');

/**
 * Register custom block pattern categories.
 * Priority ≤ 8 so categories exist before WP scans pattern files (priority 10).
 */
function cac_register_pattern_categories()
{
    register_block_pattern_category('caraccidentclinicmiami', ['label' => __('Car Accident Clinic Miami', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/hero', ['label' => __('Hero', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/cta', ['label' => __('Call to Action', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/content', ['label' => __('Content', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/services',['label' => __('Services', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/news', ['label' => __('News', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/forms', ['label' => __('Forms', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/accordions', ['label' => __('Accordions', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/videos', ['label' => __('Videos', 'caraccidentclinicmiami')]);
    register_block_pattern_category('caraccidentclinicmiami/dev', ['label' => __('Development', 'caraccidentclinicmiami')]);
}
add_action('init', 'cac_register_pattern_categories', 8);

/**
 * Render a placeholder image for posts that have no featured image set,
 * so the post-featured-image block never renders empty in query loops.
 */
function cac_post_featured_image_fallback( $block_content, $block ) {
    if ( 'core/post-featured-image' !== $block['blockName'] || ! empty( $block_content ) ) {
        return $block_content;
    }

    $fallback_url = get_template_directory_uri() . '/assets/images/placeholder_16x9.png';

    return sprintf(
        '<figure class="wp-block-post-featured-image"><img src="%s" alt="" style="aspect-ratio:16/9;object-fit:cover;width:100%%;display:block;" /></figure>',
        esc_url( $fallback_url )
    );
}
add_filter( 'render_block', 'cac_post_featured_image_fallback', 10, 2 );
