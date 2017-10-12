<?php
/**
 * @package FullSingle
 * @version 0.5.2.4
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Bristle Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'bristle_color_body_background'      => '#FFFFFF',    
));

?>
<!-- FullSingle - Bristle - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-bristle {background-color: <?php echo $color['bristle_color_body_background']; ?>;}
</style>
<!-- FullSingle - Bristle - Customizer Styles End -->
<?php 