<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.5.0
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Bristle
# ------------------------------------------------------------------------

$plugin_url = plugin_dir_url( __FILE__ );

$layouts[ 'bristle' ] = array_merge(

	array(

		'name' => __('Bristle', 'fullsingle'), 

		'description' => __('Bristle is a minimal Portfolio layout with a grid of projects that link out. Features include header logo or image, custom navigation and a project grid.', 'fullsingle'),

    	'screenshot' => $plugin_url . 'bristle.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'bristle.json' ), true )

);