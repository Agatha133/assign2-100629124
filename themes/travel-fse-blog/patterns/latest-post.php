<?php
/**
 * Title: Latest Post
 * Slug: travel-fse-blog/latest-post
 * Categories: travel-fse-blog
 *
 * @package Travel Fse Blog
 * @since 1.0.0
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"}}},"backgroundColor":"secondary-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","left":"0","bottom":"0"},"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"className":"latest-post-section","layout":{"type":"default"}} -->
<div class="wp-block-group latest-post-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"}},"textColor":"light-title-color","className":"black-line"} -->
<h2 class="wp-block-heading black-line has-light-title-color-color has-text-color" style="font-size:21px;font-style:normal;font-weight:600"><?php echo esc_html__( 'LATEST POST', 'travel-fse-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"cyan-bluish-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":40,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center","className":"hover-up"} -->
<div class="wp-block-columns are-vertically-aligned-center hover-up"><!-- wp:column {"verticalAlignment":"center","width":"37%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:37%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":146,"minHeightUnit":"px","isDark":false,"style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:10px;min-height:146px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"63%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:63%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"","fontSize":"extra-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"900","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-date {"style":{"typography":{"textTransform":"none"}},"fontSize":"extra-small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false} -->
<!-- wp:query-pagination-previous {"label":""} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"featured-post-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group featured-post-section"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"21px"}},"textColor":"light-title-color","className":"black-line"} -->
<h2 class="wp-block-heading black-line has-light-title-color-color has-text-color" style="font-size:21px;font-style:normal;font-weight:600"><?php echo esc_html__( 'RECENT POST', 'travel-fse-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"cyan-bluish-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":57,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"0"},"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"10px"}},"backgroundColor":"tertiary-background"} -->
<div class="wp-block-columns are-vertically-aligned-center has-tertiary-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:column {"verticalAlignment":"center","width":"65%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:65%"><!-- wp:post-title {"isLink":true,"style":{"typography":{"letterSpacing":"0.5px","fontSize":"16px"},"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontSize":"14px","textTransform":"none"}}} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"none","fontSize":"14px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":97,"minHeightUnit":"px","isDark":false,"style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:10px;min-height:97px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"600"}},"textColor":"light-title-color","className":"black-line"} -->
<h2 class="wp-block-heading black-line has-light-title-color-color has-text-color" style="font-size:16px;font-style:normal;font-weight:600"><?php echo esc_html__( 'RECENT COMMENT', 'travel-fse-blog' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"cyan-bluish-gray","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}}},"textColor":"light-title-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-light-title-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:latest-comments {"commentsToShow":2,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->