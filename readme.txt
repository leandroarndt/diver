=== Diver ===
Contributors: Leandro Arndt
Tags: div, html, tag, html tag, format, formatting
Requires at least: 2.9
Tested up to: 4.1
License: BSD License
License URI: https://github.com/leandroarndt/diver/license.txt

Add HTML div tags directly on the visual editor. Supports css classes and media embedding parameters.

== Description ==

Add HTML div tags directly on the visual editor using [div] shortcode. Usage:

[div]Your content here[/div]
[div class=\"your css classes\"]Content[/div]
[div embed=\"http://em.bd/123\"]
[div embed=\"http://em.bd/123\" class=\"your css classes\"]
[div class=\"your css classes\"]http://em.bd/123[/div]
etc.

Diver development home: http://github.com/leandroarndt/diver/

== Frequently Asked Questions ==

1. Does [div] shortcode allow code injection?
No. All content from \"class\" and \"embed\" parameters is filtered and quotes are substituted by the corresponding HTML entities.

2. May the user create a CSS style different from those on the stylesheet?
No. Diver Wordpress plugin is intended to respect theme styles and be away from direct style definitions. Style definition and content shouldn\'t be mixed up, should them?

== Changelog ==

* 2015-01-15: First commit.
