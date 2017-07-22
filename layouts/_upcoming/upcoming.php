<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.11
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Me
# ------------------------------------------------------------------------

$layouts[ 'upcoming' ] = array_merge(

	array(

		'name' => __('More layouts soon...', 'fullsingle'), 

    	'description' => __('FullSingle launched light with these 3 free layouts. The plan is to launch a new layout per week based on feedback - so please let keep sending! Cheers, Rob (@robhope)', 'fullsingle'),
    	
    	'screenshot' => 'https://s3.amazonaws.com/fullsingle/_upcoming.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'upcoming.json' ), true )

);