<?php
/**
 * @package FullSingle
 * @version 0.0.8
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add Sections
#-------------------------------------------------------------------------------

function fullsingle_customizer_sections ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Section: Documentation
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'fullsingle_customizer_setup_documentation_option', 
	  array(
	    'title'       => 'Documentation 📄',
	    'priority'    => 800,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'fullsingle_panel_setup',
	  )
	);


	#-------------------------------------------------------------------------------
	# Add Section: Support & Pro Version
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'fullsingle_customizer_setup_support_option', 
	  array(
	    'title'       => 'Support & Pro Version 🎉',
	    'priority'    => 900,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'fullsingle_panel_setup',
	  )
	);

}

add_action('customize_register' , 'fullsingle_customizer_sections');

?>