<?php
/**
 * Enqueue assets for Frontend
 *
 * @package	 mgr_wppwr_plugin
 * @since    1.0.0
 */

if ( ! function_exists( 'mgr_wppwr_enqueue_assets_admin' ) ) {
	// Add the action.
	add_action( 'admin_enqueue_scripts', function() {

		wp_enqueue_style( 
            'mgr-wppwr-plugin-admin-main-css', 
            MGR_WPPWR_PLUGIN_URL . 'dist/styles/admin.css', 
            'v'. MGR_WPPWR_PLUGIN_VERSION
        );
		wp_enqueue_script( 
            'mgr-wppwr-plugin-admin-runtime-js', 
            MGR_WPPWR_PLUGIN_URL . 'dist/js/runtime.bundle.js', 
            array(), 
            'v'. MGR_WPPWR_PLUGIN_VERSION, 
            true 
        );
		wp_enqueue_script(
            'mgr-wppwr-plugin-admin-main-js', 
            MGR_WPPWR_PLUGIN_URL . 'dist/js/admin.bundle.js', 
            array(), 
            'v'. MGR_WPPWR_PLUGIN_VERSION, 
            true 
        );
	});
} // End if().
