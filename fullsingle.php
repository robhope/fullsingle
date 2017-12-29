<?php
/*
Plugin Name: FullSingle
Plugin URI: https://onepagelove.com/fullsingle
Description: Beautiful Free Landing Page layouts that work with any WordPress theme.
Version: 0.5.4
Author: One Page Love
Author URI: https://onepagelove.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: fullsingle
*/

# ------------------------------------------------------------------------
# FullSingle
# ------------------------------------------------------------------------

$plugin_dir = plugin_dir_path( __FILE__ );

require_once( $plugin_dir . '/functions/function-layouts.php'    				);  # Site Origin Layouts
require_once( $plugin_dir . '/functions/function-enqueue-page-templates.php'    );  # Enqueue Page Templates
require_once( $plugin_dir . '/functions/function-enqueue-stylesheets.php'    	);  # Enqueue Stylesheets
require_once( $plugin_dir . '/functions/function-customizer.php'    			);  # Add Customizer Panel
require_once( $plugin_dir . '/functions/function-tgm.php'                  		);  # Recommended Plugins