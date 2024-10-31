=== Plugin Name ===
Tags: news ticker, awesome ticker, ticker, ticker plugin,jQuery ticker effect, headlines, ticker headlines, rapid nice news ticker
Requires at least: 3.0.1
Tested up to: 3.9.1
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Rapid Nice News Ticker is a super lightweight plugin for your wordpress website. 

== Description ==

This plugin will enable news ticker in your wordpress theme. You can embed news ticker via shortcode in anywhere you want, even in theme files.

Wanna see how it works? Click here: http://rapiditsolution.ciki.me/rapid/rapid-nice-news-ticker-plugin/

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `rapid-nice-news-ticker` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php do_action('[news_ticker]'); ?>` in your templates

ShortCodes

<strong>General Ticker</strong>
<pre>[news_ticker id="1"]</pre>


<strong>Ticker form category</strong>
<pre>[news_ticker id="2" category="1"]</pre>


<strong>Speed change (.10 is default)</strong>
<pre>[news_ticker id="3" speed=".20"]</pre>

 
<strong>Ticker Form Custom Post</strong>
<pre>[news_ticker id="4" posttype="custom-post-name"]</pre>


<strong>Ticker Form Custom Post with category</strong>
<pre>[news_ticker id="5" posttype="custom-post-name" cat_slug="taxonomy_name" cat="your-category-name"]</pre>


== Frequently Asked Questions ==

= How do I install this plugin? =

You can install as others regular wordpress plugin. No different way. Please see on installation tab.

= Why this plugin doesn't support ticker colour? =

Colour Support will be enable next version. Wait for next version. 

== Screenshots ==

1. Demo Live Plugin 


== Changelog ==

= 1.0 =
* Initial Release