# DevPress WooCommerce Boilerplate ![Testing status](https://github.com/devpress/devpress-woocommerce-boilerplate/actions/workflows/php-tests.yml/badge.svg?branch=master)

-   Requires PHP: 7.0
-   WP requires at least: 6.0
-   WP tested up to: 6.0
-   WC requires at least: 4.8.1
-   WC tested up to: 6.1.0
-   Stable tag: 1.0.0
-   License: [GPLv3 or later License](http://www.gnu.org/licenses/gpl-3.0.html)

## Description

The DevPress WooCommerce Boilerplate is a foundation for building high-quality WooCommerce plugins. Consider using it as a starting point and adapt as you see fit if your plugin fits the following criteria:

-   Requires automated tests.
-   Adheres to WordPress coding standands.
-   Requires translations. (Optional)

If you do not plan to write automated tests or adhere to WordPress coding standards, this may not be the best starting point for you.

This boilerplate does not include a build process for compiling assets (js, scss, etc.) If you need that, I'd recommend dropping in package.json from the [\_s boilerplate](https://github.com/Automattic/_s) to this plugin and then adapating it to your needs.

## Automated Tests

![Testing status](https://github.com/devpress/devpress-woocommerce-boilerplate/actions/workflows/php-tests.yml/badge.svg?branch=master)

PHPUnit, Composer and WP-CLI are required for running unit tests.

Local testing set up instructions:
https://github.com/devpress/devpress-woocommerce-boilerplate/wiki/Unit-Tests

## Code Standards

The WordPress VIP minimum standards and WordPress-Extra code standards are used for this project. They will be installed via composer.

To run the code checks from the command line run: `vendor/bin/phpcs`

## Translations

-   Run `composer make-pot` to update the translation file.

## Changelog

**1.0.0 (09.11.22)**

-   Initial Release.
