<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.1.2
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Me
# ------------------------------------------------------------------------

$plugin_url = plugin_dir_url( __FILE__ );

$layouts[ 'me' ] = array_merge(

	array(

		'name' => __('Me', 'fullsingle'), 

    	'description' => __('Me is a slick, personal layout for any individual wanting a minimal online presence. Features include a big background image, logo,  bio and icons.', 'fullsingle'),
    	
    	'screenshot' => $plugin_url . 'me.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'me.json' ), true )

);