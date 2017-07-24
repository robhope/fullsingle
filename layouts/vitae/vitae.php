<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.1.2
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Vitae
# ------------------------------------------------------------------------

$plugin_url = plugin_dir_url( __FILE__ );

$layouts[ 'vitae' ] = array_merge(

	array(

		'name' => __('Vitae', 'fullsingle'), 

		'description' => __('Vitae is a clean, long-scrolling Curriculum Vitae layout. Features include intro image, biography, work history, networks and contact details.', 'fullsingle'),

		'screenshot' => $plugin_url . 'vitae.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'vitae.json' ), true )

);