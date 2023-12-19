<?php
/**
 * Plugin Name:       Comment Edit Core - Add Timer Low Text
 * Plugin URI:        https://github.com/DLXPlugins/cep-add-timer-low-text/
 * Description:       Add a timer low text to the comment edit core timer section.
 * Version:           1.0.0
 * Requires at least: 5.9
 * Requires PHP:      7.2
 * Author:            DLX Plugins
 * Author URI:        https://dlxplugins.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       cep-add-timer-low-text
 *
 * @package CEPAddTimerLowText
 */

namespace DLXPlugins\CEPAddTimerLowText;

// Hook into Comment Edit Core and output our scripts.
add_action( 'sce_scripts_loaded', __NAMESPACE__ . '\enqueue_scripts' );

/**
 * Enqueue our scripts.
 */
function enqueue_scripts() {
	wp_enqueue_script(
		'cec-add-timer-low-text',
		plugins_url( 'cec-add-timer-low-text.js', __FILE__ ),
		array( 'wp-hooks', 'simple-comment-editing' ), /* Need `wp-hooks` to use `addFilter` */
		'1.0.0',
		true
	);
}
