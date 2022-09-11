<?php
/**
 * Plugin Name: DevPress WooCommerce Boilerplate
 * Plugin URI: https://github.com/devpress/devpress-woocommerce-boilerplate
 * Description: Allows WooCommerce sales to be scheduled to the minute.
 * Version: 1.0.0
 * Author: DevPress
 * Author URI: https://devpress.com
 * Text Domain: devpress-woocommerce-boilerplate
 * Domain Path: /languages
 *
 * WC requires at least: 6.0.0
 * WC tested up to: 6.8.0
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Class DevPress_WooCommerce_Boilerplate
 * @package DevPress_WooCommerce_Boilerplate
 */
class DevPress_WooCommerce_Boilerplate {

	/**
	 * The single instance of the class.
	 *
	 * @var mixed $instance
	 */
	protected static $instance;


	/**
	 * Plugin Version.
	 *
	 * @var float $version
	 */
	public $version = '1.8.5';

	/**
	 * Minimum required WooCommerce Version.
	 *
	 * @access public
	 * @since  1.4.0
	 */
	public $required_woo = '6.0.0';

	/**
	 * Plugin path.
	 *
	 */
	public $plugin_path = null;

	/**
	 * Main DevPress_WooCommerce_Boilerplate Instance.
	 *
	 * Ensures only one instance of the DevPress_WooCommerce_Boilerplate is loaded or can be loaded.
	 *
	 * @return DevPress_WooCommerce_Boilerplate - Main instance.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	public function __construct() {
		// Checks WooCommerce version.
		add_action( 'plugins_loaded', array( $this, 'verify_requirements' ) );

		// Defines the plugin path.
		$this->plugin_path = untrailingslashit( plugin_dir_path( __FILE__ ) );

		// Example file include.
		// require_once $this->plugin_path . '/includes/class-example.php';
	}

	/**
	 * Verifies the WooCommerce requirements before activation.
	 *
	 * @return  void|bool
	 */
	public function verify_requirements() {
		// Checks that we're running the required version of WooCommerce.
		if ( ! defined( 'WC_VERSION' ) || version_compare( WC_VERSION, $this->required_woo, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'woocommerce_compatibility_notice' ) );
			return false;
		}
	}

	/**
	 * Display a warning message if minimum version of WooCommerce check fails.
	 *
	 * @access public
	 * @since  1.3.0
	 * @return void
	 */
	public function woocommerce_compatibility_notice() {
		echo '<div class="error"><p>' . sprintf( __( '%1$s requires at least %2$s v%3$s in order to function. Please upgrade %2$s.', 'woocommerce-coupon-restrictions' ), 'WooCommerce Coupon Restrictions', 'WooCommerce', $this->required_woo ) . '</p></div>';
	}

}

/**
 * Public function to access the shared instance of DevPress_WooCommerce_Boilerplate.
 *
 * @return class DevPress_WooCommerce_Boilerplate
 */
function DevPress_WooCommerce_Boilerplate() {
	return DevPress_WooCommerce_Boilerplate::instance();
}
add_action( 'plugins_loaded', 'DevPress_WooCommerce_Boilerplate' );
