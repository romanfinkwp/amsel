<?php
/**
 * Title: Quote
 * Slug: amsel/quote
 * Categories: amsel
 * Description: Full-width accent banner with a studio philosophy quote and attribution.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary-accent","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group has-primary-accent-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--m)"><!-- wp:paragraph {"className":"has-fixed-white-color has-text-color has-link-color","style":{"typography":{"fontWeight":"500","lineHeight":"1.3","fontStyle":"normal","textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|fixed-white"}}}},"textColor":"fixed-white","fontSize":"xl"} -->
<p class="has-text-align-center has-fixed-white-color has-text-color has-link-color has-xl-font-size" style="font-style:normal;font-weight:500;line-height:1.3"><?php esc_html_e('We don\'t just render images — we build entire worlds, frame by frame, polygon by polygon.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"has-additional-color has-text-color has-link-color","style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|additional"}}},"typography":{"textAlign":"center"}},"textColor":"additional","fontSize":"s"} -->
<p class="has-text-align-center has-additional-color has-text-color has-link-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--s)"><?php esc_html_e('— Studio philosophy since 2015', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->