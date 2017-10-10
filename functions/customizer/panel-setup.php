<?php
/**
 * @package FullSingle
 * @version 0.5.2.1
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

    $wp_customize->add_setting( 'fullsingle_setting_documentation', array(
		'default'    =>  ' ',
		'transport'  =>  'postMessage',
		'sanitize_callback' => 'fullsingle_setting_documentation_sanitize',        
    ));

    function fullsingle_setting_documentation_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'fullsingle_setting_documentation', array(
        'section'   => 'fullsingle_section_documentation',
        'label'     => ' ',
        'priority'  => 801,
        'description' => '<span style="font-style: normal">
        <ul>
        <li><b style="display: inline-block; width: 80px;">Watch:</b> <a href="https://onepagelove.com/go/fullsingle-setup">FullSingle 60s Setup</a></li>
        <li><b style="display: inline-block; width: 80px;">Examples:</b> <a href="https://demo.onepagelove.com/fullsingle" target="_blank">FullSingle Demos</a></li>
        <li><b style="display: inline-block; width: 80px;">Help?</b> <a href="/wp-admin/customize.php?autofocus[panel]=fullsingle_panel_setup">Visit Support Section</a></li>
        </ul>
        <hr style="margin-top: 20px; margin-bottom: 20px;" />        
        <h3>Layout Setup Videos:</h3>
        <ul>
            <li><b style="display: inline-block; width: 80px;">Bristle:</b> <a href="https://onepagelove.com/go/fullsingle-setup-bristle">Watch</a></li>
            <li><b style="display: inline-block; width: 80px;">Flyleaf:</b> <a href="https://onepagelove.com/go/fullsingle-setup-flyleaf">Watch</a></li>
            <li><b style="display: inline-block; width: 80px;">Me:</b>      <a href="https://onepagelove.com/go/fullsingle-setup-me">Watch</a></li>
            <li><b style="display: inline-block; width: 80px;">Split:</b>   <a href="https://onepagelove.com/go/fullsingle-setup-split">Watch</a></li>
            <li><b style="display: inline-block; width: 80px;">Vitae:</b>   <a href="https://onepagelove.com/go/fullsingle-setup-vitae">Watch</a></li>
        </ul> 
        <br /> 
        <a href="https://onepagelove.com/go/fullsingle-newsletter" style="display: block; text-align: center; width: 90%; background-color: #f88379; text-decoration: none; color: #FFF; padding: 10px 5%; border-radius: 4px; border-bottom: 2px solid #FF6666;">Join the FullSingle Newsletter</a><br />              
        </span>
        <ul style="color: #666666; font-style: italic; font-size: 12px; line-height: 16px;">
        <li>Only emails with new layouts, nothing else.</li>
        </ul>',        
    ));        

}

add_action('customize_register' , 'fullsingle_customizer_setup_documentation');


#-------------------------------------------------------------------------------
# Customizer: Support
#-------------------------------------------------------------------------------

function fullsingle_customizer_setup_support ( $wp_customize ) {

    #-------------------------------------------------------------------------------
    # Add Settings: Support & Pro Prompt
    #-------------------------------------------------------------------------------   

    $wp_customize->add_setting( 'fullsingle_setting_support', array(
        'default'    =>  ' ',
        'transport'  =>  'postMessage',
        'sanitize_callback' => 'fullsingle_setting_support_sanitize',        
    ));

    function fullsingle_setting_support_sanitize( $input ) {
        return striptags($input ) ;
    }

    $wp_customize->add_control( 'fullsingle_setting_support', array(
        'section'   => 'fullsingle_section_support',
        'label'     => ' ',
        'priority'  => 901,
        'description' => '<span style="font-style: normal">
        <h2>Upgrade to FullSingle Pro</h2>
        <p>Get email support, unlock Customizer options and access bonus HTML versions!</p>
        <b>
        <ul>
        <li>- 12 months email support 💌</li>    
        <li>- More Customizer options for Layouts 🖌</li>
        <li>- Bonus HTML version downloads 🎁</li>
        <li>- Contribute to development 🙏</li>
        <li>- Pro-only Layouts (upcoming)</li>
        <li>- Pro-only Widgets (upcoming)</li>
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