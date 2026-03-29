<?php
/**
 * Title: Doctors - Expert in Specialty
 * Slug: caraccidentclinicmiami/doctors-expert-specialty
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/content
 * Description: Two-column section with heading, description, functional accordion, and overlapping images. Ideal for a doctors/services intro section.
 * Keywords: doctors, accordion, specialty, expert, services, images, faq
 * Post Types: page
 */
$img_square    = get_template_directory_uri() . '/assets/images/placeholder_square.png';
$img_16x9 = get_template_directory_uri() . '/assets/images/placeholder_16x9.png';
?>

<!-- wp:group {"metadata":{"patternName":"caraccidentclinicmiami/doctors-expert-specialty","name":"Doctors - Expert in Specialty"},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"light-gray"} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:5rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--50)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"1.5rem"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"700"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Doctors</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(2rem, 4vw, 3rem)"}}} -->
<h2 class="wp-block-heading" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:800;line-height:1.1">Expert in Specialty</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"gray"} -->
<p class="has-gray-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"cac-doctors-accordion","style":{"spacing":{"margin":{"top":"1rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group cac-doctors-accordion" style="margin-top:1rem">

<!-- wp:details {"summary":"Medical Records","showContent":true,"className":"cac-accordion-item"} -->
<details class="wp-block-details cac-accordion-item is-layout-flow wp-block-details-is-layout-flow" open><summary>Medical Records</summary>
<!-- wp:paragraph {"textColor":"gray","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"1rem"}}}} -->
<p class="has-gray-color has-text-color" style="padding-top:0.75rem;padding-bottom:1rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"summary":"Holistic Medicine","className":"cac-accordion-item"} -->
<details class="wp-block-details cac-accordion-item is-layout-flow wp-block-details-is-layout-flow"><summary>Holistic Medicine</summary>
<!-- wp:paragraph {"textColor":"gray","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"1rem"}}}} -->
<p class="has-gray-color has-text-color" style="padding-top:0.75rem;padding-bottom:1rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details {"summary":"Visitor Information","className":"cac-accordion-item"} -->
<details class="wp-block-details cac-accordion-item is-layout-flow wp-block-details-is-layout-flow"><summary>Visitor Information</summary>
<!-- wp:paragraph {"textColor":"gray","style":{"spacing":{"padding":{"top":"0.75rem","bottom":"1rem"}}}} -->
<p class="has-gray-color has-text-color" style="padding-top:0.75rem;padding-bottom:1rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus nisl vitae magna pulvinar laoreet.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

<!-- wp:group {"className":"cac-doctors-images-flex items-start","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group cac-doctors-images-flex items-start is-layout-flex wp-block-group-is-layout-flex">

<!-- wp:group {"className":"w-7/12 shrink-0 mt-10 overflow-hidden","layout":{"type":"default"}} -->
<div class="wp-block-group w-7/12 shrink-0 mt-10 overflow-hidden">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"w-full"} -->
<figure class="wp-block-image size-full w-full"><img src="<?php echo esc_url( $img_square ); ?>" alt="Doctor consultation" /></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"w-5/12 shrink-0 -ml-8 z-10 shadow-xl overflow-hidden","layout":{"type":"default"}} -->
<div class="wp-block-group w-5/12 shrink-0 -ml-8 z-10 shadow-xl overflow-hidden">
<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"w-full"} -->
<figure class="wp-block-image size-full w-full"><img src="<?php echo esc_url( $img_16x9 ); ?>" alt="Advanced medical technology" /></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div>
<!-- /wp:group -->
