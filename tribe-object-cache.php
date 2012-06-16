<?php
/*
Plugin Name:	Tribe Object Cache
Description:	Simple plugin that supports Memcached, APC, Xcache or WinCache based on your system. All you have to do is activate it.
Author:			Peter Chester, Modern Tribe, Inc.
Version:		1.0.4
Author URI:		http://tri.be
*/

// Block direct requests
if ( !defined('ABSPATH') )
	die( 'Sorry Chuck!' );

register_activation_hook( __FILE__, 'add_object_cache_file' );
register_deactivation_hook( __FILE__, 'remove_object_cache_file' );

/**
 * Place the object-cache.php file into wp-contents.
 */
function add_object_cache_file() {
	$from = dirname( __FILE__ ) . '/lib/object-cache.php';
	$to = WP_CONTENT_DIR . '/object-cache.php';
	copy( $from, $to );
}

/**
 * Remove the object-cache.php file from wp-contents.
 */
function remove_object_cache_file() {
	$file = WP_CONTENT_DIR . '/object-cache.php';
	unlink( $file );
}

?>