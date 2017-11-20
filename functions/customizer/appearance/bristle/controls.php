<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3.2
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Add Setting: Extras
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_customizer_bristle_extras', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_customizer_bristle_extras_sanitize',        
));

function fullsingle_customizer_bristle_extras_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control( 'fullsingle_customizer_bristle_extras', array(
    'section'               => 'fullsingle_section_bristle', 
    'label'                 => ' ',
    'priority'              => 100,
    'description'           => '<span style="font-style: normal">
    <ul>        
        <li><b style="display: inline-block; width: 80px;">Reference:</b>   <a href="https://demo.onepagetemplates.com/fullsingle/bristle/">See Demo</a></li>     
        <li><b style="display: inline-block; width: 80px;">Setup:</b>       <a href="https://onepagelove.com/go/fullsingle-setup-bristle">Watch Video</a></li>    
        <li><b style="display: inline-block; width: 80px;">HTML:</b>        Soon</li>        
        <li><b style="display: inline-block; width: 80px;">Support:</b>     <a href="#fullsingle_section_support" rel="tc-section">Visit Support Panel</a></li>        
    </ul>
    <hr style="margin-top: 20px; margin-bottom: 20px;" /> 
    <h2>Customization:</h2>   
    </span>',
)); 

#-------------------------------------------------------------------------------
# Add Setting: Body Background Color  
#-------------------------------------------------------------------------------   

// fullsingle_settings matches get_theme_mod in styles.php
// [within brackets] matches wp_parse_args in styles.php

$wp_customize->add_setting(    'fullsingle_settings[bristle_color_body_background]', array(
    'default'               => '#FFFFFF',
    'sanitize_callback'     => 'sanitize_hex_color', 
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[bristle_color_body_background]', array(
    'label'                 => __( 'Background: Body', 'fullsingle' ),
    'section'               => 'fullsingle_section_bristle',
    'settings'              => 'fullsingle_settings[bristle_color_body_background]',
    'priority'              => 101,
) ) );

#-------------------------------------------------------------------------------
# Add Setting: Color - Page Border 
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[bristle_color_border_page]', array(
    'default'               => '#FED0C5',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[bristle_color_border_page]', array(
    'label'                 => __( 'Page Border', 'fullsingle' ),
    'section'               => 'fullsingle_section_bristle',
    'settings'              => 'fullsingle_settings[bristle_color_border_page]',
    'priority'              => 102,
)));

#-------------------------------------------------------------------------------
# Add Setting: Upgrade Prompt
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_setting_bristle_upgrade', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_setting_bristle_upgrade_sanitize',        
));

function ffullsingle_setting_bristle_upgrade_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control(    'fullsingle_setting_bristle_upgrade', array(
    'section'               => 'fullsingle_section_bristle', 
    'label'                 => ' ',
    'priority'              => 103,
    'description'           => '<span style="font-style: normal">
    <p>Unlock these Bristle Customizer options when upgrading to <a href="#fullsingle_section_support" rel="tc-section">FullSingle Pro</a>:</p>
    <ul>        
        <li>🔒 Navigation Link Color</li>   
        <li>🔒 Navigation Link Hover Color</li> 
        <li>🔒 Big Intro Text Color</li>         
        <li>🔒 Project Title Color</li> 
        <li>🔒 Project Category Color</li>   
        <li>🔒 Contact Details Color</li>
        <li>🔒 Footer Copyright Color</li>   
    </ul>
    </span>',
));   