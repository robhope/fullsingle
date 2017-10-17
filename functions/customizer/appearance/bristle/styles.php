<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Bristle Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'bristle_color_body_background'     => '#FFFFFF',    
    'bristle_color_border_page'      	=> '#FED0C5',  
));

?>
<!-- FullSingle - Bristle - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-bristle {background-color: <?php echo $color['bristle_color_body_background']; ?>; border-color: <?php echo $color['bristle_color_border_page']; ?>;}
</style>
<!-- FullSingle - Bristle - Customizer Styles End -->
<?php 