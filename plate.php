<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/plate
 */

/*
 * Plugin Name: Plate
 * Description: A theme support plugin for WordPlate.
 * Author: WordPlate
 * Author URI: https://wordplate.github.io/
 * Version: 6.0.1
 * Plugin URI: https://github.com/wordplate/plate
 */

declare(strict_types=1);

add_action('after_setup_theme', function () {
    require_if_theme_supports('plate-disable-dashboard', __DIR__ . '/src/disable-dashboard.php');
    require_if_theme_supports('plate-disable-menu', __DIR__ . '/src/disable-menu.php');
    require_if_theme_supports('plate-disable-toolbar', __DIR__ . '/src/disable-toolbar.php');
    require_if_theme_supports('plate-footer-text', __DIR__ . '/src/footer-text.php');
    require_if_theme_supports('plate-login-logo', __DIR__ . '/src/login-logo.php');
    require_if_theme_supports('plate-permalink', __DIR__ . '/src/permalink.php');
}, 100);
