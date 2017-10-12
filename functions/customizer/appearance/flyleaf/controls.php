<?php
/**
 * @package FullSingle
 * @version 0.5.2.4
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Add Setting: Body Background Color  
#-------------------------------------------------------------------------------   

// fullsingle_settings matches get_theme_mod in styles.php
// [within brackets] matches wp_parse_args in styles.php

$wp_customize->add_setting(    'fullsingle_settings[flyleaf_color_body_background]', array(  
    'default'               => '#FE818F',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[flyleaf_color_body_background]', array(
    'label'                 => __( 'Body Background', 'fullsingle' ),
    'section'               => 'fullsingle_section_flyleaf',
    'settings'              => 'fullsingle_settings[flyleaf_color_body_background]',
    'priority'              => 101,
)));