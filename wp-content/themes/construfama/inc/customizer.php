<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage architect-construction
 * @since architect-construction 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function architect_construction_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Architect_Construction_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Architect Construction Pro', 'architect-construction' ),
		'button_text'      => __( 'Upgrade Pro', 'architect-construction' ),
		'url'              => 'https://www.wpradiant.net/blocks/building-contractor-wordpress-theme/',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'architect_construction_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function architect_construction_custom_control_scripts() {
	wp_enqueue_script( 'architect-construction-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'architect_construction_custom_control_scripts' );