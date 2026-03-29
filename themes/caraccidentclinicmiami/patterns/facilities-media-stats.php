<?php
/**
 * Title: Facilities – Media with Stats
 * Slug: caraccidentclinicmiami/facilities-media-stats
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/videos, caraccidentclinicmiami/content
 * Description: Two-column section with text and CTA on the left, image with video play button and statistics overlay on the right.
 * Keywords: facilities, media, video, lightbox, stats, technology, modern
 * Post Types: page
 */
$img_url = get_template_directory_uri() . '/assets/images/placeholder_16x9.png';
?>
<!-- wp:group {"metadata":{"patternName":"caraccidentclinicmiami/facilities-media-stats","name":"Facilities – Media with Stats","categories":["caraccidentclinicmiami/videos", "caraccidentclinicmiami/content"]},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"white"} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:5rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Facilities</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(2rem, 4vw, 3rem)"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:800;line-height:1.1">Modern Medical Technology</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"gray"} -->
<p class="has-gray-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"secondary-light","textColor":"primary-dark","style":{"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-dark-color has-secondary-light-background-color has-text-color has-background wp-element-button" style="border-radius:6px">Virtual Tour</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"className":"relative overflow-visible"} -->
<div class="wp-block-group relative overflow-visible"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $img_url ); ?>" alt="Modern medical technology"/></figure>
<!-- /wp:image -->

<!-- wp:shortcode -->
[cac_facilities_play_button]
<!-- /wp:shortcode -->

<!-- wp:columns {"className":"!-mt-14 !gap-0"} -->
<div class="wp-block-columns !-mt-14 !gap-0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.25rem","right":"1.25rem"}}},"backgroundColor":"secondary-light"} -->
<div class="wp-block-group has-secondary-light-background-color has-background" style="padding-top:1.5rem;padding-right:1.25rem;padding-bottom:1.5rem;padding-left:1.25rem"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"800","fontSize":"2.5rem","lineHeight":"1.1"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:800;line-height:1.1">75+</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-text-align-center" style="font-size:0.9375rem">Rooms Available</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.25rem","right":"1.25rem"}}},"backgroundColor":"secondary-light"} -->
<div class="wp-block-group has-secondary-light-background-color has-background" style="padding-top:1.5rem;padding-right:1.25rem;padding-bottom:1.5rem;padding-left:1.25rem"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontWeight":"800","fontSize":"2.5rem","lineHeight":"1.1"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:800;line-height:1.1">63</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9375rem"}}} -->
<p class="has-text-align-center" style="font-size:0.9375rem">Medical Staffs</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:shortcode -->
[cac_facilities_modal]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
