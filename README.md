# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sammy-kariuki/pesaway.svg?style=flat-square)](https://packagist.org/packages/sammy-kariuki/pesaway)
[![Build Status](https://img.shields.io/travis/sammy-kariuki/pesaway/master.svg?style=flat-square)](https://travis-ci.org/sammy-kariuki/pesaway)
[![Quality Score](https://img.shields.io/scrutinizer/g/sammy-kariuki/pesaway.svg?style=flat-square)](https://scrutinizer-ci.com/g/sammy-kariuki/pesaway)
[![Total Downloads](https://img.shields.io/packagist/dt/sammy-kariuki/pesaway.svg?style=flat-square)](https://packagist.org/packages/sammy-kariuki/pesaway)

This is a Laravel Package for PesaWay Limited's payment API.

## Installation

You can install the package via composer:

```bash
composer require sammy-kariuki/pesaway
```
## Configuration

Edit the ```Config/config.php``` file and edit the following:
```php
	/*-----------------------------------------
	|The App consumer key
	|------------------------------------------
	*/
	'consumer_key'   => '',

	/*-----------------------------------------
	|The App consumer Secret
	|------------------------------------------
	*/
	'consumer_secret' => '',

	/*-----------------------------------------
	|The paybill number
	|------------------------------------------
	*/
	'paybill'         => ''
```

## Usage
### Trigger Payment
Trigger payment as follows:

```php
	$paymentResponse=Pesaway::pay_bill(100, '254708374149', '10');
```

### Verify Manual Payment
Verify a payment that's been sent to the paybill as follows:

```php
	$verifyPaymentResponse=Pesaway::verify_payment(100, '254708374149', 'OBJ69DM0JD');
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ksammy91@gmail.com instead of using the issue tracker.

## Credits

- [Sammy Kariuki](https://github.com/sammy-kariuki)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.