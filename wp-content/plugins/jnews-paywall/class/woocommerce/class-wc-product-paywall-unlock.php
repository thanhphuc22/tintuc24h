<?php

/**
 * Class WC_Product_Paywall_Unlock
 */
class WC_Product_Paywall_Unlock extends WC_Product {
	/**
	 * Get internal type.
	 *
	 * @return string
	 */
	public function get_type() {
		return 'paywall_unlock';
	}

	/**
	 * @return bool
	 */
	public function is_purchasable() {
		return true;
	}

	/**
	 * @return bool
	 */
	public function is_sold_individually() {
		return false;
	}

	/**
	 * @return bool
	 */
	public function is_virtual() {
		return true;
	}

	/**
	 * @return mixed
	 */
	public function is_featured_package() {
		return get_post_meta( $this->id, '_jeg_post_featured', true );
	}


	/**
	 * Get total unlock
	 *
	 * @return mixed
	 */
	public function get_total_unlock() {
		$total = get_post_meta( $this->id, '_jpw_total_unlock', true );

		return $total;
	}
}
