<?php
/**
 * Title: Stream Header
 * Slug: variations/stream-header
 * Description: Header with site logo, site title and navigation
 * Categories: header
 * Keywords: header, nav, site title
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"25px","top":"25px","left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"position":{"type":"sticky","top":"0px"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"1200px","wideSize":"1200px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:25px;padding-right:1rem;padding-bottom:25px;padding-left:1rem"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":1117,"width":"55px","aspectRatio":"1","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/headers-footers/voice-recording-stream.png" alt="" class="wp-image-1117" style="aspect-ratio:1;width:55px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"level":2,"style":{"color":{"text":"#fffffd"},"typography":{"fontSize":"18px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"textColor":"white","icon":"menu","overlayTextColor":"black","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"fontSize":"16px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->