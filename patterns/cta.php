<?php
/**
 * Title: Call to Action
 * Slug: amsel/cta
 * Categories: amsel
 * Description: Centered call-to-action card with heading, supporting text and a button.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--m)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|2xl","right":"var:preset|spacing|2xl"}},"border":{"radius":"30px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary-accent","textColor":"background","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignwide has-background-color has-primary-accent-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:var(--wp--preset--spacing--2-xl);padding-right:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl);padding-left:var(--wp--preset--spacing--2-xl)"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|fixed-white"}}},"typography":{"textAlign":"center"}},"textColor":"fixed-white","fontSize":"l"} -->
<h2 class="wp-block-heading has-text-align-center has-fixed-white-color has-text-color has-link-color has-l-font-size" style="margin-bottom:var(--wp--preset--spacing--s)"><?php esc_html_e('Let\'s create something extraordinary', 'amsel');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-additional-color has-text-color has-link-color","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|m"}},"elements":{"link":{"color":{"text":"var:preset|color|additional"}}},"typography":{"textAlign":"center"}},"textColor":"additional","fontSize":"s"} -->
<p class="has-text-align-center has-additional-color has-text-color has-link-color has-s-font-size" style="margin-bottom:var(--wp--preset--spacing--m)"><?php esc_html_e('Whether it\'s a cinematic trailer, a product visualization, or a full animated short — tell us your vision and we\'ll bring it to life in 3D.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"additional","textColor":"primary-accent","style":{"border":{"radius":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-accent-color has-additional-background-color has-text-color has-background wp-element-button" style="border-radius:14px"><?php esc_html_e('Get a free estimate', 'amsel');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->