<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.1.4
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Upcoming notice
# ------------------------------------------------------------------------

$plugin_url = plugin_dir_url( __FILE__ );

$layouts[ 'upcoming' ] = array_merge(

	array(

		'name' => __('More layouts soon...', 'fullsingle'), 

    	'description' => __('FullSingle launched light with these 3 free layouts. The plan is to launch a new layout per week based on feedback - so please keep sending! Cheers, Rob (@robhope)', 'fullsingle'),
    	
    	'screenshot' => $plugin_url . 'upcoming.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'upcoming.json' ), true )

);