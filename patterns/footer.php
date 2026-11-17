<?php
/**
 * Title: footer
 * Slug: amsel/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"patternName":"amsel/footer","name":"footer"},"className":"amsel-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","right":"var:preset|spacing|m","left":"var:preset|spacing|m"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"primary-accent","layout":{"type":"constrained"}} -->
<div class="wp-block-group amsel-footer has-primary-accent-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"38%"} -->
<div class="wp-block-column" style="flex-basis:38%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|fixed-white"},":hover":{"color":{"text":"var:preset|color|additional"}}}}},"textColor":"background"} /-->

<!-- wp:paragraph {"textColor":"fixed-white","fontSize":"s"} -->
<p class="has-fixed-white-color has-text-color has-s-font-size"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'We are a 3D design and animation studio creating%1$sstunning visuals, characters, environments,%2$sand motion graphics for brands and entertainment.', 'amsel' ), '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"fixed-white","fontSize":"s"} -->
<h4 class="wp-block-heading has-fixed-white-color has-text-color has-s-font-size"><?php esc_html_e('Navigation', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}},"typography":{"textDecoration":"underline"}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size" style="text-decoration:underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sAbout us%2$s', 'amsel' ), '<a href="' . esc_url( '#about' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}},"typography":{"textDecoration":"underline"}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size" style="text-decoration:underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sServices%2$s', 'amsel' ), '<a href="' . esc_url( '#services' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}},"typography":{"textDecoration":"underline"}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size" style="text-decoration:underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sCase Studies%2$s', 'amsel' ), '<a href="' . esc_url( '#work' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}},"typography":{"textDecoration":"underline"}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size" style="text-decoration:underline"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sContact%2$s', 'amsel' ), '<a href="' . esc_url( '#contact' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"fixed-white","fontSize":"s"} -->
<h4 class="wp-block-heading has-fixed-white-color has-text-color has-s-font-size"><?php esc_html_e('Contact', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-s-font-size"><?php esc_html_e('1234 Main St, Suite 100', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-s-font-size"><?php esc_html_e('New York, NY 10001', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sinfo@example.com%2$s', 'amsel' ), '<a href="' . esc_url( 'mailto:info@example.com' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"textColor":"fixed-white","fontSize":"s"} -->
<h4 class="wp-block-heading has-fixed-white-color has-text-color has-s-font-size"><?php esc_html_e('Follow us', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size"><?php esc_html_e('LinkedIn', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size"><?php esc_html_e('Twitter', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|additional"}}}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size"><?php esc_html_e('Instagram', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"align":"wide","className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|l"}}},"backgroundColor":"primary-accent"} -->
<hr class="wp-block-separator alignwide has-text-color has-primary-accent-color has-alpha-channel-opacity has-primary-accent-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--xl);margin-bottom:var(--wp--preset--spacing--l)"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Amsel theme by %1$sFink Themes%2$s', 'amsel' ), '<a href="' . esc_url( 'https://wordpress.org/themes/amsel/' ) . '" target="_blank" rel="noreferrer noopener">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Powered by %1$sWordPress%2$s', 'amsel' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" target="_blank" rel="noreferrer noopener nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->