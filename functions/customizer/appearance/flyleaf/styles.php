<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Flyleaf Styles
#-------------------------------------------------------------------------------

$color = get_theme_mod('fullsingle_settings');

$color = wp_parse_args($color, array(
    'flyleaf_color_background_footer'    => '#FE5E70',   
    'flyleaf_color_background_body'      => '#FE818F',  
    'flyleaf_color_background_author'    => '#F2F2F2',  
    'flyleaf_color_background_testi'     => '#FFFFFF',               
));

?>
<!-- FullSingle - Flyleaf - Customizer Styles Start -->
<style>
    body.page-template-page-fullsingle-flyleaf 	{background-color: <?php echo $color['flyleaf_color_background_body']; ?> ;}
    .special-offer, .final-download				{background-color: <?php echo $color['flyleaf_color_background_footer'];?> !important;}
    .testimonial-row							{background-color: <?php echo $color['flyleaf_color_background_testi']; ?> !important;}
    .about-the-author							{background-color: <?php echo $color['flyleaf_color_background_author'];?> !important;}        
</style>
<!-- FullSingle - Flyleaf - Customizer Styles End -->
<?php 