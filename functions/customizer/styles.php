<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add custom styles
#-------------------------------------------------------------------------------

// Removes input boxes, bit of a hack I know ;P
function fullsingle_customizer_inline_styles() { ?>
	<style>
		li#customize-control-fullsingle_setting_documentation input,
		li#customize-control-fullsingle_setting_downloads input,		
		li#customize-control-fullsingle_setting_support input,
		li#customize-control-fullsingle_customizer_bristle_extras input,	
		li#customize-control-fullsingle_setting_bristle_upgrade input,		
		li#customize-control-fullsingle_customizer_flyleaf_extras input,				
		li#customize-control-fullsingle_setting_flyleaf_upgrade input,	
		li#customize-control-fullsingle_customizer_me_extras input,				
		li#customize-control-fullsingle_setting_me_upgrade input,
		li#customize-control-fullsingle_customizer_split_extras input,			
		li#customize-control-fullsingle_setting_split_upgrade input,
		li#customize-control-fullsingle_customizer_vitae_extras input,			
		li#customize-control-fullsingle_setting_vitae_upgrade input
		{display: none !important;}
	</style>
	<?php
}

add_action( 'customize_controls_print_styles', 'fullsingle_customizer_inline_styles', 999 ); 