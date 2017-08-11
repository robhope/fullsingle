<?php
/**
 * @package FullSingle
 * @version 0.4.0
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Support
#-------------------------------------------------------------------------------

function fullsingle_customizer_setup_support ( $wp_customize ) {

	#-------------------------------------------------------------------------------
	# Add Settings: Support & Pro Prompt
	#-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'fullsingle_customizer_setup_support_setting', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'fullsingle_customizer_setup_support_setting_sanitize',        
    ));

    function fullsingle_customizer_setup_support_setting_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'fullsingle_customizer_setup_support_setting', array(
        'section'   => 'fullsingle_customizer_setup_support_option',
        'label'     => ' ',
        'priority'  => 901,
        'description' => '<span style="font-style: normal">
        <h2>FullSingle Pro</h2>
        <p>Upgrade to <a href="https://onepagelove.com/go/fullsingle-upgrade" target="_blank">FullSingle Pro</a> to get email support and unlock Pro templates and widgets (upcoming).</p>
        <b>
        <ul>
        <li>- 12 months email support 💌</li>    
        <li>- Contribute to development 👍🏻</li>
        <li>- Pro-only templates (upcoming)</li>
        <li>- Pro-only widgets (upcoming)</li>
        </ul>
        <br /> 
        </b> 
        <a href="https://onepagelove.com/go/fullsingle-upgrade" style="display: block; text-align: center; width: 90%; background-color: #57c557; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 4px; border-bottom: 2px solid #2eae2e">Upgrade to Pro for only $19</a><br />
        <ul style="color: #666666; font-style: italic; font-size: 12px; line-height: 16px;">
        <li>- Quick secure Stripe or PayPal transaction</li>
        <li>- Once-off payment, non-recurring</li>        
        <li>- 30-day money back guarantee</li>
        <li>- Really helps support future updates</li>
        </ul>
        </span>',        
    ));        

}

add_action('customize_register' , 'fullsingle_customizer_setup_support');