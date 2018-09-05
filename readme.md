# Keep up on Nova releases

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tightenco/nova-releases.svg?style=flat-square)](https://packagist.org/packages/tightenco/nova-releases)
[![Total Downloads](https://img.shields.io/packagist/dt/tightenco/nova-releases.svg?style=flat-square)](https://packagist.org/packages/tightenco/nova-releases)

JUST GETTING STARTED.

<img width="332" alt="image" src="https://user-images.githubusercontent.com/151829/45109652-2993a300-b10e-11e8-8a5b-2daf36d901c0.png">

Plans:

- Show the latest release on a card and compare it against yours, with a big icon to show green or red and a link to upgrade if you're red
- Show all releases in a list in a tool

## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require tightenco/nova-releases
```

Next up, you must register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function cards()
{
    return [
        // ...
        new \Tightenco\NovaReleases\LatestRelease,
    ];
}
```

### Security

If you discover any security related issues, please email matt@tighten.co instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

