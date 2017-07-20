<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.10
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Me
# ------------------------------------------------------------------------

$layouts[ 'me' ] = array_merge(

	array(

		'name' => __('Me', 'fullsingle'), 

    	'description' => __('Me is a slick, personal One Page layout for any individual and features a big background image.', 'fullsingle'),
    	
    	'screenshot' => 'https://demo.onepagelove.com/fullsingle/wp-content/uploads/sites/4/2017/07/me.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'me.json' ), true )

);