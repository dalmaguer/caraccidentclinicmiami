<?php
/**
 * Title: Hero Section - Light Theme
 * Slug: caraccidentclinicmiami/hero-section-light
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/hero
 * Description: Full-width hero with white background, dark text, and CTA buttons.
 * Keywords: hero, banner, cover, cta, light
 * Block Types: core/cover
 * Post Types: page
 */
$image_url = get_template_directory_uri() . '/assets/images/placeholder_landscape.png';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $image_url ); ?>","dimRatio":30,"overlayColor":"white","minHeight":600,"minHeightUnit":"px","align":"full","className":"hero-light-theme","style":{"spacing":{"padding":{"top":"var:preset|spacing|90","bottom":"var:preset|spacing|90","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull hero-light-theme" style="padding-top:var(--wp--preset--spacing--90);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50);min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $image_url ); ?>" data-object-fit="cover"/>
<div class="wp-block-cover__inner-container">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group">

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

<!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

<!-- wp:heading {"level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.1"}},"textColor":"dark","fontSize":"huge"} -->
<h1 class="wp-block-heading has-dark-color has-text-color has-huge-font-size" style="font-weight:800;line-height:1.1">Happiness Begins with Good Health</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"gray","fontSize":"medium"} -->
<p class="has-gray-color has-text-color has-medium-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">

<!-- wp:button {"backgroundColor":"primary-dark","textColor":"white","style":{"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-dark-background-color has-text-color has-background wp-element-button" style="border-radius:6px">Services</a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"secondary-light","textColor":"primary-dark","style":{"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-dark-color has-secondary-light-background-color has-text-color has-background wp-element-button" style="border-radius:6px">Find a Doctor</a></div>
<!-- /wp:button -->

</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"></div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->
