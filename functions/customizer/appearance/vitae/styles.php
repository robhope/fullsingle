<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3.1
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Vitae Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'vitae_color_background_body'   		=> '#FFFFFF',    
    'vitae_color_background_work'           => '#222222',   
    'vitae_color_background_contact'        => '#151515',      
    'vitae_color_background_copyright'      => '#111111',       
));

?>
<!-- FullSingle - Vitae - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-vitae {background-color: <?php echo $color['vitae_color_background_body']; ?>;}
    .history, .networks 		             {background-color: <?php echo $color['vitae_color_background_work']; ?>!important;}  
    .contact                                 {background-color: <?php echo $color['vitae_color_background_contact']; ?>!important;} 
    .copyright                               {background-color: <?php echo $color['vitae_color_background_copyright']; ?>!important;}     
</style>
<!-- FullSingle - Vitae - Customizer Styles End -->
<?php 