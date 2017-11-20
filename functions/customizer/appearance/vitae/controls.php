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

$wp_customize->add_setting(    'fullsingle_customizer_vitae_extras', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_customizer_vitae_extras_sanitize',        
));

function fullsingle_customizer_vitae_extras_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control( 'fullsingle_customizer_vitae_extras', array(
    'section'               => 'fullsingle_section_vitae', 
    'label'                 => ' ',
    'priority'              => 100,
    'description'           => '<span style="font-style: normal">
    <ul>        
        <li><b style="display: inline-block; width: 80px;">Reference:</b>   <a href="https://demo.onepagetemplates.com/fullsingle/vitae/">See Demo</a></li>   
        <li><b style="display: inline-block; width: 80px;">Setup:</b>       <a href="https://onepagelove.com/go/fullsingle-setup-vitae">Watch Video</a></li>      
        <li><b style="display: inline-block; width: 80px;">HTML:</b>        Soon</li>        
        <li><b style="display: inline-block; width: 80px;">Support:</b>     <a href="#fullsingle_section_support" rel="tc-section">Visit Support Panel</a></li>        
    </ul>
    <hr style="margin-top: 20px; margin-bottom: 20px;" />  
    <h2>Customization:</h2>   
    </span>',
)); 

#-------------------------------------------------------------------------------
# Add Setting: Color - Body Background  
#-------------------------------------------------------------------------------   

// fullsingle_settings matches get_theme_mod in styles.php
// [within brackets] matches wp_parse_args in styles.php

$wp_customize->add_setting(    'fullsingle_settings[vitae_color_background_body]', array(  
    'default'               => '#FFFFFF',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[vitae_color_background_body]', array(
    'label'                 => __( 'Background: Body', 'fullsingle' ),
    'section'               => 'fullsingle_section_vitae',
    'settings'              => 'fullsingle_settings[vitae_color_background_body]',
    'priority'              => 101,
)));

#-------------------------------------------------------------------------------
# Add Setting: Color - Background Work
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[vitae_color_background_work]', array(  
    'default'               => '#222222',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[vitae_color_background_work]', array(
    'label'                 => __( 'Background: Work & Network', 'fullsingle' ),
    'section'               => 'fullsingle_section_vitae',
    'settings'              => 'fullsingle_settings[vitae_color_background_work]',
    'priority'              => 102,
)));

#-------------------------------------------------------------------------------
# Add Setting: Color - Background Contact
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[vitae_color_background_contact]', array(  
    'default'               => '#151515',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[vitae_color_background_contact]', array(
    'label'                 => __( 'Background: Contact', 'fullsingle' ),
    'section'               => 'fullsingle_section_vitae',
    'settings'              => 'fullsingle_settings[vitae_color_background_contact]',
    'priority'              => 103,
)));

#-------------------------------------------------------------------------------
# Add Setting: Color - Background Copyright
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[vitae_color_background_copyright]', array(  
    'default'               => '#111111',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[vitae_color_background_copyright]', array(
    'label'                 => __( 'Background: Copyright', 'fullsingle' ),
    'section'               => 'fullsingle_section_vitae',
    'settings'              => 'fullsingle_settings[vitae_color_background_copyright]',
    'priority'              => 104,
)));

#-------------------------------------------------------------------------------
# Add Setting: Extras & Upgrade Prompt
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_setting_vitae_upgrade', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_setting_vitae_upgrade_sanitize',        
));

function fullsingle_setting_vitae_upgrade_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control(    'fullsingle_setting_vitae_upgrade', array(
    'section'               => 'fullsingle_section_vitae', 
    'label'                 => ' ',
    'priority'              => 105,
    'description'           => '<span style="font-style: normal">
    <p>Unlock these Vitae Customizer options when upgrading to <a href="#fullsingle_section_support" rel="tc-section">FullSingle Pro</a>:</p>
    <ul>                 
        <li>🔒 Intro Hello Color</li>   
        <li>🔒 Intro Paragraph Color</li>
        <li>🔒 Section Title Color</li>
        <li>🔒 Work Text Color</li>     
        <li>🔒 Work Date Color</li>  
        <li>🔒 Contact Text Color</li>   
        <li>🔒 Copyright Text Color</li>                                   
    </ul>
    </span>',
));   