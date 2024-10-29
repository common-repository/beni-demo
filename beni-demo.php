<?php

/**
 * Plugin Name:       	Beni Demo
 * Plugin URI:        	
 * Description:       	Beni Demo creates necessary pages & serves as a demo importer of images & widgets for MobeenRaheem's themes.
 * Version:           	1.1
 * Author: 				MobeenRaheem
 * Author URI: 			https://profiles.wordpress.org/mobeenraheem/
 * Tested up to: 		6.1
 * Requires: 			4.6 or higher
 * License: 				GPLv3 or later
 * License URI: 			http://www.gnu.org/licenses/gpl-3.0.html
 * Requires PHP: 		5.6
 * Text Domain: 			beni-demo
 * Domain Path: 			/languages
 */

define('beni_demo_plugin_url', plugin_dir_url(__FILE__));
define('beni_demo_plugin_dir', plugin_dir_path(__FILE__));

/**
 * Define plugin textdomain.
 */
function beni_demo_textdomain()
{
   load_plugin_textdomain('beni-demo', false, plugin_dir_url(__FILE__) . 'languages');
}
add_action('init', 'beni_demo_textdomain');

/**
 * Plugin activation.
 */
function activate_beni_demo()
{
   require_once plugin_dir_path(__FILE__) . 'inc/beni-demo-activator.php';
   Beni_Demo_Activator::activate();
}
register_activation_hook(__FILE__, 'activate_beni_demo');
