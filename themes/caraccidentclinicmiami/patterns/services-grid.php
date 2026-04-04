<?php
/**
 * Title: Services Grid
 * Slug: caraccidentclinicmiami/services-grid
 * Categories: caraccidentclinicmiami, caraccidentclinicmiami/services
 * Description: Doctor image on the left with a 2x2 grid of service cards and an All Services CTA on the right.
 * Keywords: services, grid, cards, doctor, image, general care, emergency, dental, diagnostic
 * Post Types: page
 */
$img_url = get_template_directory_uri() . '/assets/images/placeholder_square.png';
?>
<!-- wp:group {"metadata":{"categories":["caraccidentclinicmiami/services"],"patternName":"caraccidentclinicmiami/services-grid","name":"Services Grid"},"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"4rem","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"white"} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:4rem;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group"><!-- wp:columns {"className":"!items-stretch","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns !items-stretch"><!-- wp:column {"width":"42%","className":"overflow-hidden"} -->
<div class="wp-block-column overflow-hidden" style="flex-basis:42%"><!-- wp:cover {"url":"<?php echo esc_url($img_url); ?>","dimRatio":0,"minHeight":0,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"!h-full min-h-96","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-cover is-light !h-full min-h-96" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url($img_url); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%","style":{"spacing":{"blockGap":"4px"}}} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"className":""} -->
<div class="wp-block-column"><!-- wp:group {"className":"flex flex-col gap-5","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"backgroundColor":"windpress-slate-50"} -->
<div class="wp-block-group flex flex-col gap-5 has-windpress-slate-50-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"right"} -->
<div class="wp-block-outermost-icon-block items-justified-right"><div class="icon-container" style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg aria-hidden="true" focusable="false" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m10.5 20.5 10-10a4.95 4.95 0 1 0-7-7l-10 10a4.95 4.95 0 1 0 7 7Z"></path><path d="m8.5 8.5 7 7"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading {"level":3,"className":"!text-3xl ","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem","lineHeight":"1.2"}}} -->
<h3 class="wp-block-heading !text-3xl" style="font-size:1.25rem;font-weight:700;line-height:1.2">General Care</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color" style="font-size:0.875rem;line-height:1.6">Lorem ipsum dolor sit amet, consectetur elit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.875rem;font-weight:600"><a href="#">Learn More →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"flex flex-col gap-5","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"backgroundColor":"secondary-light"} -->
<div class="wp-block-group flex flex-col gap-5 has-secondary-light-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"right"} -->
<div class="wp-block-outermost-icon-block items-justified-right"><div class="icon-container" style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg aria-hidden="true" focusable="false" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 1.5C10.5 3.5 9.26 3 7.5 3A5.5 5.5 0 0 0 2 8.5c0 2.29 1.51 4.04 3 5.5l7 7Z"></path><path d="M3.22 12H9.5l1.5-1.5 2 2.5 1.5-2 1.5 2 1-1.5 2 2H21"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading {"level":3,"className":"!text-3xl","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem","lineHeight":"1.2"}}} -->
<h3 class="wp-block-heading !text-3xl" style="font-size:1.25rem;font-weight:700;line-height:1.2">Emergency</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color" style="font-size:0.875rem;line-height:1.6">Lorem ipsum dolor sit amet, consectetur elit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.875rem;font-weight:600"><a href="#">Learn More →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"reverse-on-mobile","style":{"spacing":{"blockGap":{"left":"4px"}}}} -->
<div class="wp-block-columns reverse-on-mobile"><!-- wp:column {"className":" "} -->
<div class="wp-block-column"><!-- wp:group {"className":"flex flex-col gap-5","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"backgroundColor":"secondary-light"} -->
<div class="wp-block-group flex flex-col gap-5 has-secondary-light-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"right"} -->
<div class="wp-block-outermost-icon-block items-justified-right"><div class="icon-container" style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg aria-hidden="true" focusable="false" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2C8.5 2 6 4.5 6 7.5c0 2 .5 3.5 1.5 5 .5 1 .5 2.5.5 4 0 1.5.8 2.5 2 2.5.8 0 1.3-.6 1.5-1.5.2.9.7 1.5 1.5 1.5 1.2 0 2-1 2-2.5 0-1.5 0-3 .5-4 1-1.5 1.5-3 1.5-5C18 4.5 15.5 2 12 2z"></path></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading {"level":3,"className":"!text-3xl","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem","lineHeight":"1.2"}}} -->
<h3 class="wp-block-heading !text-3xl" style="font-size:1.25rem;font-weight:700;line-height:1.2">Dental Care</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color" style="font-size:0.875rem;line-height:1.6">Lorem ipsum dolor sit amet, consectetur elit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.875rem;font-weight:600"><a href="#">Learn More →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":""} -->
<div class="wp-block-column"><!-- wp:group {"className":"flex flex-col gap-5","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem","left":"2rem","right":"2rem"}}},"backgroundColor":"windpress-slate-50"} -->
<div class="wp-block-group flex flex-col gap-5 has-windpress-slate-50-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:outermost/icon-block {"iconName":"","itemsJustification":"right"} -->
<div class="wp-block-outermost-icon-block items-justified-right"><div class="icon-container" style="width:48px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg aria-hidden="true" focusable="false" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 2V7a5 5 0 0 0 10 0V2"></path><path d="M12 12v6"></path><circle cx="12" cy="21" r="2"></circle></svg></div></div>
<!-- /wp:outermost/icon-block -->

<!-- wp:heading {"level":3,"className":"!text-3xl","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem","lineHeight":"1.2"}}} -->
<h3 class="wp-block-heading !text-3xl" style="font-size:1.25rem;font-weight:700;line-height:1.2">Diagnostic</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"gray"} -->
<p class="has-gray-color has-text-color" style="font-size:0.875rem;line-height:1.6">Lorem ipsum dolor sit amet, consectetur elit.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.875rem"}},"textColor":"primary-dark"} -->
<p class="has-primary-dark-color has-text-color" style="font-size:0.875rem;font-weight:600"><a href="#">Learn More →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:2rem"><!-- wp:button {"backgroundColor":"secondary-light","textColor":"primary-dark","style":{"border":{"radius":"4px"},"spacing":{"padding":{"top":"0.875rem","bottom":"0.875rem","left":"2rem","right":"2rem"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-dark-color has-secondary-light-background-color has-text-color has-background wp-element-button" style="border-radius:4px;padding-top:0.875rem;padding-right:2rem;padding-bottom:0.875rem;padding-left:2rem">All Services</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
