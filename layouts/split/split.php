<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.10
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Split
# ------------------------------------------------------------------------

$layouts[ 'split' ] = array_merge(

  array(

    'name' => __('Split', 'fullsingle'), 

      'description' => __('Split is a centrally-divided layout for a professional online presense with a big image image left with alongside content.', 'fullsingle'),
      
      'screenshot' => 'https://demo.onepagelove.com/fullsingle/wp-content/uploads/sites/4/2017/07/split.jpg',  

  ),

  json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'split.json' ), true )

);