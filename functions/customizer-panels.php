<?php
/**
 * @package FullSingle
 * @version 0.0.8
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add and remove Panels 
#-------------------------------------------------------------------------------

function fullsingle_customizer_panels ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Panel: fullsingle Setup
	#-------------------------------------------------------------------------------

	$wp_customize->add_panel( 'fullsingle_panel_setup', array(
		'priority'       => 999,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => 'FullSingle',
		'description'    => 'FullSingle Options and Documentation',
	));  

}

add_action('customize_register' , 'fullsingle_customizer_panels');


?>