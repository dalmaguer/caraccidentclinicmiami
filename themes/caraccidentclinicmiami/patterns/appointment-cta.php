<?php
/**
 * Title: Appointment CTA – Text and Doctor Image
 * Slug: caraccidentclinicmiami/appointment-cta
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/cta
 * Description: Two-column section with appointment heading, body text, and Contact Us CTA on the left, doctor portrait image on the right. Light gray background.
 * Keywords: appointment, cta, schedule, doctor, contact, book
 * Post Types: page
 */
$img_url = get_template_directory_uri() . '/assets/images/placeholder_3x4.png';
?>
<!-- wp:group {"metadata":{"patternName":"caraccidentclinicmiami/appointment-cta","name":"Appointment CTA – Text and Doctor Image","categories":["caraccidentclinicmiami","caraccidentclinicmiami/cta"]},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"light-gray"} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:5rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(2rem, 4vw, 3rem)"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:800;line-height:1.1">Schedule an appointment</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"gray"} -->
<p class="has-gray-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"backgroundColor":"secondary-light","textColor":"primary-dark","style":{"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-dark-color has-secondary-light-background-color has-text-color has-background wp-element-button" style="border-radius:6px">Contact Us</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%","className":"overflow-hidden"} -->
<div class="wp-block-column is-vertically-aligned-center overflow-hidden" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"w-full !mb-0"} -->
<figure class="wp-block-image size-full w-full !mb-0"><img src="<?php echo esc_url( $img_url ); ?>" alt="Schedule an appointment with our doctors"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
