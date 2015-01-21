=== Diver ===
Contributors: Leandro Arndt
Tags: div, html, tag, html tag, format, formatting, shortcode
Requires at least: 2.9
Tested up to: 4.1
License: BSD License
License URI: https://github.com/leandroarndt/diver/raw/master/license.txt

Add HTML &lt;div&gt; tags directly on the visual editor. Supports css classes
and media embedding parameters. Use shortcode [div].

== Description ==

Add HTML &lt;div&gt; tags directly on the visual editor using [div] shortcode.
Usage:

	[div]Your content here[/div]
	[div class=\"your css classes\"]Content[/div]
	[div embed=\"http://em.bd/123\"]
	[div embed=\"http://em.bd/123\" class=\"your css classes\"]
	[div class=\"your css classes\"]http://em.bd/123[/div]

etc.

Diver development home: http://github.com/leandroarndt/diver/

== Frequently Asked Questions ==

=1. Do I heave to close the [div] shortcode?=
The closing ([/div]) shortcode is optional. However note that you will have
only the embed attribute to enter contents if you don't close the shortcode
manually.

=2. Does [div] shortcode allow code injection?=
No. All content from \"class\" and \"embed\" parameters is sanitized and quotes
are substituted by the corresponding HTML entities.

=3. May the user create a CSS style different from those on the stylesheet?=
No. Diver Wordpress plugin is intended to respect theme styles and be away from
direct style definitions. Style definition and content shouldn\'t be mixed up,
should them?

== Changelog ==

* 2015-01-15: First release.
* 2015-01-21: Better readme.txt formatting.