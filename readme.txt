=== Spark Bootstrap Starter ===

Tags: blog, custom-menu, featured-images, threaded-comments, translation-ready, right-sidebar, custom-background, e-commerce, theme-options, sticky-post, full-width-template
Requires at least: Wordpress 4.7
Tested up to: Wordpress 6.0
Required PHP: 5.6

This Theme is distributed under the terms of the GNU GPL.

License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

A WordPress starter theme based on "_s" (by Automattic, the main people behind WordPress development), Twitter Bootstrap
and Font Awesome. This theme, like WordPress, is licensed under the GPL. You can use this theme as base for your next WordPress theme project and you are allowed to remove the link at the footer or do whatever you want. Page templates includes Right-sidebar (default page template), Left-Sidebar, Full-Width, Blank with container, Blank without container Page. Other features - Currently using Bootstrap v4.0.0-beta.2 , Widgetized footer area, WooCommerce ready, Compatible with Contact Form 7, Compatible with Visual Composer, Compatible with Elementor Page Builder. 

This theme, like WordPress, is licensed under the GPL. You can use this theme as base for your next WordPress theme project and you are allowed to remove the link at the footer or do whatever you want.

This theme uses Composer to load required PHP files. It also and employs namespaces to keep PHP function names simple. Simply switch the namespace from 'sparkt' to something appropriate for your project. From the theme's top-lvel directory, run the following command in a terminal to generate the necessary autoload files:
$ composer dump-autoload 
 
Gulp is used to concatenate and minify the theme's CSS files. There is no CSS-preprocessing. To set the Gulp watcher to minify and concatenate the theme's CSS files, terminal into the theme's '<theme name>/inc/assets' directory and run: 
$ gulp watchFiles

Take a look at 'gulpfile.js' in the theme's '<theme name>/inc/assets' directory for more details on the available build scripts. 

Page templates
* Right-sidebar (default page template)
* Left-Sidebar
* Full-Width
* Blank with container
* Blank without container Page
    NOTE: Unused template files reside in the 'extra-tpls' directory. To use one of these files, first move it up one level to the main theme directory.

Other features:
* Currently using Bootstrap v4.3.1
* Font Awesome integrated
* Widgetized footer area
* WooCommerce ready
* Compatible with Contact Form 7
* Compatible with Visual Composer
* Compatible with Elementor Page Builder

Preset Styles:
Typography pairing is perhaps the single most frustrating and time-consuming task you’ll face as a developer when starting a new website.

So, we search the web for some stupendously stunning combinations, with the aim of giving you the perfect font combinations that you can use right away.

    Default Style 
    Poppins / Lora 
    Poppins / Poppins 
    Oswald / Muli 
    Montserrat / Merriweather 
    Roboto / Roboto 
    Arbutus Slab / Open Sans 
    Montserrat / Open Sans 

Quick Tips On Using  The Theme:
    To make your life easier for everyone, the Theme is loaded with the BEST Google font combinations that you can select and use right away. Just go to:

    Dashboard > Appearance > Customize > Preset Styles

    You can easily add awesome icons to your pages and posts.
    To display , use the code

    <i aria-hidden="true"></i>

== Installation ==
Once the theme is installed, run the following command in terminal from the main theme directory:
$ composer dump-autoload

== Frequently Asked Questions ==

= Does this theme support any plugins? =
Spark includes support for Infinite Scroll in Jetpack.

== Credits ==
* Based on  WordPress Bootstrap Starter Theme, Copyright (c) 2016 by Afterimage Designs (http://afterimagedesigns.com/),
[GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html), version 3.3.3 - https://afterimagedesigns.com/wp-bootstrap-starter/
* Based on Underscores http://underscores.me/, (C) 2012-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* Bootstrap http://getbootstrap.com, (C) 2011-2015 Twitter, Inc., [MIT] (https://github.com/twbs/bootstrap/blob/master/LICENSE)
* WP Bootstrap Navwalker https://github.com/wp-bootstrap/wp-bootstrap-navwalker, [GPLv3](https://www.gnu.org/licenses/gpl-3.0.en.html)
* Font Awesome icons, Copyright (C) Dave Gandy License: SIL Open Font License, version 1.1. - http://fontawesome.io/

== Changelog ==
1.0.0
Released: May 15, 2022
Initial release

1.1.0
Released: June 10, 2022
Composer to manage non-class-based required files. 
