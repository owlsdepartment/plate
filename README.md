# Plate

> A theme support plugin for [WordPlate](https://wordplate.github.io).

[![StyleCI](https://styleci.io/repos/53593562/shield?style=flat)](https://styleci.io/repos/53593562)
[![Latest Version](https://img.shields.io/github/release/wordplate/plate.svg?style=flat)](https://github.com/wordplate/plate/releases)
[![License](https://img.shields.io/packagist/l/wordplate/plate.svg?style=flat)](https://packagist.org/packages/wordplate/plate)

## Installation

Require this package, with [Composer](https://getcomposer.org), in the root directory of your project.

```bash
$ composer require wordplate/plate
```

## Theme Support

Below is a list of handy helpers this plugins provides such as [disabling menu items](#plate-menu) and [dashboard widgets](#plate-disable-dashboard).

#### `plate-menu`

This feature accepts an array of slugs for menu items you want to hide in the WordPress administrator dashboard.

```php
add_theme_support('plate-menu', [
    'edit-comments.php', // comments
    'index.php', // dashboard
    'upload.php', // media
    'edit.php?post_type=acf-field-group', // Custom post type
    'tools.php?page=wp-migrate-db', // Plugin in Tools
    'options-general.php?page=menu_editor', // Plugin in Settings
    'admin.php?page=theseoframework-settings', // Plugin in menu root
]);
```

#### `plate-disable-api`

This feature lets you [disable](https://www.ultimatewoo.com/disable-wordpress-rest-api) WordPress's built in [REST API](https://developer.wordpress.org/rest-api) if you don't want to use it.

```php
add_theme_support('plate-disable-api');
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

#### `plate-disable-tabs`

This feature accepts an array of tabs you want to hide in the WordPress administrator dashboard.

```php
add_theme_support('plate-disable-tabs', ['help', 'screen-options']);
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

[MIT](LICENSE) © [Vincent Klaiber](https://vinkla.com)
