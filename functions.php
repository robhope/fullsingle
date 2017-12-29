<?php

/**
 * @package FullSingle
 * @version 0.5.4
 * @license GPL 2.0
 *
*/

# ------------------------------------------------------------------------
# Notice if user accidentally uploads Plugin to Theme section
# ------------------------------------------------------------------------

/**
 * This file is only ever loaded when this Plugin is accidentally installed as a Theme.
*/

function fullsingle_theme_admin_notice() {

	$instructions_url = 'https://onepagelove.com/go/fullsingle-setup';

	?>
	<div class="error">
		<p>
			<?php _e( "<strong>Warning</strong>: You're trying to use <strong>FullSingle</strong> as a Theme. Please deactivate it and reinstall it as a Plugin. Then don't forget to reactivate the Theme you were using previously:) ", 'fullsingle' ); ?>
			<a href="<?php echo esc_url($instructions_url) ?>"><?php _e('Watch Setup Video', 'fullsingle') ?></a>
		</p>
	</div>
	<?php
}

add_action( 'admin_notices', 'fullsingle_theme_admin_notice' );