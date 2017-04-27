<?php
/**
 * Currency Switcher Functions
 *
 * Currency Switcher Functions file.
 *
 * @version 2.0.0
 * @since   1.0.0
 * @author  Tom Anbinder
 */

if ( ! function_exists( 'alg_get_enabled_currencies' ) ) {
	/**
	 * alg_get_enabled_currencies.
	 *
	 * @version 2.0.0
	 * @since   1.0.0
	 */
	function alg_get_enabled_currencies( $with_default = true ) {
		$additional_currencies = array();
		$default_currency = get_option( 'woocommerce_currency' );
		if ( $with_default ) {
			$additional_currencies[] = $default_currency;
		}
		$total_number = min( get_option( 'alg_currency_switcher_total_number', 2 ), apply_filters( 'alg_wc_currency_switcher_plugin_option', 2 ) );
		for ( $i = 1; $i <= $total_number; $i++ ) {
			if ( 'yes' === get_option( 'alg_currency_switcher_currency_enabled_' . $i, 'yes' ) ) {
				$additional_currencies[] = get_option( 'alg_currency_switcher_currency_' . $i, $default_currency );
			}
		}
		return array_unique( $additional_currencies );
	}
}



if ( ! function_exists( 'alg_get_current_currency_code' ) ) {
	/**
	 * alg_get_current_currency_code.
	 *
	 * @version 2.0.0
	 * @since   2.0.0
	 */
	function alg_get_current_currency_code( $default_currency = '' ) {
		if ( isset( $_SESSION['alg_currency'] ) ) {
			return $_SESSION['alg_currency'];
		} elseif ( 'yes' === get_option( 'alg_wc_currency_switcher_currency_countries_enabled', 'no' ) ) {
			if ( null != ( $customer_country = alg_get_customer_country_by_ip() ) ) {
				foreach ( alg_get_enabled_currencies( false ) as $currency_to ) {
					if ( '' != $currency_to ) {
						$countries = get_option( 'alg_currency_switcher_currency_countries_' . $currency_to, '' );
						if ( '' != $countries ) {
							if ( in_array( $customer_country, $countries ) ) {
								$_SESSION['alg_currency'] = $currency_to;
								return $currency_to;
							}
						}
					}
				}
			}
		}
		if ( '' == $default_currency ) {
			$default_currency = get_option( 'woocommerce_currency' );
		}
		$_SESSION['alg_currency'] = $default_currency;
		return $default_currency;
	}
}

if ( ! function_exists( 'alg_get_customer_country_by_ip' ) ) {
	/**
	 * alg_get_customer_country_by_ip.
	 *
	 * @version 2.0.0
	 * @since   2.0.0
	 */
	function alg_get_customer_country_by_ip() {
		if ( class_exists( 'WC_Geolocation' ) ) {
			// Get the country by IP
			$location = WC_Geolocation::geolocate_ip();
			// Base fallback
			if ( empty( $location['country'] ) ) {
				$location = wc_format_country_state_string( apply_filters( 'woocommerce_customer_default_location', get_option( 'woocommerce_default_country' ) ) );
			}
			return ( isset( $location['country'] ) ) ? $location['country'] : null;
		} else {
			return null;
		}
	}
}

if ( ! function_exists( 'alg_get_exchange_rate' ) ) {
	/*
	 * alg_get_exchange_rate.
	 *
	 * @version 2.0.0
	 * @since   2.0.0
	 * @return  float rate on success, else 0
	 */
	function alg_get_exchange_rate( $currency_from, $currency_to ) {
		$url = "http://query.yahooapis.com/v1/public/yql?q=select%20rate%2Cname%20from%20csv%20where%20url%3D'http%3A%2F%2Fdownload.finance.yahoo.com%2Fd%2Fquotes%3Fs%3D" . $currency_from . $currency_to . "%253DX%26f%3Dl1n'%20and%20columns%3D'rate%2Cname'&format=json";
		ob_start();
		$max_execution_time = ini_get( 'max_execution_time' );
		set_time_limit( 5 );
		$exchange_rate = json_decode( file_get_contents( $url ) );
		set_time_limit( $max_execution_time );
		ob_end_clean();
		return ( isset( $exchange_rate->query->results->row->rate ) ) ? floatval( $exchange_rate->query->results->row->rate ) : 0;
	}
}

if ( ! function_exists( 'alg_update_the_exchange_rates' ) ) {
	/**
	 * alg_update_the_exchange_rates.
	 *
	 * @version 2.0.0
	 * @since   2.0.0
	 * @todo     add price filter widget and sorting by price support
	 */
	function alg_update_the_exchange_rates() {
		$currency_from = get_option( 'woocommerce_currency' );
		foreach ( alg_get_enabled_currencies() as $currency ) {
			if ( $currency_from != $currency ) {
				$the_rate = alg_get_exchange_rate( $currency_from, $currency );
				if ( 0 != $the_rate ) {
					update_option( 'alg_currency_switcher_exchange_rate_' . $currency_from . '_' . $currency, $the_rate );
				}
			}
		}
		/*
		if ( 'yes' === get_option( 'alg_price_by_country_price_filter_widget_support_enabled', 'no' ) ) {
			alg_update_products_price_by_country();
		}
		*/
	}
}
