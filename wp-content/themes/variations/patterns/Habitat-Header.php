<?php
/**
 * Title: Habitat Header
 * Slug: variations/habitat-header
 * Description: Header with site title, navigation
 * Categories: header
 * Keywords: header, nav, site title
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"40px","top":"40px","left":"1rem","right":"1rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"position":{"type":"sticky","top":"0px"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","contentSize":"1300px","wideSize":"1300px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:1rem;padding-bottom:40px;padding-left:1rem"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"0px","left":"0px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:image {"id":817,"width":"30px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#fffef7","#fffef7"]}},"className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/headers-footers/house-habitat.png" alt="" class="wp-image-817" style="width:30px"/></figure>
<!-- /wp:image -->

<!-- wp:site-title {"level":2,"style":{"color":{"text":"#fffffd"},"typography":{"fontSize":"20px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:70%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"customTextColor":"#fffef7","style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"20px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->