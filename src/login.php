<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
 * Set custom login logo.
 */
add_action('login_head', function () {
    $path = get_theme_support('plate-login');

    echo sprintf('<style> .login h1 a { background-image: url(%s); } </style>', reset($path));
});

/*
 * Set custom login logo url.
 */
add_filter('login_headerurl', function () {
    return get_bloginfo('url');
});

/*
 * Set custom login error message.
 */
add_filter('login_errors', function () {
    return '<strong>Whoops!</strong> Looks like you missed something there. Have another go.';
});
