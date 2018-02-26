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

add_filter('rest_authentication_errors', function () {
    $message = get_theme_support('plate-disable-api')[0];

    if (empty($message)) {
        $message = 'The REST API on this site has been disabled.';
    }

    return new WP_Error('rest_disabled', $message, [
        'status' => rest_authorization_required_code(),
    ]);
});
