<?php
/**
 * Add admin section for Plugin
 *
 * @package	 mgr_wppwr_plugin
 * @since    1.0.0
 */

if ( ! function_exists( 'mgr_wppwr_active_admin_menu' ) ) {
	// Add the action.
    add_action( 'admin_menu', 'mgr_wppwr_active_admin_menu' );
    
	/**
	 * Add option page for plugin
	 *
	 * @since  1.0.0
	 */
	function mgr_wppwr_active_admin_menu(  ) {
        add_options_page( 
            'Mgr WPPWR Options', 
            'Magicianred WP Plugin with Webpack and React', 
            'manage_options', 
            MGR_WPPWR_PLUGIN_NAME . '_AdminMenu',
            function() {
                if ( !current_user_can( 'manage_options' ) )  {
                    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
                }
                echo '<div class="wrap">';
                echo '<div id="mgr-wppwr-plugin-admin"></div>';
                echo '</div>';
            }
        );    
    }
} // End if().
