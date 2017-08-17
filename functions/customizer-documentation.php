<?php
/**
 * @package FullSingle
 * @version 0.4.1.2
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Documentation
#-------------------------------------------------------------------------------

function fullsingle_customizer_setup_documentation ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Settings: Documentation
	#-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'fullsingle_customizer_setup_documentation_setting', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'fullsingle_customizer_setup_documentation_setting_sanitize',        
    ));

    function fullsingle_customizer_setup_documentation_setting_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'fullsingle_customizer_setup_documentation_setting', array(
        'section'   => 'fullsingle_customizer_setup_documentation_option',
        'label'     => ' ',
        'priority'  => 801,
        'description' => '<span style="font-style: normal">
        <ul>
        <li><b>Watch:</b> <a href="https://onepagelove.com/go/fullsingle-setup">FullSingle 60s Setup</a></li>
        <li><b>Examples:</b> <a href="https://demo.onepagelove.com/fullsingle" target="_blank">FullSingle Demos</a></li>
        <li><b>Newsletter:</b> <a href="https://onepagelove.com/go/fullsingle-newsletter">New Layouts -> Inbox</a></li>
        <li><b>Help?</b> <a href="/wp-admin/customize.php?autofocus[section]=fullsingle_customizer_setup_support_option">Visit Support Panel</a></li>
        </ul>
        <h3>Layout Setup Videos:</h3>
        <ul>
            <li><b>Bristle:</b> <a href="https://onepagelove.com/go/fullsingle-setup-bristle">Watch</a></li>
            <li><b>Flyleaf:</b> <a href="https://onepagelove.com/go/fullsingle-setup-flyleaf">Watch</a></li>
            <li><b>Me:</b>      <a href="https://onepagelove.com/go/fullsingle-setup-me">Watch</a></li>
            <li><b>Split:</b>   <a href="https://onepagelove.com/go/fullsingle-setup-split">Watch</a></li>
            <li><b>Vitae:</b>   <a href="https://onepagelove.com/go/fullsingle-setup-vitae">Watch</a></li>
        </ul>       
        </span>',        
    ));        

}

add_action('customize_register' , 'fullsingle_customizer_setup_documentation');