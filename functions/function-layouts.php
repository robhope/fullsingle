<?php

/**
 * @package FullSingle
 * @version 0.0.1
 * @license GPL 2.0
 *
*/

# ------------------------------------------------------------------------
# SiteOrigin Pre-Built Page Builder Layouts
# ------------------------------------------------------------------------

function fullsingle_prebuilt_layouts($layouts) {

$layout_dir = $_SERVER['DOCUMENT_ROOT']. '/wp-content/plugins/fullsingle/layouts/';

require_once( $layout_dir . 'grid/grid.php');
require_once( $layout_dir . 'me/me.php');
require_once( $layout_dir . 'split/split.php');
require_once( $layout_dir . 'vitae/vitae.php');

	return $layouts;

}

add_filter('siteorigin_panels_prebuilt_layouts','fullsingle_prebuilt_layouts');