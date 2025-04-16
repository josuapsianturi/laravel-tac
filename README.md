# laravel-tac

[![Latest Version on Packagist](https://img.shields.io/packagist/v/josuapsianturi/laravel-tac.svg?style=flat-square)](https://packagist.org/packages/josuapsianturi/laravel-tac)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/josuapsianturi/laravel-tac/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/josuapsianturi/laravel-tac/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/josuapsianturi/laravel-tac/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/josuapsianturi/laravel-tac/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/josuapsianturi/laravel-tac.svg?style=flat-square)](https://packagist.org/packages/josuapsianturi/laravel-tac)

Laravel TAC is Laravel Blade UI component library designed specifically for TALL stack applications

## Features

- Pre-built components for Tailwind CSS and AlpineJS.

- Easy to use in your Laravel views.

- Flexible and customizable components.

## Installation

You can install the package via composer:

```bash
composer require josuapsianturi/laravel-tac
```

Optionally, you can publish the components using

```bash
php artisan vendor:publish --tag="laravel-tac-components"
```

## Usage
Now that the package is installed, you can start using its components in your Laravel views.

Example Components

Below is an example of how to use the dropdown component.
Dropdown Component

In Your Blade View, You can use the dropdown component by adding the following Blade syntax in your view file:

```bash
<x-tac-navigation-link  href="{{ route('products') }}" :active="request()->routeIs(['products.*', 'products'])">
                        {{ __('Products') }}
                    </x-tac-navigation-link>
```

This will render a Tailwind-styled dropdown menu with AlpineJS handling the toggle logic.


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Josua P. Sianturi](https://github.com/josuapsianturi)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
