<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $flatsome_opt;

wc_print_notices();

?>


<div class="row">
<div class="large-12 columns">

<?php do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'Sebelum Lanjut Ke Proses Checkout/Pembayaran Anda Harus Login Terlebih Dahulu', 'woocommerce' ) );
	return;
}

// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>


<!-- LOGIN -->
<?php	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( is_user_logged_in()  || ! $checkout->enable_signup ) {} else {
$info_message = apply_filters( 'woocommerce_checkout_login_message', __( 'Sudah Punya Akun?', 'woocommerce' ) );
?>

<?php  if(in_array( 'nextend-facebook-connect/nextend-facebook-connect.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && $flatsome_opt['facebook_login_checkout'])  { ?> 
      	<a href="<?php echo wp_login_url(); ?>?loginFacebook=1&redirect=<?php echo the_permalink(); ?>" class="button medium facebook-button " onclick="window.location = '<?php echo wp_login_url(); ?>?loginFacebook=1&redirect='+window.location.href; return false;"><i class="icon-facebook"></i><?php _e('Login / Register with <strong>Facebook</strong>','flatsome'); ?></a>
		<p class="woocommerce-info"><?php echo esc_html( $info_message ); ?> <a href="#" class="showlogin"><?php _e( 'Klik Disini Untuk Login', 'woocommerce' ); ?></a></p>
<?php } else { ?>
		<p class="woocommerce-info"><?php echo esc_html( $info_message ); ?> <a href="#" class="showlogin"><?php _e( 'Klik Disini Untuk Login', 'woocommerce' ); ?></a></p>
<?php } ?>	

<?php
	woocommerce_login_form(
		array(
			'message'  => __( 'Apakah Anda sudah daftar di Gloodycloth sebelumnya? Jika belum silahkan segera lakukan pendaftaran, dan jika Anda sudah pernah mendaftar Anda dapat langsung mengisi kotak form dibawah ini.', 'woocommerce' ),
			'redirect' => get_permalink( woocommerce_get_page_id( 'checkout') ),
			'hidden'   => true
		)
	);

}
?>

</div><!-- .large-12 -->
</div>


<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">
	
	<div class="row">
	<div id="customer_details" class="large-7  columns">

	<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

	<div class="checkout-group woo-billing">
		<?php do_action( 'woocommerce_checkout_billing' ); ?>

	</div>

	<div class="checkout-group woo-shipping">
		 <?php do_action( 'woocommerce_checkout_shipping' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

  	<?php endif; ?>

	</div><!-- .large-7 -->

	<div class="large-5  columns">
		<div id="order_review" class="order-review woocommerce-checkout-review-order">
			<h3 id="order_review_heading"><?php _e( 'Pesanan Anda', 'woocommerce' ); ?></h3>
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div><!-- order-review -->

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	</div><!-- .large-5 -->
	</div><!-- .row -->
    </form><!-- .checkout -->
    <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
