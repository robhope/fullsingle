<?php
/**
 * @package FullSingle
 * @version 0.0.8
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
        <li><b>Video:</b> <a href="h#">FullSingle Setup</a></li>
        <li><b>Example:</b> <a href="https://demo.onepagelove.com/fullsingle" target="_blank">FullSingle Demos</a></li>
        <li><b>Help?</b> <a href="/wp-admin/customize.php?autofocus[section]=fullsingle_customizer_setup_support_option">Visit Support Panel</a></li>
        </ul>
        </span>',        
    ));        

}

add_action('customize_register' , 'fullsingle_customizer_setup_documentation');