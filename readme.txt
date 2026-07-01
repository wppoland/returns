=== Plogins Returns - Returns and RMA for WooCommerce ===
Contributors: motylanogha
Tags: woocommerce, returns, rma, refund, return request
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Requires Plugins: woocommerce
Stable tag: 0.1.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Let customers request returns/refunds from their account and manage RMAs in the admin.

== Description ==

Returns adds a simple, self-service return (RMA) flow to WooCommerce. From **My
Account → Orders**, a customer opens a return request on an eligible order: they
pick the items, set a quantity, choose a reason and add an optional note. The
request is saved as a private record, emailed to you, and given a status the
customer can follow from their account.

You review and manage every request in wp-admin under **WooCommerce → Return
Requests**, moving each one through requested, approved, rejected or completed.
Whatever status you set is the status the customer sees in their account.

This is a request-and-status plugin: it does not move money. Process any refund
in the normal WooCommerce order screen; the return record keeps the request and
its status in one place.

Source code and bug reports live at https://github.com/wppoland/plogins-returns.

= Documentation and links =

* **Documentation** - https://plogins.com/plogins-returns/docs/
* **Plugin page** - https://plogins.com/plogins-returns/
* **Source code** - https://github.com/wppoland/plogins-returns
* **Bug reports and feature requests** - https://github.com/wppoland/plogins-returns/issues


= Features =

* "Request a return" action on eligible orders in My Account (orders list and single order view).
* Item picker with per-item quantity, a reason dropdown and an optional note.
* Ownership-checked: only the logged-in owner of an order can request a return for it.
* Configurable eligible order statuses and a return window (in days).
* Each request is saved as a private custom post type and emailed to the store admin.
* Admin management screen with a status workflow: requested, approved, rejected, completed.
* Customer-facing status list in My Account so shoppers can track their returns.
* Accessible markup with a responsive layout; storefront styles inherit your theme's colours, so they sit in light or dark themes without extra work.
* Translation ready (POT included) and clean uninstall.
* HPOS and cart/checkout blocks compatible.

== Installation ==

1. Upload the plugin to `/wp-content/plugins/returns`, or install via Plugins → Add New.
2. Activate it. WooCommerce must be installed and active.
3. Go to **WooCommerce → Returns** to choose eligible order statuses and the return window.
4. Customers can now open a return from **My Account → Orders** on any eligible order.

== Frequently Asked Questions ==

= Does it require WooCommerce? =

Yes. WooCommerce must be installed and active.

= Which orders can be returned? =

Orders in the statuses you choose under WooCommerce → Returns (Completed and
Processing by default), within the return window you set. Set the window to 0 to
remove the time limit.

= Does it issue refunds automatically? =

No. This MVP records the request and tracks its status. Process any refund in the
normal WooCommerce order screen; the return record stays in sync with the status
you set.

= Where do return requests go? =

Each submission is emailed to the store admin and saved as a private "Return
Request" record under the WooCommerce menu in wp-admin.

= Can a customer return the same order twice? =

No. Once a return request exists for an order, the action is hidden and a notice
is shown instead.


= Does this plugin work on WordPress Multisite? =

Yes. This plugin is compatible with WordPress Multisite. Network activate it or activate it on individual sites; each site keeps its own settings and data.

== Screenshots ==

1. The "Request a return" action on an order in My Account.
2. The return request form: item picker, reason and note.

== External Services ==

Returns connects to no external services. It sends no data off your site and loads no third-party scripts, fonts or APIs. Each return request is stored locally in WordPress as a private `returns_rma` custom post type (with `_returns_*` post meta for the order, customer, items, reason, note and status), and the plugin's configuration lives in the `returns_settings` and `returns_db_version` options. The admin notification email is sent through your site's own WordPress mail (`wp_mail`), so delivery uses whatever mail setup your server or SMTP plugin already provides.

== Changelog ==

= 0.1.3 =
* Renamed to Plogins Returns for WooCommerce for a more distinctive plugin name.

= 0.1.2 =
* `Returns\Support\Refunds` helper with `returns/order_refund` action for PRO refund automation.

= 0.1.1 =
* `Returns\Support\Reasons` with `returns/reasons` and `returns/reason_label` filters for PRO analytics and extensions.

= 0.1.0 =
* Initial release: self-service return requests from My Account, item picker with reason and note, ownership checks, configurable eligibility and window, merchant email, a private return-request record and an admin status workflow.
