=== ACF qTranslate ===
Contributors: funkjedi
Tags: acf, advanced custom fields, qtranslate, add-on, admin
Requires at least: 3.5.0
Tested up to: 4.7.2
Version: 1.7.23
Stable tag: 1.7.23
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides qTranslate compatible ACF field types for Text, Text Area, WYSIWYG, Image and File.


== Description ==

This plugin provides qTranslate-X compatible ACF4 and ACF5PRO field types for Text, Text Area, WYSIWYG, Image and File. When adding a field to a field group these new field types will be listed under the qTranslate category in the Field Type dropdown.

= Field Types =
* qTranslate Text (type text, api returns text)
* qTranslate Text Area (type text, api returns text)
* qTranslate WYSIWYG (a wordpress wysiwyg editor, api returns html)
* qTranslate Image (upload an image, api returns the url)
* qTranslate File (upload a file, api returns the url)

The standard Text, Text Area and WYSIWYG field types can also be enabled for translation.

= Bug Submission =
https://github.com/funkjedi/acf-qtranslate/issues/


== Installation ==

1. Upload `acf-qtranslate` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

= Requires ACF4 or ACF5PRO =
* [ACF](https://wordpress.org/plugins/advanced-custom-fields/)
* [ACF5PRO](http://www.advancedcustomfields.com/pro/)

= Requires qTranslate-X Plugin =
* [qTranslate-X](https://wordpress.org/plugins/qtranslate-x/)


== Frequently Asked Questions ==

= What's the history behind this plugin? =
The plugin is based on code samples posted to the ACF support forums by taeo back in 2013.


== Screenshots ==

1. Shows the qTranslate Text and Image fields.


== Changelog ==

= 1.7.23 =
* Bug Fix: Added ACF 5.6 compatibility

= 1.7.22 =
* Bug Fix: Prevent LSBs from loading on all pages by default

= 1.7.21 =
* Bug Fix: Make compatible with older versions of ACF5 by checking for `acf_connect_attachment_to_post`

= 1.7.20 =
* Core: Added ability to display LSBs on specific pages

= 1.7.19 =
* Bug Fix: Fixed issue with saving File and Image fields after ACF 5.5.5 upgrade

= 1.7.18 =
* Core: Prevent error on older versions of ACF5
* Bug Fix: Updated ACF5 qTranslate File field to match recent ACF update

= 1.7.17 =
* Core: Initialize on either `plugins_loaded` or `after_setup_theme`
* Core: Drop support for qTranslate Plus, mqTranslate, and zTranslate

= 1.7.16 =
* Bug Fix: Fixed ACF4 support for standard WYSIWYG field
* Bug Fix: Updated ACF4 qTranslate WYSIWYG field
* Bug Fix: Prevent translation of key `acf-field-group` fields

= 1.7.15 =
* Core: Display LSB on ACF Option pages

= 1.7.14 =
* Bug Fix: Bumped `after_setup_theme` priority to fix ACF4 field inclusion

= 1.7.13 =
* Bug Fix: ACF5 Image selection fix

= 1.7.12 =
* Bug Fix: Fixed ACF5 Image/File edit and delete buttons

= 1.7.11 =
* Core: Enable support for ACF included within theme
* Bug Fix: Fixed do_action support when removing repeater rows
* Bug Fix: Removing qTranslateConfig.qtx.addContentHooksTinyMCE calls

= 1.7.10 =
* Bug Fix: (HeikoMamerow) ACF5 File compatibility fix
* Bug Fix: (Tusko) ACF5 Image compatibility fix
* Bug Fix: (Tusko) Replace deprecated `acf/input/admin_footer_js` action
* Bug Fix: (Tusko) Switcher styles fixed
* Bug Fix: (fburatti) ACF4 WYSIWYG WP 4.3 compatibility fix
* Bug Fix: (fburatti) WYSIWYG was appending all values together
* Bug Fix: (fburatti) WP 4.3 PHP warning in WYSIWYG value

= 1.7.9 =
* Bug Fix: WYSIWYG was creating second acf_settings wp_editor instance

= 1.7.8 =
* Core: Updated WYSIWYG monkey patches for qTranslate Plus
* Bug Fix: E_NOTICE in ACF4 field types
* Bug Fix: E_NOTICE on admin.php pages when Options addon is missing

= 1.7.7 =
* Core: Added configuration page
* Core: Support for Standard Field Types when using qTranslate-X is disabled by default
* Core: Display standard language toggles when using qTranslate-X
* Bug Fix: qTranslate-X problem with content from languages being mixed
* Bug Fix: Corrected repeater problems introduced by qTranslate-X update

= 1.7.6 =
* Core: qTranslate-X support for Text, Text Area and WYSIWYG inside repeater
* Bug Fix: Display qTranslate-X switcher for qTranslate Field Types
* Bug Fix: Incorrectly loading in Media Library and Widgets screens

= 1.7.5 =
* Core: Updates to README file
* Bug Fix: Updated to visible ACF fields detection

= 1.7.4 =
* Bug Fix: Only load admin javascript when there are visible ACF fields

= 1.7.3 =
* Core: Removed namespaces to make code compatible with PHP 5.2

= 1.7.2 =
* Bug Fix: Corrected misnamed variable
* Bug Fix: ACF5 issues using WYSIWYG with the repeater field type
* Bug Fix: qTranslate-X saving content using WYSIWYG with repeater field type
* Core: Support for `qtrans_edit_language` cookie set by qTranslate-X
* Core: Keep switches between Visual/Html modes in sync across languages

= 1.7.1 =
* Core: Added back ACF5 support for WYSIWYG
* Core: Added qTranslate-X support for the standard WYSIWYG field type
* Core: Bumped version requirement to match ACF
* Bug Fix: qTranslate-X switcher showing up on every admin page

= 1.7 =
* Core: Refactor of codebase
* Core: Support for qTranslate-X language switchers

= 1.6 =
* Core: Added ACFv4 support for qTranslate-X

= 1.5 =
* Core: Added compatibility for qTranslate-X
* Bug Fix: Remove the broken ACF5 WYSIWYG implementation

= 1.4 =
* Core: Added support for ACF5
* Core: Tested compatibility with mqTranslate

= 1.3 =
* Core: Updated styles for Wordpress 3.8
* Bug Fix: qTranslate bug with multiple WYSIWYG editors

= 1.2 =
* Bug Fix: qTranslate bug with multiple WYSIWYG editors

= 1.1 =
* Core: Added support for Image Fields. Thanks to bookwyrm for the contribution.

= 1.0 =
* Initial Release. Thanks to taeo for the code samples this plugin was based on.


== Upgrade Notice ==

Bug Fix: Fixed issue with saving File and Image fields after ACF 5.5.5 upgrade
