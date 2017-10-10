<?php
/**
 * @package FullSingle
 * @version 0.5.2.2
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Flyleaf Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'flyleaf_color_body_background'      => '#FE818F',    
));

?>
<!-- FullSingle - Flyleaf - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-flyleaf {background-color: <?php echo $color['flyleaf_color_body_background']; ?>;}
</style>
<!-- FullSingle - Flyleaf - Customizer Styles End -->
<?php 