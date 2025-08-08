# Cielo e-Commerce API v3 client wrapper for PHP

[![Build Status](https://travis-ci.org/chico-rei/cielo-ecommerce-v3-php.svg?branch=master)](https://travis-ci.org/chico-rei/cielo-ecommerce-v3-php) 
[![Coverage Status](https://coveralls.io/repos/github/chico-rei/cielo-ecommerce-v3-php/badge.svg?branch=master)](https://coveralls.io/github/chico-rei/cielo-ecommerce-v3-php?branch=master)
[![Latest Stable Version](https://poser.pugx.org/chico-rei/cielo-ecommerce-v3-php/v/stable)](https://packagist.org/packages/chico-rei/cielo-ecommerce-v3-php)
[![License](https://poser.pugx.org/chico-rei/cielo-ecommerce-v3-php/license)](https://packagist.org/packages/chico-rei/cielo-ecommerce-v3-php)

This is a PHP client wrapper for [Cielo e-Commerce v3](https://developercielo.github.io/manual/cielo-ecommerce).

## Install

Via [Composer](https://getcomposer.org/)

```bash
$ composer require chico-rei/cielo-ecommerce-v3-php "dev-master"
```

Requires PHP 7.4 or newer.

## Features

* [x] Create Payment
    * [x] Credit/Debit Card
    * [x] Wallet (Visa Checkout / Masterpass / Apple Pay / Samsung Pay)
    * [x] Boleto
    * [x] Eletronic Transfer
    * [x] Recurrent
* [x] Update Payment
    * [x] Capture
    * [x] Void
    * [ ] Recurrent Payment
* [x] Query Payment
    * [x] By Payment ID
    * [ ] By Order ID
* [x] Query Card Bin
* [ ] Tokenize Card
* [ ] Fraud Analysis
* [ ] Velocity
* [ ] Zero Auth
* [ ] Silent Order Post

## Usage

```php
require 'path/to/vendor/autoload.php';

use \ChicoRei\Packages\Cielo\Cielo;
use \ChicoRei\Packages\Cielo\Merchant;
use \ChicoRei\Packages\Cielo\Util;

$merchant = Merchant::create([
    'id' => 'Your_ID',
    'key' => 'Your_KEY',
]);

$cielo = new Cielo($merchant); // For sandbox use: new Cielo($merchant, true);

try {
    $response = $cielo->sale()->create([
        'merchantOrderId' => '19800731',
        'payment' => [
            'type' => 'CreditCard',
            'amount' => 15700, // 157,00
            'installments' => 2,
            'softDescriptor' => 'Your Company',
            'capture' => true,
            'creditCard' => [
                'cardNumber' => '4551870000000000',
                'holder' => 'Name',
                'expirationDate' => '12/2021',
                'securityCode' => '123',
                'brand' => 'Visa'
            ]
        ]
    ]);
    
    echo $response->getPayment()->getStatus(); // Transaction Status Code 
    
    $returnCode = $response->getPayment()->getReturnCode(); // Ex: '00'
    $details = Util::getReturnCodeDetails($returnCode);
    echo $details['definition']; // Transação autorizada com sucesso.
    
} catch (CieloAPIException $e) {
    // Handle API errors (or validation errors)
} catch (Exception $e) {
   // Handle exceptions
}
```

See [examples](examples) for more.

## Testing

```bash
$ composer test
```

## Credits

Project based on [DeveloperCielo/API-3.0-PHP](https://github.com/DeveloperCielo/API-3.0-PHP)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.