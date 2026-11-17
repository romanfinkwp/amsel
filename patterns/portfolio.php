<?php
/**
 * Title: Portfolio
 * Slug: amsel/portfolio
 * Categories: amsel
 * Description: Portfolio section with a featured project and a grid of project cards.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3xl","bottom":"var:preset|spacing|3xl","left":"var:preset|spacing|m","right":"var:preset|spacing|m"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"background","layout":{"type":"constrained"},"anchor":"work"} -->
<div id="work" class="wp-block-group has-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--m)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}},"border":{"radius":"7px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:7px;padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--s)"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-accent"}}}},"textColor":"primary-accent","fontSize":"m"} -->
<h2 class="wp-block-heading has-primary-accent-color has-text-color has-link-color has-m-font-size"><?php esc_html_e('Portfolio', 'amsel');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"s"} -->
<p class="has-secondary-color has-text-color has-s-font-size"><?php esc_html_e('Selected projects from our 3D and animation portfolio', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('View all work', 'amsel');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|m","padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden"},"backgroundColor":"primary-accent","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide has-primary-accent-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:image {"aspectRatio":"21/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/robot-3d-character-1326397.jpg" alt="<?php esc_attr_e('3D Robot Character — Cinematic Game Trailer', 'amsel');?>" style="aspect-ratio:21/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"0","right":"0"},"blockGap":"var:preset|spacing|s"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xs);padding-right:0;padding-bottom:var(--wp--preset--spacing--xs);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"}},"textColor":"primary-accent","fontSize":"xs"} -->
<p class="has-primary-accent-color has-text-color has-xs-font-size" style="font-weight:500"><?php esc_html_e('Featured Project', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|secondary"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"fixed-white","fontSize":"xs"} -->
<p class="has-fixed-white-color has-text-color has-xs-font-size"><?php esc_html_e('Unreal Engine 5', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|secondary"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--secondary);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"fixed-white","fontSize":"xs"} -->
<p class="has-fixed-white-color has-text-color has-xs-font-size"><?php esc_html_e('Character Design', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|fixed-white"}}}},"textColor":"fixed-white","fontSize":"l"} -->
<h3 class="wp-block-heading has-fixed-white-color has-text-color has-link-color has-l-font-size"><?php esc_html_e('Cyber Nexus — Cinematic Game Trailer', 'amsel');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fixed-white","fontSize":"s"} -->
<p class="has-fixed-white-color has-text-color has-s-font-size"><?php esc_html_e('Full CG cinematic for an indie sci-fi RPG. Character modeling, rigging, animation, environment design, VFX simulations, and final compositing — all rendered in real-time with Unreal Engine 5.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|additional"}}}},"textColor":"additional","fontSize":"s"} -->
<p class="has-additional-color has-text-color has-link-color has-s-font-size" style="margin-top:var(--wp--preset--spacing--s)"><?php esc_html_e('View case study →', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|l","top":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m","padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background-contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background-contrast-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/car-3d-render-1166111.jpg" alt="<?php esc_attr_e('3D Product Visualization — Automotive', 'amsel');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|xs"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"primary-accent","fontSize":"xs"} -->
<p class="has-primary-accent-color has-text-color has-xs-font-size"><?php esc_html_e('Product Viz', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|accent-blue"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--accent-blue);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Blender', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h4 class="wp-block-heading has-base-font-size" style="font-weight:600"><?php esc_html_e('Automotive 3D Visualization', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Photorealistic car renders for an automotive brand — studio lighting, material shaders, and turntable animation.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"}}},"fontSize":"s"} -->
<p class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--xs)"><?php esc_html_e('View project →', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m","padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background-contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background-contrast-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/villa-interior-archviz-1294878.jpg" alt="<?php esc_attr_e('Architectural Visualization — Interior CGI', 'amsel');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|xs"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"primary-accent","fontSize":"xs"} -->
<p class="has-primary-accent-color has-text-color has-xs-font-size"><?php esc_html_e('Arch Viz', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|accent-blue"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--accent-blue);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('3ds Max + Corona', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h4 class="wp-block-heading has-base-font-size" style="font-weight:600"><?php esc_html_e('Luxury Villa — Interior CGI', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Architectural visualization for a real estate developer — photorealistic interiors, natural lighting, and material accuracy.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"}}},"fontSize":"s"} -->
<p class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--xs)"><?php esc_html_e('View project →', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m","padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background-contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group has-background-contrast-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/torus-3d-sculpture-374847.jpg" alt="<?php esc_attr_e('Abstract 3D Sculpture — Motion Graphics', 'amsel');?>" style="aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|xs"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"primary-accent","fontSize":"xs"} -->
<p class="has-primary-accent-color has-text-color has-xs-font-size"><?php esc_html_e('Motion Design', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|accent-blue"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--accent-blue);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Houdini', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h4 class="wp-block-heading has-base-font-size" style="font-weight:600"><?php esc_html_e('Abstract Forms — Broadcast Opener', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Procedural 3D sculptures and parametric animation for a TV network broadcast package and ident sequence.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"}}},"fontSize":"s"} -->
<p class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--xs)"><?php esc_html_e('View project →', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|l","top":"var:preset|spacing|l"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m","padding":{"right":"var:preset|spacing|m","left":"var:preset|spacing|m","top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background-contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-background-contrast-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/fluid-art-abstract-1173752.jpg" alt="<?php esc_attr_e('Fluid Simulation — Abstract Art Direction', 'amsel');?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|xs"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"primary-accent","fontSize":"xs"} -->
<p class="has-primary-accent-color has-text-color has-xs-font-size"><?php esc_html_e('VFX', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|accent-blue"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--accent-blue);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Houdini + Nuke', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h4 class="wp-block-heading has-base-font-size" style="font-weight:600"><?php esc_html_e('Fluid Worlds — Music Video VFX', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Fluid simulations, particle systems, and abstract art direction for a music video — blending CG elements with live-action footage.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"}}},"fontSize":"s"} -->
<p class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--xs)"><?php esc_html_e('View project →', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|m","padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"border":{"radius":"30px"},"overflow":"hidden","dimensions":{"minHeight":"100%"}},"backgroundColor":"background-contrast","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-background-contrast-background-color has-background" style="border-radius:30px;min-height:100%;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/villa-pool-exterior-599835.jpg" alt="<?php esc_attr_e('Architectural Visualization — Exterior CGI', 'amsel');?>" style="aspect-ratio:16/9;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|xs"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px"}},"backgroundColor":"additional","layout":{"type":"default"}} -->
<div class="wp-block-group has-additional-background-color has-background" style="border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"primary-accent","fontSize":"xs"} -->
<p class="has-primary-accent-color has-text-color has-xs-font-size"><?php esc_html_e('Arch Viz', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"2px","bottom":"2px","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}},"border":{"radius":"4px","width":"1px","color":"var:preset|color|accent-blue"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:var(--wp--preset--color--accent-blue);border-width:1px;border-radius:4px;padding-top:2px;padding-right:var(--wp--preset--spacing--xs);padding-bottom:2px;padding-left:var(--wp--preset--spacing--xs)"><!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('3ds Max + V-Ray', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"}},"fontSize":"base"} -->
<h4 class="wp-block-heading has-base-font-size" style="font-weight:600"><?php esc_html_e('Coastal Retreat — Exterior Rendering', 'amsel');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"xs"} -->
<p class="has-secondary-color has-text-color has-xs-font-size"><?php esc_html_e('Photorealistic exterior CGI for a luxury real estate project — environment modeling, vegetation, water simulation, and golden-hour lighting.', 'amsel');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs"}}},"fontSize":"s"} -->
<p class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--xs)"><?php esc_html_e('View project →', 'amsel');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->