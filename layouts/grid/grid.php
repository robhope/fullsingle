<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.10
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Grid
# ------------------------------------------------------------------------

$layouts[ 'grid' ] = array_merge(

  array(

    'name' => __('Grid', 'fullsingle'), 

      'description' => __('Coming Soon.', 'fullsingle'),
      
      'screenshot' => 'https://demo.onepagelove.com/fullsingle/wp-content/uploads/sites/4/2017/07/blank.jpg',  

  ),

  json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'grid.json' ), true )

);