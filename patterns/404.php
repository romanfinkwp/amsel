<?php
/**
 * Title: 404
 * Slug: amsel/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|4xl","bottom":"var:preset|spacing|4xl","left":"var:preset|spacing|s","right":"var:preset|spacing|s"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-contrast","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-background-contrast-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--4-xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--4-xl);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s"}},"typography":{"lineHeight":"1.1"}},"fontSize":"xxxl"} -->
<h1 class="wp-block-heading has-text-align-center has-xxxl-font-size" style="margin-bottom:var(--wp--preset--spacing--s);line-height:1.1"><?php esc_html_e('404', 'amsel');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}},"textColor":"secondary","fontSize":"base"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-base-font-size" style="margin-bottom:var(--wp--preset--spacing--l)"><?php esc_html_e('The page you\'re looking for doesn\'t exist or has been moved.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-accent","textColor":"fixed-white","style":{"border":{"radius":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-fixed-white-color has-primary-accent-background-color has-text-color has-background wp-element-button" href="/" style="border-radius:14px"><?php esc_html_e('Back to home', 'amsel');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->