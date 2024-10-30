<?php

/**
 *
 * @link              #
 * @since             1.0.0
 * @package           Materialize_accordions
 *
 * @wordpress-plugin
 * Plugin Name:       Materialize Accordions
 * Plugin URI:        #
 * Description:       Build accordions with the WYSIWYG editor and add, sort, or delete them easily.
 * Version:           1.7.0
 * Author:            Cool WP Plugins
 * Author URI:   	  https://cool-wp-plugins.vercel.app
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       materialize_accordions
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


define( 'MATERIALIZE_ACCORDIONS_VERSION', '1.7.0' );


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

/**
 * If pro version is activated, lets deactivate this plugin
 *
 */

add_action( 'plugins_loaded', 'materialize_accordions_free_deactivate', 100 );

function materialize_accordions_free_deactivate() {

	if (class_exists('Materialize_accordions_Admin_pro')) {

 	deactivate_plugins( plugin_basename( __FILE__ ) ); 
}


	    

 

 /**
 * The code that runs during plugin activation.
 * This action is documented in includes/materialize_accordions-activator.php
 */
function activate_materialize_accordions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/materialize_accordions-activator.php';
	Materialize_accordions_Activator::activate();
}





/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/materialize_accordions-deactivator.php
 */
function deactivate_materialize_accordions() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/materialize_accordions-deactivator.php';
	Materialize_accordions_Deactivator::deactivate();
}



register_activation_hook( __FILE__, 'activate_materialize_accordions' );
register_deactivation_hook( __FILE__, 'deactivate_materialize_accordions' );






/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/materialize_accordions.php';





/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_materialize_accordions() {

	$plugin = new Materialize_accordions();
	$plugin->run();

}
	run_materialize_accordions();
}