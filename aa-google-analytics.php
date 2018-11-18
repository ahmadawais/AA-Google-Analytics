<?php
/**
 * Plugin Name: AA Google Analytics
 * Plugin URI: https://AhmadAwais.com/
 * Description: Google Analytics Tracking Script.
 * Author: mrahmadawais
 * Author URI: https://AhmadAwais.com/
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

// Include GA tracking code before the </head> tag.
add_action( 'wp_head', 'aa_add_ggl_analytics' );

// OR Include GA tracking code before the closing </body> tag
// add_action( 'wp_footer', 'aa_add_ggl_analytics' );
/**
 * Add Google Analytics to head..
 *
 * @since 1.0.0
 */
function aa_add_ggl_analytics() {
	// @TODO: Change your tracking ID below.
	$tracking_ID = 'UA-XXXXXXXXX-X';
	?>
			<!-- Add the Google Analytics code below. -->
			<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $tracking_ID; ?>"></script>
			<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());
				gtag('config', '<?php echo $tracking_ID; ?>');
			</script>
	<?php
}
