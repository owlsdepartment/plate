# Plate

The WordPlate helper plugin.

[![Latest Version](https://img.shields.io/github/release/wordplate/plate.svg?style=flat)](https://github.com/wordplate/plate/releases)
[![License](https://img.shields.io/packagist/l/wordplate/plate.svg?style=flat)](https://packagist.org/packages/wordplate/plate)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
composer require wordplate/plate
```

## Theme Support

Below is a list of handy helpers this plugins provides.

#### `plate-theme`

This feature will enhance the WordPress experience by:
- Add HTML5 support.
- Set JPEG picture quality to 100%.
- Remove special characters in file names.
- Remove the welcome panel.
- Remove Microsoft Word formatting for TinyMCE.
- Add title tag theme support.

```php
add_theme_support('plate-theme');
```

#### `plate-menu`

This feature accepts an array of menu items you want to hide in the WordPress administrator dashboard.

```php
add_theme_support('plate-menu', [
   'comments',
   'dashboard',
   'links',
   'media',
]);
```

#### `plate-editor`

This feature accepts an array of panel boxes you want to hide when editing a post or a page in the WordPress administrator dashboard.

```php
add_theme_support('plate-editor', [
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

#### `'plate-dashboard'`

This feature accepts an array of dashboard widgets you want to remove on the dashboard page.

```php
add_theme_support(''plate-dashboard'', [
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

#### `plate-toolbar`

This feature accepts an array of menu toolbar items you want to hide in the WordPress administrator dashboard.

```php
add_theme_support('plate-toolbar', [
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

#### `plate-uuid`

This feature will replace GUIDs with real UUIDs in the WordPress database. WordPress currently defaults to permalinks as unique identifiers.

```php
add_theme_support('plate-uuid');
```

#### `plate-tabs`

This feature accepts an array of tabs you want to hide in the WordPress administrator dashboard.

```php
add_theme_support('plate-tabs', ['help', 'screen-options']);
```

#### `plate-permalink`

This feature allows you to set the default permalink structure in the theme.

```php
add_theme_support('plate-permalink', '/%postname%/');
```

#### `plate-login`

This feature allows you to replace the login WordPress logo with a custom one.

```php
add_theme_support('plate-login', sprintf('%s/%s', get_template_directory_uri(), '/assets/images/logo.png'));
```

#### `plate-footer`

This feature allows you to set a custom footer text in the WordPress administrator dashboard.

```php
add_theme_support('plate-footer', 'Thank you for creating with WordPlate.');
```

## License

Plate is licensed under [The MIT License (MIT)](LICENSE).
