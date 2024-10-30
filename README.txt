=== Materialize Accordions ===
Contributors: mhimed
Donate link: https://www.paypal.me/marvelmoe
Tags: accordion, accordions, collapisbile, faq, tabs, deep linking, materialize
Requires at least: 4.0
Tested up to: 6.6.2
Stable tag: 1.7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Materialize Accordions allows you to add a simple accordion with titles and body text via a shortcode.


== Description ==

This plugin allows you to add a collapsible accordion with a title and body text via shortcode on any page or post. It is based off the Materialize CSS framework. The interface is simple allowing you to sort sections around easily. It is fully responsive and mobile friendly and allows for keyboard accessibility. This plugin works with the Classic editor or the Gutenberg shortcode block and should have no conflicts with other plugins. For more options in the settings and support, please get the <a href="https://cool-wp-plugins.vercel.app">PRO version</a>. 

If you'd like to see a demo of the accordions, please go <a href="https://materialize-plugins.github.io/demo">here</a>. 

Note: Installing and activating the PRO version will not affect any accordions already published; they will still be there. The free version will automatically be deactivated and you can delete it afterwards.

###Plugin Features

**Simple User Interface**
Everything you need to setup an accordion, drag and drop them, and add more blocks/sections is on one page

**Unlimited Accordions**
There is no limit on how many accordions you make

**Display with Shortcode**
Accordion and tabs can be displayed anywhere via shortcode in page, post content, sidebar or widgets and gutenberg blocks: [MA_shortcode id=XX] 

 **Full Keyboard Accessibility**
All accordion sections can be accessed using the Tab key on the keyboard

 **Open and Close All Tabs**
You can close and open all links/tabs at once

 **Deep Linking**
Tab links can be opened directly in a browser by adding #1 - #10 to the end of the url where an accordion exists on a page or post

**Custom CSS and JS**
Option is available to add CSS or JavaScript in the admin area

**Small File Sizes**
Only 2 files and they are only loaded on the pages or posts that you actually have a shortcode on

 **Easy Migration**
Get the pro version for 10+ more settings options and migrate all published accordions with absolute ease

 
 == Installation ==

1. Upload the materialize_accordions.zip folder to the '/wp-content/plugins/' directory.
2. Activate the "accordion-and-accordion-slider" list plugin through the 'Plugins' menu in WordPress.
3. Use the shortcode in post or page with XX being your post/page ID
<code> [MA_shortcode id=XX] </code>

= How to install : =
[youtube https://www.youtube.com/watch?v=Mzh7LfXb1n0]

 ==Screenshots ==

1. Full view of the admin post screen
2. View of display settings
3. View of example accordion on a page

== Frequently Asked Questions ==

Q- Can it be used directly in a template?

A- Yes, it can be done. You or your developer can add this to your template file: `<?php echo do_shortcode('[MA_shortcode id=XX]'); ?>` and replace [MA_shortcode id=XX] with your shortcode.

Q- Is it worth it to get the pro version?

A- Heck yeah.  More options is better…right?

= Get Pro Features & support =

Get support from our team and pro features with <a href="https://cool-wp-plugins.vercel.app">Materialize Accordions Pro</a>.

== Changelog ==
= 1.7.0 =
* Updated TinyMCE editor settings 

= 1.6.1 =
* Verified compatibility with WP Version 6.6

= 1.6.0 =
* Added option for revisions

= 1.5.10 =
* Verified compatibility with WP Version 6.3

= 1.5.9 =
* Verified compatibility with WP Version 6.1

= 1.5.8 =
* Ensured compatibility with WP Version 6.0

= 1.5.7 =
* Checked compatibility with WP Version 5.9

= 1.5.6 =
* Checked compatibility with WP 5.8

= 1.5.5 =
* Made Compatible with WP 5.7 & small update to CPT args 

= 1.5.4 =
* Updated jQuery UI file

= 1.5.3 =
* Made Compatible with WP 5.6 & minor backend change

= 1.5.2 =
* Fixed minor accessibility issues 

= 1.5.1 =
* Minor backend change

= 1.5.0 =
* Added function for minus on expanded tabs & ability to nest shortcodes

= 1.4.1 =
* Minor css change

= 1.4.0 =
* Ensured scripts are loaded only when shortcode is on a page & updated codemirror

= 1.3.2 =
* Minor admin change

= 1.3.1 =
* Fixed minor bug

= 1.3.0 =
* Added custom css and js area in admin

= 1.2.0 =
* Added duplication feature

= 1.1.0 =
* Moved all front end js/jquery to one file & removed materialize js library
* Updated names of public css and js files 

= 1.0.0 =
* Initial release
