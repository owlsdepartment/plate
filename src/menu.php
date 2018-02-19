<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

// Remove menu and submenu items.
add_action('admin_menu', function () {
    $items = get_theme_support('plate-menu');

    foreach (reset($items) as $item) {
        if (strpos($item, '?') !== false) {
            // edit.php?post_type=foo should be removed with remove_menu_page('edit.php?post_type=foo')
            if (strpos($item, 'edit.php?post_type=') === 0) {
                remove_menu_page($item);
            } else {

                $path = parse_url($item,  PHP_URL_PATH);
                $query = parse_url($item,  PHP_URL_QUERY);
                $query_value = explode('=', $query);
                if (isset($query_value[1])) {
                    $pageName = $query_value[1];

                    // admin.php?page=foo should be removed with remove_menu_page('foo')
                    if (strpos($item, 'admin.php') === 0) {
                        remove_menu_page($pageName);
                    } else {
                        remove_submenu_page($path, $pageName);
                    }
                }
            }
        } else {
            remove_menu_page($item);
        }
    }
}, PHP_INT_MAX);
