# About PhpConstant

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kevinpurwito/php-constant.svg?style=flat-square)](https://packagist.org/packages/kevinpurwito/php-constant)
[![Total Downloads](https://img.shields.io/packagist/dt/kevinpurwito/php-constant.svg?style=flat-square)](https://packagist.org/packages/kevinpurwito/php-constant)
![GitHub Actions](https://github.com/kevinpurwito/php-constant/actions/workflows/main.yml/badge.svg)

PhpConstant is a simple class containing useful functions which you can extend to your Constant Classes.

For example if you want to have a StatusConst class, which contains all possible statuses as constants, 
you can extend PhpConstant to use its functions for your StatusConst class.  

## Installation

You can install the package via composer:

```bash
composer require kevinpurwito/php-constant
```

## Usage

```php
use KevinPurwito\PhpConstant\PhpConstant;

// Class Extends PhpConstant to use its functions
class StatusConst extends PhpConstant
{
    const PENDING = 'pending';
    const IN_PROCESS = 'in_process';
    const COMPLETED = 'completed';
}

StatusConst::all();
// returns an array like this: ['pending', 'in_process', 'completed']

StatusConst::options();
// returns a key-value array like this: ['pending' => 'Pending', 'in_process' => 'In Process', 'completed' => 'Completed']

StatusConst::asString();
// returns a string like this: 'pending,in_process,completed'

// You can use any char you want as the glue for asString() function
StatusConst::asString('|');
// returns a string like this: 'pending|in_process|completed'
```
### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email [kevin.purwito@gmail.com](mailto:kevin.purwito@gmail.com) instead of using the issue tracker.

## Credits

- [Kevin Purwito](https://github.com/kevinpurwito)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com)
by [Beyond Code](http://beyondco.de/).
