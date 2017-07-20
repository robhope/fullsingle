<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.10
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Vitae
# ------------------------------------------------------------------------

$layouts[ 'vitae' ] = array_merge(

  array(

    'name' => __('Vitae', 'fullsingle'), 

      'description' => __('Vitae is a minimal Curriculum Vitae layout featuring about, work history, networks and contact details.', 'fullsingle'),
      
      'screenshot' => 'https://demo.onepagelove.com/fullsingle/wp-content/uploads/sites/4/2017/07/vitae.jpg',  

  ),

  json_decode( file_get_contents( plugin_dir_path( __FILE__ ) . 'vitae.json' ), true )

);