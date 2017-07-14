<?php
/**
 * @package FullSingle
 * @version 0.0.8
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add custom styles
#-------------------------------------------------------------------------------

// Removes input boxes, bit of a hack I know ;P
function fullsingle_customizer_inline_styles() { ?>
	<style>
	    li#customize-control-fullsingle_credit textarea,
		li#customize-control-fullsingle_customizer_setup_documentation_setting input,
		li#customize-control-fullsingle_customizer_setup_support_setting input {
			display: none !important;
		}
	</style>
	<?php
}

add_action( 'customize_controls_print_styles', 'fullsingle_customizer_inline_styles', 999 ); 