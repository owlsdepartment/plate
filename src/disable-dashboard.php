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

// Remove dashboard widgets.
add_action('wp_dashboard_setup', function () {
    global $wp_meta_boxes;

    $positions = [
        'activity' => 'normal',
        'incoming_links' => 'normal',
        'plugins' => 'normal',
        'recent_comments' => 'normal',
        'right_now' => 'normal',
        'primary' => 'side',
        'quick_press' => 'side',
        'recent_drafts' => 'side',
        'secondary' => 'side',
    ];

    $boxes = get_theme_support('plate-disable-dashboard');

    foreach (reset($boxes) as $box) {
        $position = $positions[$box] ?: 'normal';

        $box = sprintf('dashboard_%s', $box);

        unset($wp_meta_boxes['dashboard'][$position]['core'][$box]);
    }
});
