<?php
/**
 * Shortcode Active React for Frontend
 *
 * Write [active-react] in your post
 *
 * @package	 mgr_wppwr_plugin
 * @since    1.0.0
 */

if ( ! function_exists( 'mgr_wppwr_active_react_shortcode' ) ) {
	// // Add the action.
	// add_action( 'plugins_loaded', function() {
		// Add the shortcode.
		add_shortcode( 'active-react', 'mgr_wppwr_active_react_shortcode' );
	// });

	/**
	 * Shortcode Active React Function
	 *
	 * @return string
	 * @since  1.0.0
	 */
	function mgr_wppwr_active_react_shortcode() {
		echo '<div class="mgr-wppwr-plugin"></div>';
	}
} // End if().
