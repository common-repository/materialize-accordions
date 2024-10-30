<?php

/**
 * Fired during plugin activation
 *
 * @link       #
 * @since      1.0.0
 *
 * @package    Materialize_accordions
 * @subpackage Materialize_accordions/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Materialize_accordions
 * @subpackage Materialize_accordions/includes
 * @author     Moe Himed <#>
 */
class Materialize_accordions_Activator {

	/**
	 * Short Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

 	add_option( 'Activated_Plugin', 'materialize_accordions' );
 	
	}

}
