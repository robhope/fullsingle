<?php
/**
 * @package FullSingle
 * @version 0.5.2.1
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add Sections to Panels
#-------------------------------------------------------------------------------

function fullsingle_customizer_sections ( $wp_customize ) {

#-------------------------------------------------------------------------------
# Setup Panel
#-------------------------------------------------------------------------------

	#-------------------------------------------------------------------------------
	# Documentation
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'fullsingle_section_documentation',  
	  array(
	    'title'       => 'Documentation 📄',
	    'priority'    => 800,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'fullsingle_panel_setup',
	  )
	);

	#-------------------------------------------------------------------------------
	# Support & Pro Version
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'fullsingle_section_support', 
	  array(
	    'title'       => 'Support & Pro Version 🎉',
	    'priority'    => 900,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'fullsingle_panel_setup',
	  )
	);

#-------------------------------------------------------------------------------
# Customization Panel
#-------------------------------------------------------------------------------

	$wp_customize->add_section( 'fullsingle_section_bristle'	, array( 'title' => 'Bristle'	, 'priority' => 101,'capability'  => 'edit_theme_options','panel' => 'fullsingle_panel_customization',));
	$wp_customize->add_section( 'fullsingle_section_flyleaf'	, array( 'title' => 'Flyleaf'	, 'priority' => 102,'capability'  => 'edit_theme_options','panel' => 'fullsingle_panel_customization',));
	$wp_customize->add_section( 'fullsingle_section_me'			, array( 'title' => 'Me'		, 'priority' => 103,'capability'  => 'edit_theme_options','panel' => 'fullsingle_panel_customization',));
	$wp_customize->add_section( 'fullsingle_section_split'		, array( 'title' => 'Split'		, 'priority' => 104,'capability'  => 'edit_theme_options','panel' => 'fullsingle_panel_customization',));
	$wp_customize->add_section( 'fullsingle_section_vitae'		, array( 'title' => 'Vitae'		, 'priority' => 105,'capability'  => 'edit_theme_options','panel' => 'fullsingle_panel_customization',));

}

add_action('customize_register' , 'fullsingle_customizer_sections');