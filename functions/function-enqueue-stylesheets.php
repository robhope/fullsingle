<?php

/**
 * @package FullSingle
 * @version 0.1.5
 * @license GPL 2.0
 *
*/

# ------------------------------------------------------------------------
# Enqueue Stylesheets
# ------------------------------------------------------------------------

function fullsingle_load_plugin_styles() {

	$layout_dir = plugin_dir_url( __FILE__ ) . '../layouts/';

	if  ( is_page_template( 'templates/page-fullsingle-me.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $layout_dir . 'me/me.css'  	 	, 10 );

	}

	elseif  ( is_page_template( 'templates/page-fullsingle-split.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $layout_dir . 'split/split.css'  	, 10 );

	}

	elseif  ( is_page_template( 'templates/page-fullsingle-vitae.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $layout_dir . 'vitae/vitae.css'  	, 10 );

	};

}

add_action( 'wp_enqueue_scripts', 'fullsingle_load_plugin_styles', 999 );
