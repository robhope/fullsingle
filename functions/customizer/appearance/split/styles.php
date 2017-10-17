<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Split Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'split_color_body_background'      => '#061C30',    
));

?>
<!-- FullSingle - Split - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-split {background-color: <?php echo $color['split_color_body_background']; ?>;}
</style>
<!-- FullSingle - Split - Customizer Styles End -->
<?php 