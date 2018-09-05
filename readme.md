# Keep up on Nova releases

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tightenco/nova-releases.svg?style=flat-square)](https://packagist.org/packages/tightenco/nova-releases)
[![Total Downloads](https://img.shields.io/packagist/dt/tightenco/nova-releases.svg?style=flat-square)](https://packagist.org/packages/tightenco/nova-releases)

JUST GETTING STARTED.

<img width="334" alt="image" src="https://user-images.githubusercontent.com/151829/45116564-1e963e00-b121-11e8-8908-ed2a72e2b694.png">
<img width="322" alt="image" src="https://user-images.githubusercontent.com/151829/45116575-27870f80-b121-11e8-88dd-84d17b94a729.png">


Plans:

- [x] Show the latest release on a card and compare it against yours
- [x] Add to the card a big icon to show green or red and a link to upgrade if you're red
- [ ] Show all releases in a list in a tool
- [ ] Add a danger state if there are security issues, maybe? or something clever like that?


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

