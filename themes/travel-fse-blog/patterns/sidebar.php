<?php
/**
 * Title: Blog Sidebar
 * Slug: travel-fse-blog/sidebar
 * Categories: travel-fse-blog
 *
 * @package Travel Fse Blog
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"featured-post-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group featured-post-section"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"10px"}},"backgroundColor":"tertiary-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:avatar {"size":50,"align":"center"} /-->

<!-- wp:post-author-name {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"textColor":"light-title-color"} /-->

<!-- wp:paragraph {"textColor":"light-title-color"} -->
<p class="has-light-title-color-color has-text-color"><?php echo esc_html__( 'Hi, I’m Steven, a Florida native, who left my career in corporate wealth management six years ago to embark on a summer of soul searching that would change the course of my life forever.', 'travel-fse-blog' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"25px"} -->
<div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"featured-post-section","layout":{"type":"constrained"}} -->
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
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:65%"><!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}},"typography":{"fontSize":"16px","letterSpacing":"0.5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontSize":"12px","textTransform":"none"}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"12px","textTransform":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"35%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:35%"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":97,"minHeightUnit":"px","style":{"border":{"radius":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:10px;min-height:97px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"></div></div>
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

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|light-title-color"}}}},"textColor":"light-title-color","className":"latest-post-sidebar","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-post-sidebar has-light-title-color-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:latest-comments {"commentsToShow":2,"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->