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
 * Plugin Name: Plate
 * Description: The WordPlate helper plugin.
 * Author: Vincent Klaiber
 * Author URI: https://vinkla.com
 * Version: 1.0.0
 * Plugin URI: https://github.com/wordplate/plate
 */

add_action('after_setup_theme', function () {
    require_if_theme_supports('plate-clean-dashboard', __DIR__.'/src/clean-dashboard.php');
    require_if_theme_supports('plate-clean-editor', __DIR__.'/src/clean-editor.php');
    require_if_theme_supports('plate-clean-menu', __DIR__.'/src/clean-menu.php');
    require_if_theme_supports('plate-clean-tabs', __DIR__.'/src/clean-tabs.php');
    require_if_theme_supports('plate-clean-toolbar', __DIR__.'/src/clean-toolbar.php');
    require_if_theme_supports('plate-cleanup', __DIR__.'/src/cleanup.php');
    require_if_theme_supports('plate-footer', __DIR__.'/src/footer.php');
    require_if_theme_supports('plate-login', __DIR__.'/src/login.php');
    require_if_theme_supports('plate-permalink', __DIR__.'/src/permalink.php');
}, 100);
