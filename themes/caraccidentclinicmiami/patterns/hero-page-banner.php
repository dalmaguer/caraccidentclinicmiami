<?php
/**
 * Title: Hero Banner – Page Title
 * Slug: caraccidentclinicmiami/hero-page-banner
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/hero
 * Description: Simple full-width interior page hero with a light white overlay, centered bold title, and an optional description below. Shorter height than the main hero. Ideal for inner pages like Services, About, Contact.
 * Keywords: hero, banner, page title, cover, interior, simple, page header
 * Block Types: core/cover
 * Post Types: page
 */
$image_url = get_template_directory_uri() . '/assets/images/placeholder_landscape.png';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $image_url ); ?>","dimRatio":70,"overlayColor":"white","isUserOverlayColor":true,"minHeight":280,"minHeightUnit":"px","isDark":false,"metadata":{"patternName":"caraccidentclinicmiami/hero-page-banner","name":"Hero Banner – Page Title","categories":["caraccidentclinicmiami/hero"]},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);min-height:280px"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $image_url ); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-70 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.15","fontSize":"clamp(2rem, 5vw, 3.5rem)"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 5vw, 3.5rem);font-weight:800;line-height:1.15">Contact Us</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"lg:!max-w-5/12","style":{"spacing":{"margin":{"top":"1rem"}}},"textColor":"gray","fontSize":"medium"} -->
<p class="has-text-align-center lg:!max-w-5/12 has-gray-color has-text-color has-medium-font-size" style="margin-top:1rem">Duis non quam et nisi tincidunt fermentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam ullamcorper, mauris nec feugiat fermentum, purus lacus suscipit felis, et facilisis justo lacus id risus.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
