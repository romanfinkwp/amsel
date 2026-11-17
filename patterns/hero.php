<?php
/**
 * Title: Hero
 * Slug: amsel/hero
 * Categories: amsel
 * Description: Hero section with headline, intro, key stats and call-to-action buttons next to an image.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"overflow":"hidden"},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--m)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xl"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.2","fontSize":"3.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} -->
<h1 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--s);font-size:3.5rem;line-height:1.2"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */
echo sprintf( esc_html__( 'Bringing ideas%1$sto life through%2$s3D and motion', 'amsel' ), '<br>', '<br>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|m"}}},"textColor":"secondary","fontSize":"base"} -->
<p class="has-secondary-color has-text-color has-base-font-size" style="margin-bottom:var(--wp--preset--spacing--m)"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */
echo sprintf( esc_html__( 'We are a 3D design and animation studio creating %1$sstunning visuals, characters, environments, %2$sand motion graphics for brands and entertainment.', 'amsel' ), '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|l","margin":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|l"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--m);margin-bottom:var(--wp--preset--spacing--l)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontStyle":"normal"}},"fontSize":"m"} -->
<p class="has-m-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('200+', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Projects Rendered', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontStyle":"normal"}},"fontSize":"m"} -->
<p class="has-m-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('30+', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('3D Artists on Team', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontStyle":"normal"}},"fontSize":"m"} -->
<p class="has-m-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('10+', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Years in CG Industry', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|m"}}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary-accent","textColor":"fixed-white","style":{"border":{"radius":"14px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-fixed-white-color has-primary-accent-background-color has-text-color has-background wp-element-button" style="border-radius:14px"><?php esc_html_e('Start your project', 'amsel');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"background","textColor":"primary","className":"is-style-fill","style":{"border":{"radius":"14px","width":"1px"}},"borderColor":"primary"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background has-border-color has-primary-border-color wp-element-button" style="border-width:1px;border-radius:14px"><?php esc_html_e('Call Us', 'amsel');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-accent-waves","style":{"border":{"radius":"14px"}}} -->
<figure class="wp-block-image size-large has-custom-border is-style-accent-waves"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/presentation-marketing-meeting-business-agency-strategy-1702764-pxhere.com_-1024x683.jpg" alt="" style="border-radius:14px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->