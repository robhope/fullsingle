<?php
/**
 *
 * @package FullSingle
 * @version 0.5.3
 * @license GPL 2.0
 *
*/

# ------------------------------------------------------------------------
# SiteOrigin Pre-Built Page Builder Layouts
# ------------------------------------------------------------------------

function fullsingle_prebuilt_layouts($layouts) {

	$layout_dir = plugin_dir_path( __FILE__ ) . '../layouts/';

	require_once( $layout_dir . 'bristle/bristle.php');
	require_once( $layout_dir . 'flyleaf/flyleaf.php');
	require_once( $layout_dir . 'me/me.php');
	require_once( $layout_dir . 'split/split.php');
	require_once( $layout_dir . 'vitae/vitae.php');
	require_once( $layout_dir . '_upcoming/upcoming.php');

	return $layouts;

}

add_filter('siteorigin_panels_prebuilt_layouts','fullsingle_prebuilt_layouts');

# -------------------------------------------------------------
# Ultra geeky wp_head indentation
# -------------------------------------------------------------

function fullsingle_indented_wp_head(){
    ob_start();
    wp_head();
    $header = ob_get_contents();
    ob_end_clean();
    echo preg_replace("/\n/", "\n\t", substr($header, 0, -1));
    echo "\n";
}