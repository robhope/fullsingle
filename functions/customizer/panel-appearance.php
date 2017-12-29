<?php
/**
 *
 * @package FullSingle
 * @version 0.5.4
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Appearance Controls
#-------------------------------------------------------------------------------

function fullsingle_customizer_setup_appearance_controls( $wp_customize ) {

	$appearance_dir = plugin_dir_path( __FILE__ ) . '../customizer/appearance';

	require_once( $appearance_dir . '/bristle/controls.php' ); 
	require_once( $appearance_dir . '/flyleaf/controls.php' ); 	
	require_once( $appearance_dir . '/me/controls.php' ); 
	require_once( $appearance_dir . '/split/controls.php' ); 	
	require_once( $appearance_dir . '/vitae/controls.php' ); 

}

add_action('customize_register' , 'fullsingle_customizer_setup_appearance_controls');

#-------------------------------------------------------------------------------
# Customizer: Add Styles to head
#-------------------------------------------------------------------------------  

function fullsingle_add_customizer_styles_to_head() {

	// Get name of page template
    $template_url 	= get_page_template_slug(); 
    $template_name 	= substr($template_url, 26, -4);

	// Set directory of Layout customizer styles
	$appearance_dir = plugin_dir_path( __FILE__ ) . '../customizer/appearance';

	if 		( is_page_template( "page-template-page-fullsingle-bristle" ) ) { include( $appearance_dir . '/bristle/styles.php' 	); }
	elseif 	( is_page_template( "page-template-page-fullsingle-flyleaf" ) ) { include( $appearance_dir . '/flyleaf/styles.php' 	); }
	elseif 	( is_page_template( "page-template-page-fullsingle-me" 		) ) { include( $appearance_dir . '/me/styles.php' 		); }
	elseif 	( is_page_template( "page-template-page-fullsingle-split" 	) ) { include( $appearance_dir . '/split/styles.php' 	); }
	elseif 	( is_page_template( "page-template-page-fullsingle-vitae" 	) ) { include( $appearance_dir . '/vitae/styles.php' 	); };			
}

add_action('wp_head', 'fullsingle_add_customizer_styles_to_head', 11);