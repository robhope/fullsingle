<?php

/**
 * @package FullSingle
 * @version 0.0.3
 * @license GPL 2.0
 *
*/

# ------------------------------------------------------------------------
# Enqueue Stylesheets
# ------------------------------------------------------------------------

function fullsingle_load_plugin_styles() {

	$plugin_url = plugin_dir_url( __FILE__ );

	if ( is_page_template( 'templates/page-fullsingle-grid.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $plugin_url . '../layouts/grid/grid.css'  	, 10 );

	}

	elseif  ( is_page_template( 'templates/page-fullsingle-me.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $plugin_url . '../layouts/me/me.css'  	 	, 10 );

	}

	elseif  ( is_page_template( 'templates/page-fullsingle-split.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $plugin_url . '../layouts/split/split.css'  	, 10 );

	}

	elseif  ( is_page_template( 'templates/page-fullsingle-vitae.php' ) ) {

	    wp_enqueue_style( 'fullsingle-style', $plugin_url . '../layouts/vitae/vitae.css'  	, 10 );

	};

}

add_action( 'wp_enqueue_scripts', 'fullsingle_load_plugin_styles', 999 );
