<?php

/**
 * Class WC_Product_Paywall_Subscribe
 */
class WC_Product_Paywall_Subscribe extends WC_Product {

	/**
	 * Get internal type.
	 *
	 * @return string
	 */
	public function get_type() {
		return 'paywall_subscribe';
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
		return true;
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
	 * Get subscription time
	 *
	 * @return float|int
	 */
	public function get_subscribe_time() {
		$duration = get_post_meta( $this->id, '_jpw_total', true );
		$interval = get_post_meta( $this->id, '_jpw_duration', true );

		switch ( $interval ) {
			case 'day':
				$days = $duration;
				break;

			case 'week':
				$days = $duration * 7;
				break;

			case 'month':
				$days = $duration * 30;
				break;

			case 'year':
				$days = $duration * 365;
				break;

			default:
				$days = 0;
				break;
		}

		return $days;
	}

	public function get_interval() {
		$interval = get_post_meta( $this->id, '_jpw_duration', true );

		return strtoupper( $interval );
	}

	public function get_duration() {
		$duration = get_post_meta( $this->id, '_jpw_total', true );

		return $duration;
	}
}
