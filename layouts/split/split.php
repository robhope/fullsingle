<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.1.2
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Split
# ------------------------------------------------------------------------

$plugin_url = plugin_dir_url( __FILE__ );

$layouts[ 'split' ] = array_merge(

	array(

		'name' => __('Split', 'fullsingle'), 

		'description' => __('Split is a centrally-divided layout for the modern professional. Features include a big image left (or right) with alongside customizable content.', 'fullsingle'),

    	'screenshot' => $plugin_url . 'split.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'split.json' ), true )

);