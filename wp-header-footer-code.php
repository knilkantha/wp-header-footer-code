<?php

/**
 *
 * Plugin Name:       Header and Footer Code
 * Plugin URI:        https://nil.pro.np/
 * Description:       Simple plugin to add header and footer information.
 * Version:           1.0.0
 * Author:            Nil
 * Author URI:        https://nil.pro.np/about/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt

 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) { 
    exit; 
}

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'disable_plugin_deactivation' );
function disable_plugin_deactivation ($actions) {
	unset( $actions['deactivate'] );
    return $actions;
}




// add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 2 );
// function disable_plugin_deactivation( $actions, $plugin_file) { 	
	// if ( plugin_basename( __FILE__ ) === $plugin_file ) {
		// unset( $actions['deactivate'] );
	// }
    // return $actions;}