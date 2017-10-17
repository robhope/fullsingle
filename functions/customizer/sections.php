<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
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
	    'title'       => '📄 Documentation',
	    'priority'    => 801,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'fullsingle_panel_setup',
	  )
	);

	#-------------------------------------------------------------------------------
	# Downloads
	#-------------------------------------------------------------------------------

	$wp_customize->add_section( 
	  'fullsingle_section_downloads', 
	  array(
	    'title'       => '🎁 Bonus Downloads',
	    'priority'    => 802,
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
	    'title'       => '👨‍🔧 Support & Pro Version',
	    'priority'    => 803,
	    'capability'  => 'edit_theme_options',
	    'panel'       => 'fullsingle_panel_setup',
	  )
	);

#-------------------------------------------------------------------------------
# Customization Panel
#-------------------------------------------------------------------------------

	$wp_customize->add_section( 'fullsingle_section_bristle'	, array( 
		'title' 		=> '🎨 Bristle', 
		'description'   => 'Bristle is a minimal Portfolio layout with a grid of projects that link out.', 
		'priority' 		=> 101,
		'capability'  	=> 'edit_theme_options',
		'panel' 		=> 'fullsingle_panel_customization',
	));

	$wp_customize->add_section( 'fullsingle_section_flyleaf'	, array( 
		'title' 		=> '📕 Flyleaf', 
		'description'   => 'Flyleaf is a long-scrolling Landing Page layout for promoting your eBook. Features include cover, testimonials, author info and whats inside.', 		
		'priority' 		=> 102,
		'capability'  	=> 'edit_theme_options',
		'panel' 		=> 'fullsingle_panel_customization',
	));

	$wp_customize->add_section( 'fullsingle_section_me'			, array( 
		'title' 		=> '🙋‍♂️ Me', 
		'description'   => 'Me is a minimal, personal One Page layout for any individual and features a big background image.', 		
		'priority' 		=> 103,
		'capability'  	=> 'edit_theme_options',
		'panel' 		=> 'fullsingle_panel_customization',
	));

	$wp_customize->add_section( 'fullsingle_section_split'		, array( 
		'title' 		=> '💁 Split', 
		'description'   => 'Split is a centrally-divided layout for a professional online presence with a big image left with alongside content.', 		
		'priority' 		=> 104,
		'capability'  	=> 'edit_theme_options',
		'panel' 		=> 'fullsingle_panel_customization',
	));

	$wp_customize->add_section( 'fullsingle_section_vitae'		, array( 
		'title' 		=> '📄 Vitae', 
		'description'   => 'Vitae is a clean, long-scrolling Curriculum Vitae layout. Features include intro image, biography, work history, networks and contact details.', 		
		'priority' 		=> 105,
		'capability'  	=> 'edit_theme_options',
		'panel' 		=> 'fullsingle_panel_customization',
	));

}

add_action('customize_register' , 'fullsingle_customizer_sections');