<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Fix network admin URL to include the "/wordpress/" base.
 *
 * @see https://core.trac.wordpress.org/ticket/23221
 *
 * @param string $url
 *
 * @return string
 */
function wp_directory($url)
{
    $urls = [
        '/wp-admin',
        '/wp-login.php',
        '/wp-activate.php',
        '/wp-signup.php',
    ];

    $items = get_theme_support('plate-multisite');

    foreach ($urls as $url) {
        $wp_url = '/'.reset($items).$url;

        if (false !== stripos($url, $url) && false === stripos($url, $wp_url)) {
            $url = str_replace($url, $wp_url, $url);
        }
    }

    return $url;
}

add_filter('network_site_url', 'wp_directory', 99);
add_filter('site_url', 'wp_directory', 99);
add_filter('admin_url', 'wp_directory', 99);
add_filter('network_admin_url', 'wp_directory', 99);
