<?php
/**
 * Automatic preset scripts calculation for Kirki controls.
 *
 * @package kirki-framework/module-preset
 * @author Ari Stathopoulos (@aristath)
 * @copyright Copyright (c) 2019, Ari Stathopoulos (@aristath)
 * @license https://opensource.org/licenses/MIT
 * @since 1.0.0
 */

namespace Kirki\Module;

use Kirki\URL;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Adds styles to the customizer.
 */
class Preset {

	/**
	 * Constructor.
	 *
	 * @access public
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'customize_controls_print_footer_scripts', [ $this, 'customize_controls_print_footer_scripts' ] );
	}

	/**
	 * Enqueue scripts.
	 *
	 * @access public
	 * @since 1.0.0
	 */
	public function customize_controls_print_footer_scripts() {
		wp_enqueue_script( 'kirki-preset', URL::get_from_path( __DIR__ . '/script.js' ), [ 'jquery' ], '1.0.0', false );
	}
}
