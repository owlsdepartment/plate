# Plate

![plate](https://user-images.githubusercontent.com/499192/36695140-adb4e0b8-1b40-11e8-80e9-e5b1d65ece51.png)

> A theme support plugin for [WordPlate](https://wordplate.github.io).

Plate let you clean up the WordPress administrator dashboard by disabling features your client doesn't use. It provides helpers to customize the dashboard footer text and the login form logo. The plugin will sanitize uploaded file names.

[![Total Downloads](https://badgen.net/packagist/dt/wordplate/plate)](https://packagist.org/packages/wordplate/plate)
[![Latest Version](https://badgen.net/github/release/wordplate/plate)](https://github.com/wordplate/plate/releases)
[![License](https://badgen.net/packagist/license/wordplate/plate)](https://packagist.org/packages/wordplate/plate)

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```bash
$ composer require wordplate/plate
```

## Theme Support

Below is a list of handy helpers this plugins provides such as [disabling menu items](#plate-disable-menu) and [dashboard widgets](#plate-disable-dashboard).

#### `plate-disable-menu`

This feature accepts an array of menu items you want to disable in the administrator dashboard.

```php
add_theme_support('plate-disable-menu', [
    'edit-comments.php', // comments
    'index.php', // dashboard
    'upload.php', // media
    'edit.php?post_type=acf-field-group', // custom post type
    'tools.php?page=wp-migrate-db', // plugin in tools
    'options-general.php?page=menu_editor', // plugin in settings
    'admin.php?page=theseoframework-settings', // plugin in menu root
]);
```

#### `plate-disable-editor`

This feature accepts an array of panel boxes you want to disable when editing a post or a page in the administrator dashboard.

```php
add_theme_support('plate-disable-editor', [
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

#### `plate-disable-dashboard`

This feature accepts an array of [dashboard widgets you want to disable](https://digwp.com/2014/02/disable-default-dashboard-widgets) on the administrator dashboard.

```php
add_theme_support('plate-disable-dashboard', [
  'dashboard_activity',
  'dashboard_incoming_links',
  'dashboard_plugins',
  'dashboard_primary',
  'dashboard_quick_press',
  'dashboard_recent_comments',
  'dashboard_recent_drafts',
  'dashboard_secondary',
  //'dashboard_right_now',
]);
```

#### `plate-disable-toolbar`

This feature accepts an array of menu toolbar items you want to disable in the administrator dashboard.

```php
add_theme_support('plate-disable-toolbar', [
   'archive',
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

#### `plate-disable-tabs`

This feature accepts an array of tabs you want to disable in the administrator dashboard.

```php
add_theme_support('plate-disable-tabs', ['help', 'screen-options']);
```

#### `plate-disable-api`

This feature lets you [disable](https://www.ultimatewoo.com/disable-wordpress-rest-api) WordPress's built in [REST API](https://developer.wordpress.org/rest-api) if you don't want to or aren't using it.

```php
add_theme_support('plate-disable-api');
```

#### `plate-permalink`

This feature allows you to set the default permalink structure in the theme.

```php
add_theme_support('plate-permalink', '/%postname%/');
```

#### `plate-login-logo`

This feature allows you to replace the login WordPress logo with a custom one.

```php
add_theme_support('plate-login-logo', sprintf('%s/%s', get_template_directory_uri(), '/assets/images/logo.png'));
```

#### `plate-footer-text`

This feature allows you to set a custom footer text in the WordPress administrator dashboard.

```php
add_theme_support('plate-footer-text', 'Thank you for creating with WordPlate.');
```

## License

[MIT](LICENSE) © [Vincent Klaiber](https://doubledip.se)
