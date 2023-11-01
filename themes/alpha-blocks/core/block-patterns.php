<?php
/**
 * Alpha Blocks: Block Patterns
 *
 * @since Alpha Blocks 1.0
 */

function alpha_blocks_register_block_patterns() {

	$patterns = array();

	$block_pattern_categories = array(
		'alpha-blocks' => array( 'label' => __( 'Alpha Blocks', 'alpha-blocks' ) )
	);
	$block_pattern_categories = apply_filters( 'alpha_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'alpha_blocks_register_block_patterns', 9 );