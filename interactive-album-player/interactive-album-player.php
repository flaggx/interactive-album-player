<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://validmoodai.com
 * @since             1.0.0
 * @package           Interactive_Album_Player
 *
 * @wordpress-plugin
 * Plugin Name:       Interactive Album Player
 * Plugin URI:        https://validmoodai.com
 * Description:       This plugin allows Musicians to create albums or songs that allow the end user to enable or disable parts of the track to customize their listening experience. 
 * Version:           1.0.0
 * Author:            Andrew Mathews
 * Author URI:        https://validmoodai.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       interactive-album-player
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
define( 'INTERACTIVE_ALBUM_PLAYER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-interactive-album-player-activator.php
 */
function activate_interactive_album_player() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-interactive-album-player-activator.php';
	Interactive_Album_Player_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-interactive-album-player-deactivator.php
 */
function deactivate_interactive_album_player() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-interactive-album-player-deactivator.php';
	Interactive_Album_Player_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_interactive_album_player' );
register_deactivation_hook( __FILE__, 'deactivate_interactive_album_player' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-interactive-album-player.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_interactive_album_player() {

	$plugin = new Interactive_Album_Player();
	$plugin->run();

}
run_interactive_album_player();
