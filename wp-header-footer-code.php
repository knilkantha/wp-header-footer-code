<?php

/**
 * Plugin Name:       Header and Footer Code
 * Plugin URI:        https://nil.pro.np/
 * Description:       Simple plugin to add code on WordPress header and footer.
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







//Preventing accidental deactivation of plugin.
//disabling deactivate option for this particular plugin, you can remove this section if you don't need it.
// to deactivate this plugin comment this below four line first then wordpress will show deactive, delete option in WordPress admin.
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'disable_plugin_deactivation' );
function disable_plugin_deactivation ($actions) {
	unset( $actions['deactivate'] );
    return $actions;
}
