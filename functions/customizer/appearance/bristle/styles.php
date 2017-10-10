<?php
/**
 * @package FullSingle
 * @version 0.5.2.1
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Bristle Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'bristle_color_body_background'      => '#FE818F',    
));

?>
<!-- FullSingle - Bristle - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-bristle {background-color: <?php echo $color['bristle_color_body_background']; ?>;}
</style>
<!-- FullSingle - Bristle - Customizer Styles End -->
<?php 