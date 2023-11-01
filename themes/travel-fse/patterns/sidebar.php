<?php
/**
 * Title: Sidebar
 * Slug: travel-fse/sidebar
 * Categories: travel-fse
 *
 * @package Travel Fse
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"var:preset|spacing|60"}}},"className":"sidebar-item","layout":{"type":"default"}} -->
<div class="wp-block-group sidebar-item" style="margin-top:var(--wp--preset--spacing--60);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"25px"},"blockGap":"0","margin":{"top":"20px","bottom":"20px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:20px;margin-bottom:20px;padding-right:0;padding-left:25px"><!-- wp:heading {"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600","lineHeight":"1"}},"className":"categories-heading"} -->
<h2 class="wp-block-heading categories-heading" style="font-size:21px;font-style:normal;font-weight:600;line-height:1"><?php echo esc_html__( 'Categories', 'travel-fse' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:categories {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"35px"}}},"className":"sidebar-item","layout":{"type":"default"}} -->
<div class="wp-block-group sidebar-item" style="margin-top:35px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"25px"},"margin":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:40px;margin-bottom:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:25px"><!-- wp:heading {"style":{"typography":{"fontSize":"21px","fontStyle":"normal","fontWeight":"600","lineHeight":"1"}}} -->
<h2 class="wp-block-heading" style="font-size:21px;font-style:normal;font-weight:600;line-height:1"><?php echo esc_html__( 'Top Posts', 'travel-fse' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"postsToShow":3,"excerptLength":48,"featuredImageAlign":"center","featuredImageSizeSlug":"large","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.9"},"spacing":{"margin":{"top":"var:preset|spacing|50","right":"0"}}},"className":"latest-posts","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"35px"}}},"className":"sidebar-item","layout":{"type":"default"}} -->
<div class="wp-block-group sidebar-item" style="margin-top:35px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"25px"},"margin":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:40px;margin-bottom:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:25px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1","fontSize":"21px"}}} -->
<h2 class="wp-block-heading" style="font-size:21px;font-style:normal;font-weight:600;line-height:1"><?php echo esc_html__( 'Follow Us', 'travel-fse' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:social-links {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links is-style-logos-only" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->
<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->
<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->
<!-- wp:social-link {"url":"linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"35px","bottom":"35px"}}},"className":"sidebar-item","layout":{"type":"default"}} -->
<div class="wp-block-group sidebar-item" style="margin-top:35px;margin-bottom:35px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"25px"},"margin":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:40px;margin-bottom:40px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:25px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1","fontSize":"21px"}}} -->
<h2 class="wp-block-heading" style="font-size:21px;font-style:normal;font-weight:600;line-height:1"><?php echo esc_html__( 'Popular Tags', 'travel-fse' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:post-terms {"term":"post_tag","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->