<?php
/*
 * Plugin Name: WooCommerce Email Validation
<<<<<<< HEAD
 * Version: 2.0
 * Plugin URI: http://wordpress.org/plugins/woocommerce-email-validation/
 * Description: Adds a 'confirm email address' field to the WooCommerce checkout page.
 * Author: Hugh Lashbrooke
 * Author URI: http://hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.5.2
 *
 * Text domain: woocommerce-email-validation
 * Domain path: /languages/
=======
 * Version: 1.2.8
 * Plugin URI: http://wordpress.org/plugins/woocommerce-email-validation/
 * Description: Adds a 'confirm email address' field to the WooCommerce checkout page.
 * Author: Hugh Lashbrooke
 * Author URI: http://www.hughlashbrooke.com/
 * Requires at least: 4.0
 * Tested up to: 4.2.2
>>>>>>> a1eca4bf0077364949b64d53c7e76f88657445db
 *
 * @package WordPress
 * @author Hugh Lashbrooke
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once( 'classes/class-woocommerce-email-validation.php' );

global $wcceav;
$wcceav = new WooCommerce_Email_Validation( __FILE__ );