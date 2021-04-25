<?php
/**
 * Enqueue assets for Frontend
 *
 * @package	 mgr_wppwr_plugin
 * @since    1.0.0
 */

if ( ! function_exists( 'mgr_wppwr_enqueue_assets' ) ) {

	// Add the action.
	add_action( 'wp_enqueue_scripts', function() {		
		// wp_enqueue_style( 
        //     'mgr-wppwr-plugin-main-css', 
        //     $localServer . 'dist/styles/index.css', 
        //     'v'. MGR_WPPWR_PLUGIN_VERSION
        // );
		// wp_enqueue_script( 
        //     'mgr-wppwr-plugin-runtime-js', 
        //     $localServer . 'dist/js/runtime.bundle.js', 
        //     array(), 
        //     'v'. MGR_WPPWR_PLUGIN_VERSION, 
        //     true 
        // );
		wp_enqueue_script(
            'mgr-wppwr-plugin-main-js', 
            MGR_WPPWR_LOCAL_SERVER . '/index.bundle.js', 
            array(), 
            'v'. MGR_WPPWR_PLUGIN_VERSION, 
            true 
        );
	});
} // End if().
