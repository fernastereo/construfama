<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage architect-construction
 * @since architect-construction 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since architect-construction 1.0
	 *
	 * @return void
	 */
	function architect_construction_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'architect-construction-border',
				'label' => esc_html__( 'Borders', 'architect-construction' ),
			)
		);

		
	}
	add_action( 'init', 'architect_construction_register_block_styles' );
}