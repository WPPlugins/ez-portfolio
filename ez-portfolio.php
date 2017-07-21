<?php
/*
 * Plugin Name: EZ Portfolio
 * Version: 1.0.7
 * Plugin URI: http://www.webbisivut.org/
 * Description: Easy to use portfolio plugin to WordPress
 * Author: Webbisivut.org
 * Author URI: http://www.webbisivut.org/
 * Requires at least: 4.0
 * Tested up to: 4.6
 *
 * @package WordPress
 * @author Webbisivut.org
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Include plugin class files
require_once( 'inc/dynamic-css.php' );
require_once( 'includes/class-ez-portfolio.php' );
require_once( 'includes/class-ez-portfolio-shortcode.php' );
require_once( 'includes/class-ez-portfolio-settings.php' );
require_once( 'includes/post-types/class-ez-portfolio-post_type.php' );

/**
 * Returns the main instance of EZ_Portfolio to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object EZ_Portfolio
 */
function EZ_Portfolio () {
	$instance = EZ_Portfolio::instance( __FILE__, '1.0.0' );
	if( is_null( $instance->settings ) ) {
		$instance->settings = EZ_Portfolio_Settings::instance( $instance );
	}

	$instance->post_type = EZ_Portfolio_Post_Type::instance( $instance );

	return $instance;
}

EZ_Portfolio();
?>
