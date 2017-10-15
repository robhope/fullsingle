<?php
/**
 * @package FullSingle
 * @version 0.5.2.7
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Vitae Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'vitae_color_body_background'      => '#FFFFFF',    
));

?>
<!-- FullSingle - vitae - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-vitae {background-color: <?php echo $color['vitae_color_body_background']; ?>;}
</style>
<!-- FullSingle - vitae - Customizer Styles End -->
<?php 