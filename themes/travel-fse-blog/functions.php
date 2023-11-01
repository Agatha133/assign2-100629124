<?php

function travel_fse_blog_scripts() {
    // Enqueue parent theme's style
    wp_enqueue_style('travel-fse-blog-parent-style', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'travel_fse_blog_scripts');


function travel_fse_blog_remove_filter_hook() {
    // Get the instance of the parent theme's class
    $parent_instance = travel_fse_theme();

    // Call remove_filter after the filter has been added
    remove_filter( 'post_thumbnail_html', array( $parent_instance, 'fallback_post_thumbnail_html' ), 20, 5 );
}
add_action( 'after_setup_theme', 'travel_fse_blog_remove_filter_hook' );

/**
 * Registers pattern categories.
 *
 * @since travel-fse-blog 1.0.0
 *
 * @return void
 */
function travel_fse_blog_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'travel-fse-blog' => array('label' => __('Travel FSE Blog', 'travel-fse-blog'))
    );

    $block_pattern_categories = apply_filters('travel_fse_blog_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'travel_fse_blog_register_pattern_category', 9);

