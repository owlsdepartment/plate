# Plate

The WordPlate framework helper plugin.

[![Latest Version](https://img.shields.io/github/release/wordplate/plate.svg?style=flat)](https://github.com/wordplate/plate/releases)
[![License](https://img.shields.io/packagist/l/wordplate/plate.svg?style=flat)](https://packagist.org/packages/wordplate/plate)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
composer require wordplate/plate
```

## Usage

##### Cleanup and enhance WordPress defaults

```php
add_theme_support('plate-cleanup');
```

##### Remove menu items

```php
add_theme_support('plate-clean-menu', [
   'comments',
   'dashboard',
   'links',
   'media',
]);
```

##### Remove meta boxes in post editor

```php
add_theme_support('plate-clean-editor', [
    'commentsdiv',
    'commentstatusdiv',
    'linkadvanceddiv',
    'linktargetdiv',
    'linkxfndiv',
    'postcustom',
    'postexcerpt',
    'revisionsdiv',
    'slugdiv',
    'sqpt-meta-tags',
    'trackbacksdiv',
    //'categorydiv',
    //'tagsdiv-post_tag',
]);
```

##### Remove dashboard widgets

```php
add_theme_support('plate-clean-dashboard', [
    'dashboard_activity',
    'dashboard_incoming_links',
    'dashboard_plugins',
    'dashboard_recent_comments',
    'dashboard_primary',
    'dashboard_quick_press',
    'dashboard_recent_drafts',
    'dashboard_secondary',
    //'dashboard_right_now',
]);
```

##### Remove links from admin toolbar

```php
add_theme_support('plate-clean-dashboard', [
  'comments',
  'wp-logo',
  'edit',
  'appearance',
  'view',
  'new-content',
  'updates',
  'search',
]);
```

##### Remove dashboard tabs

```php
add_theme_support('plate-clean-tabs', ['help', 'screen-options']);
```

##### Set custom login logo

```php
add_theme_support('plate-login', '/assets/images/logo.png');
```

##### Set custom footer text

```php
add_theme_support('plate-footer', 'Thank you for creating with WordPlate.');
```

## License

Plate is licensed under [The MIT License (MIT)](LICENSE).
