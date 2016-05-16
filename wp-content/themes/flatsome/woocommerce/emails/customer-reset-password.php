<?php
/**
 * Customer Reset Password email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php _e( 'Seseorang telah meminta Anda untuk me reset password (Hati-hati bisa saja orang lain sedang membuka akun Anda) :', 'woocommerce' ); ?></p>
<p><?php printf( __( 'Username : %s', 'woocommerce' ), $user_login ); ?></p>
<p><?php _e( 'Jika Anda tidak merasa ingin merubah password, silahkan abaikan, dan tidak akan terjadi apa-apa pada akun Anda.', 'woocommerce' ); ?></p>
<p><?php _e( 'Jika Anda ingin me reset password, silahkan kunjungi dan ikuti alamat berikut :', 'woocommerce' ); ?></p>
<p>
    <a class="link" href="<?php echo esc_url( add_query_arg( array( 'key' => $reset_key, 'login' => rawurlencode( $user_login ) ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) ); ?>">
			<?php _e( 'Klik Disini Untuk Reset Password', 'woocommerce' ); ?></a>
</p>
<p></p>

<?php do_action( 'woocommerce_email_footer', $email ); ?>
