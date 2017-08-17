<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.4.1.1
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Flyleaf
# ------------------------------------------------------------------------

$plugin_url = plugin_dir_url( __FILE__ );

$layouts[ 'flyleaf' ] = array_merge(

	array(

		'name' => __('Flyleaf', 'fullsingle'), 

		'description' => __('Flyleaf is a long-scrolling Landing Page layout for promoting your eBook. Features include cover, testimonials, author info and whats inside.', 'fullsingle'),

    	'screenshot' => $plugin_url . 'flyleaf.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'flyleaf.json' ), true )

);