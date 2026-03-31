<?php
/**
 * Title: Latest News – 3-Column Grid
 * Slug: caraccidentclinicmiami/latest-news
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/news, caraccidentclinicmiami/content
 * Description: Centered section header followed by a 3-column query grid showing the 3 most recently published posts with featured image (fallback background when none), date, category, and title. Includes a View All News CTA.
 * Keywords: news, blog, posts, latest, health, articles, grid, query
 * Post Types: page
 */
?>
<!-- wp:group {"metadata":{"patternName":"caraccidentclinicmiami/latest-news","name":"Latest News – 3-Column Grid","categories":["caraccidentclinicmiami/content"]},"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"white"} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:5rem;padding-right:var(--wp--preset--spacing--50);padding-bottom:5rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-bottom:3rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"800","lineHeight":"1.1","fontSize":"clamp(2rem, 4vw, 3rem)"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 4vw, 3rem);font-weight:800;line-height:1.1">Health News</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"1.25rem"}}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="margin-top:1.25rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper.<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"","layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"color":{"background":"var:preset|color|secondary-light"},"spacing":{"margin":{"bottom":"1.25rem"}}}} /-->

<!-- wp:group {"className":"flex items-center gap-2 is-layout-flex wp-block-group-is-layout-flex","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group flex items-center gap-2 is-layout-flex wp-block-group-is-layout-flex"><!-- wp:post-date {"format":"F j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"gray","fontSize":"small"} /-->

<!-- wp:paragraph {"textColor":"gray","fontSize":"small"} -->
<p class="has-gray-color has-text-color has-small-font-size">/</p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category","textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontWeight":"700","fontSize":"1.125rem","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.5rem","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary-dark"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"primary-dark"} /-->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","textColor":"gray"} -->
<p class="has-text-align-center has-gray-color has-text-color">No posts found.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"backgroundColor":"secondary-light","textColor":"primary-dark","style":{"border":{"radius":"6px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-dark-color has-secondary-light-background-color has-text-color has-background wp-element-button" style="border-radius:6px">View All News</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
