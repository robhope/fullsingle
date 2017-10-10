<?php
/**
 * @package FullSingle
 * @version 0.5.2.3
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
		li#customize-control-fullsingle_setting_support input,
		li#customize-control-fullsingle_setting_bristle_extras input,
		li#customize-control-fullsingle_setting_flyleaf_extras input,
		li#customize-control-fullsingle_setting_me_extras input,
		li#customize-control-fullsingle_setting_split_extras input,
		li#customize-control-fullsingle_setting_vitae_extras input
		{display: none !important;}
	</style>
	<?php
}

add_action( 'customize_controls_print_styles', 'fullsingle_customizer_inline_styles', 999 ); 

