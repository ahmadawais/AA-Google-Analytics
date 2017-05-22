<?php
/**
 * Plugin Name: AA Google Analytics
 * Plugin URI: http://AhmadAwais.com/
 * Description: Google Analytics Tracking Script.
 * Author: mrahmadawais, WPTie
 * Author URI: http://AhmadAwais.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package AGA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'AGA_VERSION' ) ) {
    define( 'AGA_VERSION', '1.0.0' );
}

if ( ! defined( 'AGA_NAME' ) ) {
    define( 'AGA_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined('AGA_DIR' ) ) {
    define( 'AGA_DIR', WP_PLUGIN_DIR . '/' . AGA_NAME );
}

if ( ! defined('AGA_URL' ) ) {
    define( 'AGA_URL', WP_PLUGIN_URL . '/' . AGA_NAME );
}

// Make sure the function is unique.
if ( ! function_exists( 'aa_add_ggl_analytics' ) ) {
	// Hook.
	add_action( 'wp_head', 'aa_add_ggl_analytics' );
	/**
	 * Add Google Analytics to head..
	 *
	 * @since 1.0.0
	 */
	function aa_add_ggl_analytics() {
		// Add your own Google Analytics Script here.
		?>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-99602061-1', 'auto');
			  ga('send', 'pageview');

			</script>
		<?php
	} // End fucntion aa_add_ggl_analytics().
} // End if().
