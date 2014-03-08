<?php
/**
 * X Core Plugin
 *
 * @package   X_Core
 * @author    Gary Jones <me@example.com>
 * @license   GPL-2.0+
 * @copyright 2014 Gary Jones
 *
 * @wordpress-plugin
 * Plugin Name:       X Core Plugin Library
 * Plugin URI:        http://www.example.com
 * Description:       Plugin provides library classes for other plugins.
 * Version:           1.0.0
 * Author:            Gary Jones
 * Author URI:        http://gamajo.com
 * Text Domain:       x-core
 * Domain Path:       /languages
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Require core library files.
 *
 * @since  1.0.0
 */
function x_core() {
	$files = array(
		'interface-gamajo-registerable',
		'class-gamajo-post-type',
		'class-gamajo-taxonomy',
		'class-gamajo-dashboard-glancer',
		'class-gamajo-template-loader',
	);

	foreach( $files as $file ) {
		require_once plugin_dir_path( __FILE__ ) . 'x-core/' . $file . '.php';
	}
}

// Require files immediately so they are available for other plugins at init
x_core();
