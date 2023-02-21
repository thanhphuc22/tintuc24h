<?php
/**
 * Payment methods
 *
 * Shows customer payment methods on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/payment-methods.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

use JNews\Paywall\Gateways\Stripe\Stripe_Api;

defined( 'ABSPATH' ) || exit;

$cards       = null;
$credentials = new \JPW_Stripe();

if ( get_user_option( 'jpw_stripe_customer_id', get_current_user_id() ) ) {
	$cards = new Stripe_Api( 'check_source', $credentials->get_api_credential(), null, null, get_user_option( 'jpw_stripe_customer_id', get_current_user_id() ) );
	$cards = $cards->get_response_message();

	$default_card = new Stripe_Api( 'default_source', $credentials->get_api_credential(), null, null, get_user_option( 'jpw_stripe_customer_id', get_current_user_id() ) );
	$default_card = $default_card->get_response_message();
}

$count_cards = 0;
if ( $cards ) {
	$count_cards = count( $cards->data );
}

?>

<?php if ( 0 < $count_cards ) : ?>

	<p class="woocommerce-Message woocommerce-Message--info woocommerce-info"><?php esc_html_e( 'Default source will be used for subscription payment.', 'jnews-paywall' ); ?></p>

	<table class="woocommerce-MyAccount-paymentMethods shop_table shop_table_responsive account-payment-methods-table">
		<thead>
			<tr>
				<?php foreach ( wc_get_account_payment_methods_columns() as $column_id => $column_name ) : ?>
					<th class="woocommerce-PaymentMethod woocommerce-PaymentMethod--<?php echo esc_attr( $column_id ); ?> payment-method-<?php echo esc_attr( $column_id ); ?>"><span class="nobr"><?php echo esc_html( $column_name ); ?></span></th>
				<?php endforeach; ?>
			</tr>
		</thead>
		<?php foreach ( $cards->data as $card ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited ?>
			<tr class="payment-method">
				<?php foreach ( wc_get_account_payment_methods_columns() as $column_id => $column_name ) : ?>
					<td class="woocommerce-PaymentMethod stripepaywall woocommerce-PaymentMethod--<?php echo esc_attr( $column_id ); ?> payment-method-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
						<?php
						if ( has_action( 'woocommerce_account_payment_methods_column_' . $column_id ) ) {
							do_action( 'woocommerce_account_payment_methods_column_' . $column_id, $card );
						} elseif ( 'method' === $column_id ) {
							if ( ! empty( $card->card->last4 ) ) {
								/* translators: 1: credit card type 2: last 4 digits */
								echo sprintf( esc_html__( '%1$s ending in %2$s', 'jnews-paywall' ), esc_html( wc_get_credit_card_type_label( $card->card->brand ) ), esc_html( $card->card->last4 ) );
							} else {
								echo esc_html( wc_get_credit_card_type_label( $card->card->brand ) );
							}
						} elseif ( 'expires' === $column_id ) {
							echo esc_html( $card->card->exp_month . '/' . $card->card->exp_year );
						} elseif ( 'actions' === $column_id ) {
							echo '<a href class="button delete" data-source_id="' . $card->id . '">' . esc_html__( 'Delete', 'jnews-paywall' ) . '</a>&nbsp;';
							if ( $card->id !== $default_card ) {
								echo '<a href class="button default" data-source_id="' . $card->id . '">' . esc_html__( 'Make Default', 'jnews-paywall' ) . '</a>&nbsp;';
							}
						}
						?>
					</td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</table>

<?php else : ?>

	<p class="woocommerce-Message woocommerce-Message--info woocommerce-info"><?php esc_html_e( 'No saved methods found.', 'jnews-paywall' ); ?></p>

<?php endif; ?>

<a class="button" href="<?php echo esc_url( wc_get_endpoint_url( 'add-paywall-method' ) ); ?>"><?php esc_html_e( 'Add new method', 'jnews-paywall' ); ?></a>
