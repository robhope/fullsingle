<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add and remove Panels 
#-------------------------------------------------------------------------------

function fullsingle_customizer_panels ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Panel: FullSingle Setup
	#-------------------------------------------------------------------------------

	$wp_customize->add_panel( 'fullsingle_panel_setup', array(
		'priority'       => 998,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => '🛠 FullSingle: Setup',
		'description'    => 'FullSingle Options and Documentation',
	));  

	#-------------------------------------------------------------------------------
	# Add Panel: FullSingle Customization
	#-------------------------------------------------------------------------------

	$wp_customize->add_panel( 'fullsingle_panel_customization', array(
		'priority'       => 999,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => '🖌 FullSingle: Customization',
		'description'    => 'FullSingle Customization',
	));  

}

add_action('customize_register' , 'fullsingle_customizer_panels');