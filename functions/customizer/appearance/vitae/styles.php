<?php
/**
 * @package FullSingle
 * @version 0.5.2.2
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
<!-- FullSingle - Vitae - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-vitae {background-color: <?php echo $color['vitae_color_body_background']; ?>;}
</style>
<!-- FullSingle - Vitae - Customizer Styles End -->
<?php 