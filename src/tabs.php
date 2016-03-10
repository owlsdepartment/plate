<?php

/*
 * This file is part of WordPlate.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$tabs = reset(get_theme_support('plate-tabs'));

if (in_array('help', $tabs)) {
    /*
     * Remove help tab.
     */
    add_action('admin_head', function () {
        $screen = get_current_screen();
        $screen->remove_help_tabs();
    });
}

if (in_array('screen-options', $tabs)) {
    /*
     * Remove screen tab.
     */
    add_filter('screen_options_show_screen', function () {
        return false;
    });
}
