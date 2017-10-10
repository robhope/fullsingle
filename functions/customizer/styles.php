<?php
/**
 * @package FullSingle
 * @version 0.5.2.1
 * @license GPL 2.0
 *
*/

#-------------------------------------------------------------------------------
# Customizer: Add custom styles
#-------------------------------------------------------------------------------

// Removes input boxes, bit of a hack I know ;P
function fullsingle_customizer_inline_styles() { ?>
	<style>
		ul.customize-pane-child input {display: none !important;}
	</style>
	<?php
}

add_action( 'customize_controls_print_styles', 'fullsingle_customizer_inline_styles', 999 ); 