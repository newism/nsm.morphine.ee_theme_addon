NSM Morphine theme addon for EE 2.0
===================================

This addon is intended to extended the default ExpressionEngine 2.0 theme with new styles specifically for addon development. It's still in heavy development and likely to change.

The addon comes in two parts:

1. The accessory `/acc.nsm_morphine_theme.php` &
2. The theme files `/themes`

Installation & Activation
-------------------------

1. Download the latest tag / or master branch
2. Rename the download folder to `nsm_morphine_theme`
3. Drop in the `/system/expressionengine/thirdparty/` directory of your ExpressionEngine install
4. Copy of symlink `/themes/cp_themes/default/nsm_morphine` into `/themes/cp_themes/default/`
5. Activate the accessory for all pages and all member groups

Notes
-----

Activating the accessory won't add a new tab to the control panel footer.

For developers
==============

If you want to display the CP module page and custom field tests update the following class values in `upd.nsm_morphine_theme.php` before installing:

	static $has_cp_backend = TRUE;
	static $has_publish_fields = TRUE;
	static $has_tabs = TRUE;