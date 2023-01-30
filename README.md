# Filament Plausible Page

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-plausible-page.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-plausible-page)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-plausible-page/run-tests?label=tests)](https://github.com/ryangjchandler/filament-plausible-page/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-plausible-page/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/filament-plausible-page/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-plausible-page.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-plausible-page)

This package adds a new `Plausible` page that allows you to easily embed your [Plausible](https://plausible.io/) dashboard inside of Filament.

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/filament-plausible-page
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-plausible-page-config"
```

## Usage

The page will be automatically registered with Filament and appear in your sidebar.

If you wish to configure the page with a different icon, name and navigation group, use the following methods inside of a `ServiceProvider`:

```php
Plausible::navigationIcon('heroicon-o-chart-bar');
Plausible::navigationLabel('Analytics');
Plausible::slug('analytics');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
