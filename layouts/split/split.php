<?php
/**
 *
 * @package fullsingle
 * @since fullsingle 0.0.9
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Minimal Three
# ------------------------------------------------------------------------

$layouts['split'] = array(

    'name' => __('Split', 'fullsingle'), 

    'description' => __('Split is a centrally-divided layout for a professional online presense with a big image image left with alongside content.', 'fullsingle'),

    'screenshot' => 'https://demo.onepagelove.com/fullsingle/wp-content/uploads/sites/4/2017/07/split.jpg',  

    'widgets' =>
    array(
      0 =>
      array(
        'headline' => __('This Is A Headline fullsingle Widget','fullsingle'),
        'sub_headline' => __('You can customize it fullsingle and put it where ever you want','fullsingle'),
        'info' =>
        array(
          'class' => 'Vantage_Headline_Widget',
          'id' => '1',
          'grid' => '0',
          'cell' => '0',
        ),
      ),


    ),

    'grids' =>
    array(
      0 =>
      array(
        'cells' => '1',
        'style' => array(
          'class' => 'wide-grey'
        ),
      ),
    ),

    'grid_cells' =>
    array(
      0 =>
      array(
        'weight' => '0.3333333333333333',
        'grid' => '0',
      ),
    ),
);