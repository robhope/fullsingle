<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.11
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Split
# ------------------------------------------------------------------------

$layouts[ 'split' ] = array_merge(

	array(

		'name' => __('Split', 'fullsingle'), 

		'description' => __('Split is a centrally-divided layout for the modern professional. Features include a big image left (or right) with alongside customizable content.', 'fullsingle'),

		'screenshot' => 'split.jpg',  

	),

	json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'split.json' ), true )

);