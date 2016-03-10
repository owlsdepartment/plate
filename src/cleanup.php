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
 * Set custom jpeg picture quality.
 */
add_filter('jpeg_quality', function () {
    return 100;
});

/*
 * Remove special characters in file names.
 */
add_filter('sanitize_file_name', function ($name) {
    return remove_accents($name);
}, 10, 2);

/*
 * Remove Microsoft Word formatting for TinyMCE.
 */
add_filter('content_save_pre', function ($content) {
    return preg_replace('/<!--\[if gte mso.*?-->/ms', '', $content);
});

/*
 * Add title tag theme support.
 */
add_theme_support('title-tag');

/*
 * Add HTML5 support.
 */
add_theme_support('html5', [
    'caption',
    'comment-form',
    'comment-list',
    'gallery',
    'search-form',
    'widgets',
]);
