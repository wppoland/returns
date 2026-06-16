=== Returns - RMA and Return Requests for WooCommerce ===
Contributors: wppoland
Tags: woocommerce, returns, rma, refund, return request
Requires at least: 6.5
Tested up to: 7.0
Requires PHP: 8.1
Requires Plugins: woocommerce
Stable tag: 0.1.0
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

Source code and bug reports live at https://github.com/wppoland/returns.

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

== Screenshots ==

1. The "Request a return" action on an order in My Account.
2. The return request form: item picker, reason and note.
3. The customer's return-status list in My Account.
4. Managing a return request and its status in wp-admin.
5. The Returns settings screen under WooCommerce.

== Changelog ==

= 0.1.0 =
* Initial release: self-service return requests from My Account, item picker with reason and note, ownership checks, configurable eligibility and window, merchant email, a private return-request record and an admin status workflow.
