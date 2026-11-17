<?php
/**
 * Title: Blog Posts
 * Slug: amsel/blog
 * Categories: amsel
 * Description: Latest blog posts section with a heading and a three-column query loop.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-contrast-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--m)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|xl"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}},"border":{"radius":"7px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:7px;padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--s)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-accent"}}}},"textColor":"primary-accent","fontSize":"m"} -->
<h2 class="wp-block-heading has-primary-accent-color has-text-color has-link-color has-m-font-size"><?php esc_html_e('Latest from Blog', 'amsel');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"s"} -->
<p class="has-secondary-color has-text-color has-s-font-size"><?php esc_html_e('Behind the scenes, tutorials, and industry insights from our artists', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('View all posts', 'amsel');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|s"},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"100%","height":"100%","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"0px","bottomRight":"0px"}},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|l","right":"var:preset|spacing|l","top":"var:preset|spacing|l","bottom":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"secondary","fontSize":"xs"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"m"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":18,"textColor":"secondary","fontSize":"s"} /-->

<!-- wp:read-more {"content":"<?php esc_attr_e('Read more →', 'amsel');?>","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"var:preset|spacing|m"}}},"textColor":"primary","fontSize":"s"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"className":"has-secondary-color has-text-color","style":{"typography":{"textAlign":"center"}},"textColor":"secondary","fontSize":"s"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-s-font-size"><?php esc_html_e('No posts found yet. Check back soon!', 'amsel');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->