# Returns - RMA and Return Requests for WooCommerce

Returns adds a simple, self-service return (RMA) flow to WooCommerce. From **My Account → Orders**, a customer opens a return request on an eligible order: they pick the items, set a quantity, choose a reason and add an optional note. The request is saved as a private record, emailed to you, and given a status the customer can follow from their account. You review and manage every request in wp-admin and move it through a clear workflow.

## Features

- "Request a return" action on eligible orders in My Account (orders list and single order view).
- Item picker with per-item quantity, a reason dropdown and an optional note.
- Ownership-checked: only the logged-in owner of an order can request a return for it.
- Configurable eligible order statuses and a return window in days.
- Each request is saved as a private record and emailed to the merchant.
- Admin management screen with a status workflow: requested, approved, rejected, completed.
- Customer-facing status list in My Account so shoppers can track their returns.

## Installation

1. Upload the plugin to `/wp-content/plugins/returns`, or install it via **Plugins → Add New**.
2. Activate it. WooCommerce must be installed and active.
3. Configure eligible order statuses and the return window under **WooCommerce → Returns**.

## Frequently Asked Questions

**Does it process refunds?**
No. Returns is a focused request-and-status flow; it does not move money. Process any refund in the normal WooCommerce order screen — the return record keeps the request and its status in one place.

**Who can open a return request?**
Only the logged-in owner of an order, and only on orders within the configured eligible statuses and return window.

Built by WPPoland — https://plogins.com

License: GPL-2.0-or-later
