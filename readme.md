# Keep up on Nova releases

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tightenco/nova-releases.svg?style=flat-square)](https://packagist.org/packages/tightenco/nova-releases)
[![Total Downloads](https://img.shields.io/packagist/dt/tightenco/nova-releases.svg?style=flat-square)](https://packagist.org/packages/tightenco/nova-releases)

JUST GETTING STARTED.

The card:

<img width="396" alt="screen shot 2018-09-06 at 12 13 19 am" src="https://user-images.githubusercontent.com/151829/45134868-a18fb680-b16a-11e8-98c4-f5583c6009da.png">
<img width="398" alt="screen shot 2018-09-06 at 12 13 45 am" src="https://user-images.githubusercontent.com/151829/45134870-a18fb680-b16a-11e8-8192-4e08ce1f0524.png">

The tool:

<img width="1256" alt="screen shot 2018-09-10 at 12 07 39 am" src="https://user-images.githubusercontent.com/151829/45276011-e62e9100-b48d-11e8-8217-481f999f9521.png">


Plans:

- [x] Show the latest release on a card and compare it against yours
- [x] Add to the card a big icon to show green or red and a link to upgrade if you're red
- [x] Show all releases in a list in a tool
- [ ] Add a danger state if there are security issues, maybe? or something clever like that?


## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require tightenco/nova-releases
```

Next up, you may register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

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

You can also register the "release history" tool, in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvider.php

// ...

public function tools()
{
    return [
        // ...
        new \Tightenco\NovaReleases\AllReleases,
    ];
}
```

### Security

If you discover any security related issues, please email matt@tighten.co instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

