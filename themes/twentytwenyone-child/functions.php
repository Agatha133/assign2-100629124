<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One-Child 1.0
 */

function twentytwentyonechild_wp_enqueue_styles() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() .'/assets/css/main.css', array( 'twenty-twenty-one-style', 'twenty-twenty-one-print-style', 'bootstrap' ), wp_get_theme()->get( 'Version' )	);
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() .'/assets/css/vendor/bootstrap.css', array( ), '5.3.2' );

}

add_action( 'wp_enqueue_scripts', 'twentytwentyonechild_wp_enqueue_styles' );
