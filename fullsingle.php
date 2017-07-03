<?php

/**
 * @package FullSingle
 * @version 0.0.1
 * @license GPL 2.0
 *
Plugin Name: FullSingle
Plugin URI: https://onepagelove.com/fullsingle
Description: A collection of beautiful Landing Page layouts for SiteOrigin's Free Page Builder.
Author: One Page Love
Author URI: https://onepagelove.com
Version: 0.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: fullsingle
 *
 * Copyright 2017 One Page Love (email: support@onepagelove.com)
 *
*/

# ------------------------------------------------------------------------
# FullSingle
# ------------------------------------------------------------------------

$plugin_dir = $_SERVER['DOCUMENT_ROOT']. '/wp-content/plugins/fullsingle/';

require_once( $plugin_dir . '/functions/function-layouts.php'    				);  # Site Origin Layouts
require_once( $plugin_dir . '/functions/function-enqueue-page-templates.php'    );  # Enqueue Page Templates
require_once( $plugin_dir . '/functions/function-enqueue-stylesheets.php'    	);  # Enqueue Stylesheets