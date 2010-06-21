NSM Morphine theme addon for EE 2.0
===================================

This addon is intended to extended the default ExpressionEngine 2.0 theme with new styles specifically for addon development. It's still in heavy development and likely to change.

Note: Activating the accessory won't add a new tab to the control panel footer.

Installation & Activation
-------------------------

1. Download the master branch and extract the zip to your desktop. 
2. Rename the folder to `nsm_morphine_theme` and drop it in the `/system/expressionengine/thirdparty/` directory of your ExpressionEngine install
4. Move, copy or symlink `/themes/third_party/nsm_morphine` into `/themes/third_party/`
5. Activate the accessory for all pages and all member groups

For developers
==============

If you want to display the CP module page and custom field tests update the following class values in `upd.nsm_morphine_theme.php` before installing:

	static $has_cp_backend = TRUE;
	static $has_publish_fields = TRUE;
	static $has_tabs = TRUE;
