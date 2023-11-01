<?php
/**
 * Title: Featured Post
 * Slug: travel-fse-blog/featured-post
 * Categories: travel-fse-blog
 *
 * @package Travel Fse Blog
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"className":"featured-post-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group featured-post-section" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"}},"textColor":"light-title-color"} -->
<h2 class="wp-block-heading has-light-title-color-color has-text-color" style="font-size:21px;font-style:normal;font-weight:600"><?php echo esc_html__( 'FEATURED POST', 'travel-fse-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"25px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:query {"queryId":10,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"className":"featured-post-first-content"} -->
<div class="wp-block-query featured-post-first-content"><!-- wp:post-template {"className":"featured-post","layout":{"type":"default","columnCount":3}} -->
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"minHeight":457,"minHeightUnit":"px","style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:10px;min-height:457px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"20px","left":"20px","top":"20px","bottom":"20px"}}},"className":"banner-inner-content fesatured-post-content","layout":{"type":"default"}} -->
<div class="wp-block-group banner-inner-content fesatured-post-content" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-terms {"term":"category","separator":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"27px","fontStyle":"normal","fontWeight":"900","lineHeight":"1.4"}}} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"none"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"border":{"width":"0px","style":"none"}},"className":"all-radius"} -->
<div class="wp-block-column all-radius" style="border-style:none;border-width:0px;flex-basis:33.33%"><!-- wp:query {"queryId":10,"query":{"perPage":"1","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"featured-post","layout":{"type":"default","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"bottomRight":"0px","bottomLeft":"0px","topLeft":"10px","topRight":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"secondary-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"900","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"style":{"typography":{"textTransform":"none"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"className":"all-radius","layout":{"type":"default"}} -->
<div class="wp-block-group all-radius" style="padding-right:0;padding-left:0"><!-- wp:query {"queryId":10,"query":{"perPage":"3","pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"featured-post","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"}},"backgroundColor":"secondary-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"","style":{"typography":{"textDecoration":"none"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"900","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"style":{"typography":{"textTransform":"none"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->