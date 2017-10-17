<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Me Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'me_color_body_background'      => '#141414',    
));

?>
<!-- FullSingle - Me - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-me {background-color: <?php echo $color['me_color_body_background']; ?>;}
</style>
<!-- FullSingle - Me - Customizer Styles End -->
<?php 