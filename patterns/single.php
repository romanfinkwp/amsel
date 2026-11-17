<?php
/**
 * Title: single
 * Slug: amsel/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|2xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|s","right":"var:preset|spacing|s"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":""}} -->
<main class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--2-xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--2-xl);padding-left:var(--wp--preset--spacing--s)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s","margin":{"bottom":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--m)"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"xs"} /-->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('·', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"secondary","fontSize":"xs"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}},"typography":{"lineHeight":"1.2"}},"fontSize":"xxl"} /-->

<!-- wp:post-featured-image {"style":{"border":{"radius":"14px"},"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}}} /-->

<!-- wp:post-content /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l"},"margin":{"top":"var:preset|spacing|l"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;margin-top:var(--wp--preset--spacing--l);padding-top:var(--wp--preset--spacing--l)"><!-- wp:post-terms {"term":"tag","textColor":"secondary","fontSize":"xs"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"className":"amsel-related-posts","style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|s","right":"var:preset|spacing|s"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background-contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group amsel-related-posts has-background-contrast-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--s)"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m","margin":{"bottom":"var:preset|spacing|m"}}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--m)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}},"border":{"radius":"7px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:7px;padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--s)"><!-- wp:heading {"fontSize":"m"} -->
<h2 class="wp-block-heading has-m-font-size"><?php esc_html_e('Related Posts', 'amsel');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"border":{"radius":"14px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s"},"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s)"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}},"textColor":"secondary","fontSize":"xs"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"secondary","fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|2xl","left":"var:preset|spacing|s","right":"var:preset|spacing|s"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--2-xl);padding-left:var(--wp--preset--spacing--s)"><!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|l"}}},"fontSize":"l"} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s","margin":{"bottom":"var:preset|spacing|m"},"padding":{"bottom":"var:preset|spacing|m"}},"border":{"bottom":{"color":"var:preset|color|accent-blue","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--accent-blue);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"50%"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"typography":{"fontWeight":"600"}},"fontSize":"s"} /-->

<!-- wp:comment-date {"textColor":"secondary","fontSize":"xs"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"s"} /-->

<!-- wp:comment-reply-link {"fontSize":"xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->