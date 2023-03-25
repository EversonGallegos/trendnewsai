<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.linkedin.com/in/eversongallegos/
 * @since             1.0.0
 * @package           Twitter_Trends
 *
 * @wordpress-plugin
 * Plugin Name:       Twitter Trends
 * Plugin URI:        https://https://www.linkedin.com/in/eversongallegos/
 * Description:       Twitter Trends observa os trend topics do Twitter.
 * Version:           1.0.0
 * Author:            Everson Gallegos
 * Author URI:        https://https://www.linkedin.com/in/eversongallegos/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       twitter-trends
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TWITTER_TRENDS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-twitter-trends-activator.php
 */
function activate_twitter_trends() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-twitter-trends-activator.php';
	Twitter_Trends_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-twitter-trends-deactivator.php
 */
function deactivate_twitter_trends() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-twitter-trends-deactivator.php';
	Twitter_Trends_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_twitter_trends' );
register_deactivation_hook( __FILE__, 'deactivate_twitter_trends' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-twitter-trends.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_twitter_trends() {

	$plugin = new Twitter_Trends();
	$plugin->run();

}
run_twitter_trends();
