<?php
/**
 * Magicianred WP Plugin with Webpack and React (local development)
 *
 * @copyright Copyright(c) 2021, Simone "Magicianred" Paolucci
 * @license https://opensource.org/licenses/MIT
 *
 * Plugin Name: Magicianred WP Plugin with Webpack and React (local development)
 * Plugin URI: https://github.com/Magicianred/wp-plugin-webpack-react-basic
 * Description: A WP Plugin configuration with Webpack and React
 * Version: 0.1
 * Author: Simone "Magicianred" Paolucci
 * Author URI: https://github.com/magicianred
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 */

/* exit if call it directly */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// local server
if ( ! defined( 'MGR_WPPWR_LOCAL_SERVER' ) ) {
	define( 'MGR_WPPWR_LOCAL_SERVER', 'http://localhost:8080/' );
}

// Plugin version.
if ( ! defined( 'MGR_WPPWR_PLUGIN' ) ) {
	define( 'MGR_WPPWR_PLUGIN_VERSION', '1.0.0' );
}

if ( ! defined( 'MGR_WPPWR_PLUGIN_NAME' ) ) {
	define( 'MGR_WPPWR_PLUGIN_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'MGR_WPPWR_PLUGIN_DIR' ) ) {
	define( 'MGR_WPPWR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}

if ( ! defined( 'MGR_WPPWR_PLUGIN_URL' ) ) {
	define( 'MGR_WPPWR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * Html identification for Admin section
 */
require_once( MGR_WPPWR_PLUGIN_DIR . '/admin/admin.php' );

/**
 * Html identification by Shortcode
 */
require_once( MGR_WPPWR_PLUGIN_DIR . '/shortcode/active-react.php' );

/**
 * Enqueue assets for frontend
 */
require_once( MGR_WPPWR_PLUGIN_DIR . '/common/enqueue_assets.php' );

/**
 * Enqueue assets for admin
 */
require_once( MGR_WPPWR_PLUGIN_DIR . '/common/admin_enqueue_assets.php' );


// /**
//  * Html identification activator in all the posts page
//  */
// add_filter( 'the_content', function( $content ) {
// 	$content = '<div class="mgr-wppwr-plugin"></div>' . $content;
// 	return $content;
// } );

