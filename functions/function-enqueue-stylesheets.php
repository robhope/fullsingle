<?php

/**
 * @package FullSingle
 * @version 0.0.1
 * @license GPL 2.0
 *
*/

# ------------------------------------------------------------------------
# Enqueue Stylesheets
# ------------------------------------------------------------------------

function fullsingle_load_plugin_styles() {

	if ( is_page_template( 'templates/page-fullsingle.php' ) ) {

	    $plugin_url = plugin_dir_url( __FILE__ );

	    wp_enqueue_style( 'fullsingle-reset', $plugin_url . 'reset/reset.css'     , 10 );
	    wp_enqueue_style( 'fullsingle-style', $plugin_url . 'css/fullsingle.css'  , 20 );

	}

	else {

	};

}

add_action( 'wp_enqueue_scripts', 'fullsingle_load_plugin_styles', 999 );
