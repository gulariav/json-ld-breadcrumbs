<?php
/**
 * Plugin Name:     JSON-LD Breadcrumbs
 * Plugin URI:      https://github.com/gulariav/json-ld-breadcrumbs
 * Description:     Adds JSON-LD based Breadcrumbs schema to your site visible only to the Search Engines.
 * Author:          Nikhil Chavan
 * Author URI:      https://www.nikhilchavan.com/
 * Text Domain:     json-ld-breadcrumbs
 * Domain Path:     /languages
 * Version:         1.0.1
 *
 * @package         Invisible_Breadcrumbs
 */

// Exit if the file is called directy by URL.
defined( 'ABSPATH' ) or exit;

define( 'JSON_LD_BREADCRUMBS_VER', '1.0.0' );
define( 'JSON_LD_BREADCRUMBS_DIR', plugin_dir_path( __FILE__ ) );
define( 'JSON_LD_BREADCRUMBS_URL', plugins_url( '/', __FILE__ ) );
define( 'JSON_LD_BREADCRUMBS_PATH', plugin_basename( __FILE__ ) );

// Boorstrap the plugin.
include 'class-json-ld-breadcrumbs.php';
add_action( 'wp', 'JSON_LD_Breadcrumbs::instance' );
