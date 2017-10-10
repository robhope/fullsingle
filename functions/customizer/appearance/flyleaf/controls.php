<?php
/**
 * @package FullSingle
 * @version 0.5.2.2
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


#-------------------------------------------------------------------------------
# Add Setting: Extras & Upgrade Prompt
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_setting_flyleaf_extras', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_setting_flyleaf_extras_sanitize',        
));

function fullsingle_setting_flyleaf_extras_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control(    'fullsingle_setting_flyleaf_extras', array(
    'section'               => 'fullsingle_section_flyleaf', 
    'label'                 => ' ',
    'priority'              => 102,
    'description'           => '<span style="font-style: normal">
    <p>Unlock these Flyleaf Customizer options when upgrading to <a href="/wp-admin/customize.php?autofocus[section]=fullsingle_section_support">FullSingle Pro</a>:</p>
    <ul>        
    <li>🔒 Body Text Color</li>
    <li>🔒 Body Text Link Color</li>    
    </ul>
    <hr style="margin-top: 20px; margin-bottom: 20px;" />  
    <h2>Useful Links:</h2>
    <ul>        
    <li><b style="display: inline-block; width: 80px;">Setup:</b>       <a href="https://onepagelove.com/go/fullsingle-setup-flyleaf">Watch Video</a></li>
    <li><b style="display: inline-block; width: 80px;">Reference:</b>   <a href="https://demo.onepagelove.com/fullsingle/flyleaf-layout/">See Flyleaf Demo</a></li>     
    <li><b style="display: inline-block; width: 80px;">HTML:</b>        <a href="/wp-admin/customize.php?autofocus[section]=fullsingle_section_support">Download HTML Version</a></li>        
    <li><b style="display: inline-block; width: 80px;">Support:</b>     <a href="/wp-admin/customize.php?autofocus[section]=fullsingle_section_support">Visit Support Panel</a></li>        
    </ul>
    </span>',
));   