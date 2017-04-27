=== Currency Switcher for WooCommerce ===
Contributors: algoritmika,anbinder
Tags: woocommerce,currency switcher,multicurrency
Requires at least: 4.1
Tested up to: 4.7
Stable tag: 2.1.1
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Currency Switcher for WooCommerce.

== Description ==

Currency Switcher for WooCommerce.

= Features =
* Automatic currency exchange rates updates.
* Prices on per product basis.
* Currency by country (i.e. by IP).
* Option to revert to original currency on checkout.
* Various currency switcher placement and format options.

= Feedback =
* We are open to your suggestions and feedback. Thank you for using or trying out one of our plugins!
* Drop us a line at [www.algoritmika.com](http://www.algoritmika.com).

= More =
* Visit the [Currency Switcher for WooCommerce plugin page](http://coder.fm/item/currency-switcher-woocommerce-plugin/).

== Installation ==

1. Upload the entire 'currency-switcher-woocommerce' folder to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Start by visiting plugin settings at WooCommerce > Settings > Currency Switcher.

== Changelog ==

= 2.1.1 - 31/12/2016 =
* Dev - Admin - General - "Advanced: Fix Mini Cart" option added.
* Dev - Admin - General - "Switcher Format" option added.
* Dev - Admin - General - "Advanced: Additional Price Filters" option added.
* Dev - Language (POT) file updated.
* Tweak - Tag added.

= 2.1.0 - 08/12/2016 =
* Dev - Admin - General - "Advanced: Disable on URI" option added.

= 2.0.0 - 08/12/2016 =
* Dev - Admin - Exchange Rates - "Reset All Rates" button added.
* Dev - Admin - Currencies - "Update All Exchange Rates Now" button added.
* Dev - Admin - Currencies - "Auto Generate PayPal Supported Currencies" button added.
* Dev - "Currency Countries (by IP)" section added.
* Fix - `load_plugin_textdomain` moved to constructor.
* Tweak - `get_woocommerce_currency()` replaced with `get_option( 'woocommerce_currency' )`.
* Tweak - Admin - Exchange Rates - Full currency name and number added.
* Tweak - Admin - Exchange Rates - "Grab rate" button restyled.
* Tweak - Admin - Currencies - "Currency (Shop's Default)" added.
* Tweak - Admin - Currencies - Code added to currency name in list.
* Tweak - Tooltip added to custom number admin settings.
* Tweak - Check for Pro rewritten.
* Tweak - Author added.
* Tweak - Major code refactoring.

= 1.0.1 - 04/08/2016 =
* Fix - `custom_number` replaced with `alg_custom_number` - this fixes the issue with "Total Currencies" field duplicating.
* Dev - Language (POT) file added.

= 1.0.0 - 24/07/2016 =
* Initial Release.

== Upgrade Notice ==

= 1.0.0 =
This is the first release of the plugin.
