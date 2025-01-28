# PHP Color Generator

<img src="https://banners.beyondco.de/PHP%20Color%20Generator.png?theme=dark&packageManager=composer+require&packageName=binafy%2Fphp-color-generator&pattern=cage&style=style_1&description=Generate+colors+with+PHP&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Fwww.php.net%2Fimages%2Flogos%2Fnew-php-logo.svg" alt="php-color-generator">

[![PHP Version Require](https://img.shields.io/packagist/dependency-v/binafy/php-color-generator/php)](https://packagist.org/packages/binafy/php-color-generator)
[![Latest Stable Version](https://img.shields.io/packagist/v/binafy/php-color-generator.svg?style=flat-square)](https://packagist.org/packages/binafy/php-color-generator)
[![Total Downloads](https://img.shields.io/packagist/dt/binafy/php-color-generator.svg?style=flat-square)](https://packagist.org/packages/binafy/php-color-generator)
[![License](https://img.shields.io/packagist/l/binafy/php-color-generator)](https://packagist.org/packages/binafy/php-color-generator)
[![Passed Tests](https://github.com/binafy/php-color-generator/actions/workflows/tests.yml/badge.svg)](https://github.com/binafy/php-color-generator/actions/workflows/tests.yml)

## Introduction

The `PHP Color Generator` is a versatile PHP package designed for easy and efficient color manipulation. Whether you're working with color schemes, themes, or UI designs, this package provides a set of utilities to convert, darken, lighten, and generate shades or tints of colors. It supports the conversion of hex to RGB and vice versa, allows for adjusting the lightness or darkness of colors, and can generate a series of tints or shades based on a base color. Ideal for designers and developers who need to programmatically handle color variations for dynamic interfaces or applications.

## Requirements

***
- ```PHP >= 7.3```

## Installation

You can install the package with Composer.

```shell
composer require binafy/php-color-generator
```

## Usage

#### `hexToRGB(string $hex): array`

If you may convert hex to RGB, you need to use `hexToRGB` method:

```php
use Binafy\PhpColorGenerator\ColorService;

ColorService::hexToRGB('1363df');
```

#### `rgbToHex(string $hex): string`

If you may convert RGB to hex, you need to use `rgbToHex` method:

```php
use Binafy\PhpColorGenerator\ColorService;

ColorService::rgbToHex([
    'red' => '19',
    'green' => '99',
    'blue' => '223',
]);
```

<a name="security"></a>
## Security

If you discover any security-related issues, please email `binafy23@gmail.com` instead of using the issue tracker.

<a name="chanelog"></a>
## Changelog

The changelog can be found in the `CHANGELOG.md` file of the GitHub repository. It lists the changes, bug fixes, and improvements made to each version of the Laravel User Monitoring package.

<a name="license"></a>
## License

The MIT License (MIT). Please see [License File](https://github.com/binafy/php-color-generator/blob/1.x/LICENSE) for more information.

<a name="start-history"></a>
## Star History

[![Star History Chart](https://api.star-history.com/svg?repos=binafy/php-color-generator&type=Date)](https://star-history.com/#binafy/php-color-generator&Date)

<a name="conclusion"></a>
## Conclusion

Congratulations! You have successfully installed and integrated the Laravel User Monitoring package into your Laravel application. By effectively logging and analyzing user activity, you can gain valuable insights that can help you improve your application's user experience and performance. If you have any questions or need further assistance, please refer to the documentation or seek help from the package's GitHub repository. Happy monitoring!

<a name="donate"></a>
## Donate

If this package is helpful for you, you can buy a coffee for me :) ❤️

- Iranian Gateway: https://daramet.com/milwad_khosravi
- Paypal Gateway: SOON
- MetaMask Address: `0xf208a562c5a93DEf8450b656c3dbc1d0a53BDE58`
