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
<!-- wp:cover {"url":"<?php echo esc_url( $image_url ); ?>","dimRatio":70,"overlayColor":"white","isUserOverlayColor":true,"isDark":false,"minHeight":280,"minHeightUnit":"px","align":"full","metadata":{"patternName":"caraccidentclinicmiami/hero-page-banner","name":"Hero Banner – Page Title"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover is-light alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $image_url ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.15","fontSize":"clamp(2rem, 5vw, 3.5rem)"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 5vw, 3.5rem);font-weight:800;line-height:1.15">Page Title</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"gray","fontSize":"medium","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
<p class="has-text-align-center has-gray-color has-text-color has-medium-font-size" style="margin-top:1rem">Optional description below the title. Remove this block if not needed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
