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

$wp_customize->add_setting(    'fullsingle_customizer_flyleaf_extras', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_customizer_flyleaf_extras_sanitize',        
));

function fullsingle_customizer_flyleaf_extras_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control( 'fullsingle_customizer_flyleaf_extras', array(
    'section'               => 'fullsingle_section_flyleaf', 
    'label'                 => ' ',
    'priority'              => 100,
    'description'           => '<span style="font-style: normal">
    <ul>        
        <li><b style="display: inline-block; width: 80px;">Reference:</b>   <a href="https://demo.onepagetemplates.com/fullsingle/flyleaf/">See Demo</a></li>   
        <li><b style="display: inline-block; width: 80px;">Setup:</b>       <a href="https://onepagelove.com/go/fullsingle-setup-flyleaf">Watch Video</a></li>      
        <li><b style="display: inline-block; width: 80px;">HTML:</b>        Soon</li>        
        <li><b style="display: inline-block; width: 80px;">Support:</b>     <a href="#fullsingle_section_support" rel="tc-section">Visit Support Panel</a></li>        
    </ul>
    <hr style="margin-top: 20px; margin-bottom: 20px;" />  
    <h2>Customization:</h2>   
    </span>',
)); 

#-------------------------------------------------------------------------------
# Add Setting: Color - Background Promo Bar & Footer
#-------------------------------------------------------------------------------   

// fullsingle_settings matches get_theme_mod in styles.php
// [within brackets] matches wp_parse_args in styles.php

$wp_customize->add_setting(    'fullsingle_settings[flyleaf_color_background_footer]', array(  
    'default'               => '#FE5E70',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[flyleaf_color_background_footer]', array(
    'label'                 => __( 'Background: Promo Bar', 'fullsingle' ),
    'description'           => __( 'Also handles footer background', 'fullsingle' ),        
    'section'               => 'fullsingle_section_flyleaf',
    'settings'              => 'fullsingle_settings[flyleaf_color_background_footer]',
    'priority'              => 101,
)));

#-------------------------------------------------------------------------------
# Add Setting: Body Background Color  
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[flyleaf_color_background_body]', array(  
    'default'               => '#FE818F',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[flyleaf_color_background_body]', array(
    'label'                 => __( 'Background: Body', 'fullsingle' ),
    'section'               => 'fullsingle_section_flyleaf',
    'settings'              => 'fullsingle_settings[flyleaf_color_background_body]',
    'priority'              => 102,
)));

#-------------------------------------------------------------------------------
# Add Setting: Color - Background Testimonials
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[flyleaf_color_background_testi]', array(  
    'default'               => '#FFFFFF',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[flyleaf_color_background_testi]', array(
    'label'                 => __( 'Background: Testimonials', 'fullsingle' ),
    'section'               => 'fullsingle_section_flyleaf',
    'settings'              => 'fullsingle_settings[flyleaf_color_background_testi]',
    'priority'              => 103,
)));

#-------------------------------------------------------------------------------
# Add Setting: Color - Background Author
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_settings[flyleaf_color_background_author]', array(  
    'default'               => '#F2F2F2',
    'sanitize_callback'     => 'sanitize_hex_color', 
));

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'fullsingle_controls[flyleaf_color_background_author]', array(
    'label'                 => __( 'Background: Author', 'fullsingle' ),
    'section'               => 'fullsingle_section_flyleaf',
    'settings'              => 'fullsingle_settings[flyleaf_color_background_author]',
    'priority'              => 104,
)));

#-------------------------------------------------------------------------------
# Add Setting: Upgrade Prompt
#-------------------------------------------------------------------------------   

$wp_customize->add_setting(    'fullsingle_setting_flyleaf_upgrade', array(
    'default'               => ' ',
    'transport'             => 'postMessage',
    'sanitize_callback'     => 'fullsingle_setting_flyleaf_upgrade_sanitize',        
));

function fullsingle_setting_flyleaf_extras_sanitize( $input ) {
    return striptags($input ) ;
}

$wp_customize->add_control(    'fullsingle_setting_flyleaf_upgrade', array(
    'section'               => 'fullsingle_section_flyleaf', 
    'label'                 => ' ',
    'priority'              => 105,
    'description'           => '<span style="font-style: normal">
    <p>Unlock these Flyleaf Customizer options when upgrading to <a href="#fullsingle_section_support" rel="tc-section">FullSingle Pro</a>:</p>
    <ul>                 
        <li>🔒 Promo Bar Text Color</li>   
        <li>🔒 Body Text Color</li>  
        <li>🔒 Sample Download Link Color</li>  
        <li>🔒 Sample Download Link Hover Color</li>   
        <li>🔒 Testimonial Quote Text Color</li>           
        <li>🔒 Testimonial Person Name Color</li>  
        <li>🔒 Author Heading Color</li>  
        <li>🔒 Author Content Color</li>    
        <li>🔒 Author Link Color</li>     
        <li>🔒 What&rsquo;s Inside Heading Color</li>  
        <li>🔒 What&rsquo;s Inside Content Color</li>    
        <li>🔒 What&rsquo;s Inside Stats Color</li>      
        <li>🔒 Copyright Text Color</li>                                                                               
    </ul>
    </span>',
));   