<?php
 /**
  * Title: Home
  * Slug: alpha-blocks/home
  * Categories: alpha-blocks
  */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/images/banner.png' ); ?>","id":17,"dimRatio":0,"minHeight":600,"minHeightUnit":"px","isDark":false,"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover is-light" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-17" alt="" src="<?php echo get_parent_theme_file_uri( '/images/banner.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%","style":{"color":{"background":"#212121d6"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column has-background" style="background-color:#212121d6;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);flex-basis:55%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"50px"}},"fontFamily":"lustria"} -->
<h2 class="wp-block-heading has-lustria-font-family" style="font-size:50px;font-style:normal;font-weight:400"><?php esc_html_e('A Backpackers Guides','alpha-blocks'); ?><br><?php esc_html_e('See The World on a','alpha-blocks'); ?><br><?php esc_html_e('Shoestring','alpha-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"fontFamily":"lato"} -->
<div class="wp-block-button has-lato-font-family"><a class="wp-block-button__link wp-element-button"><strong><?php esc_html_e('READ MORE','alpha-blocks'); ?></strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"45px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"lustria"} -->
<h2 class="wp-block-heading has-text-align-center has-lustria-font-family" style="font-size:45px;font-style:normal;font-weight:500"><?php esc_html_e('Blog Category','alpha-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/images/categorya.png' ); ?>","id":37,"dimRatio":50,"overlayColor":"foreground","minHeight":300,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-37" alt="" src="<?php echo get_parent_theme_file_uri( '/images/categorya.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"lustria"} -->
<h2 class="wp-block-heading has-text-align-center has-lustria-font-family" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('Photography','alpha-blocks'); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/images/categoryb.png' ); ?>","id":39,"dimRatio":50,"overlayColor":"foreground","minHeight":300,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-39" alt="" src="<?php echo get_parent_theme_file_uri( '/images/categoryb.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"lustria"} -->
<h2 class="wp-block-heading has-text-align-center has-lustria-font-family" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('Delicious Food','alpha-blocks'); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/images/categoryc.png' ); ?>","id":38,"dimRatio":50,"overlayColor":"foreground","minHeight":300,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-38" alt="" src="<?php echo get_parent_theme_file_uri( '/images/categoryc.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"lustria"} -->
<h2 class="wp-block-heading has-text-align-center has-lustria-font-family" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('Fashion','alpha-blocks'); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo get_parent_theme_file_uri( '/images/categoryd.png' ); ?>","id":40,"dimRatio":50,"overlayColor":"foreground","minHeight":300,"isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-40" alt="" src="<?php echo get_parent_theme_file_uri( '/images/categoryd.png' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"lustria"} -->
<h2 class="wp-block-heading has-text-align-center has-lustria-font-family" style="font-size:30px;font-style:normal;font-weight:500"><?php esc_html_e('Travel','alpha-blocks'); ?></h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":1,"query":{"perPage":"4","pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","className":"grid-layout","layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-shadow-dark  animated animated-fadeInUp","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-shadow-dark animated animated-fadeInUp" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background"} -->
<div class="wp-block-group alignwide has-background-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"section-title","fontFamily":"lustria"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showBio":false} /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"Continue Reading →\u003ca role=\u0022textbox\u0022 aria-multiline=\u0022true\u0022 aria-label=\u0022\u0026quot;Read more\u0026quot; link text\u0022 class=\u0022block-editor-rich-text__editable wp-block-post-excerpt__more-link rich-text\u0022 style=\u0022font-size: revert; font-family: var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dpoppins); min-width: 1px; display: inline !important;\u0022\u003e\u003c/a\u003e","showMoreOnNewLine":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"className":"btn btn-primary","fontFamily":"lato"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:template-part {"slug":"sidebar","theme":"alpha-blocks","area":"uncategorized","className":"sticky-sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->