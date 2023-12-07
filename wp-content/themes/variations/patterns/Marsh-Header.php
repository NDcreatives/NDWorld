<?php
/**
 * Title: Marsh Header
 * Slug: variations/marsh-header
 * Description: Header with site title and navigation
 * Categories: header
 * Keywords: header, nav, site title
 * Block Types: core/template-part/header
 */

?>
<!-- wp:group {"style":{"position":{"type":""},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#12418d","text":"#f9f7f0"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-text-color has-background" style="color:#f9f7f0;background-color:#12418d;margin-top:0;margin-bottom:0;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"12px"}},"layout":{"selfStretch":"fixed","flexSize":"300px"}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"50px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50px"><!-- wp:image {"id":1656,"sizeSlug":"full","linkDestination":"custom","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/headers-footers/marsh-logo.png" alt="" class="wp-image-1656"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title {"style":{"typography":{"fontSize":"21px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700"}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:navigation {"customTextColor":"#f9f7f0","layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->