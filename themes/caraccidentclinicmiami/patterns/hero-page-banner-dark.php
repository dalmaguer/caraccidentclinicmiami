<?php
/**
 * Title: Hero Banner – Page Title (Dark)
 * Slug: caraccidentclinicmiami/hero-page-banner-dark
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/hero
 * Description: Dark-themed full-width interior page hero with a dark primary overlay, centered bold white title, and an optional light gray description. Shorter height than the main hero. Ideal for inner pages like Services, About, Contact.
 * Keywords: hero, banner, page title, cover, interior, dark, page header
 * Block Types: core/cover
 * Post Types: page
 */
$image_url = get_template_directory_uri() . '/assets/images/placeholder_landscape.png';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $image_url ); ?>","dimRatio":70,"overlayColor":"primary-dark","isDark":true,"minHeight":280,"minHeightUnit":"px","align":"full","metadata":{"patternName":"caraccidentclinicmiami/hero-page-banner-dark","name":"Hero Banner – Page Title (Dark)"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover is-dark alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50);min-height:280px"><span aria-hidden="true" class="wp-block-cover__background has-primary-dark-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $image_url ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontWeight":"800","lineHeight":"1.15","fontSize":"clamp(2rem, 5vw, 3.5rem)"},"textColor":"white"}} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:clamp(2rem, 5vw, 3.5rem);font-weight:800;line-height:1.15">Page Title</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"lg:!max-w-5/12","textColor":"light-gray","fontSize":"medium","style":{"spacing":{"margin":{"top":"1rem"}}}} -->
<p class="has-text-align-center lg:!max-w-5/12 has-light-gray-color has-text-color has-medium-font-size" style="margin-top:1rem">Optional description below the title. Remove this block if not needed.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
