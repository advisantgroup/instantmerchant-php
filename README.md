# instantmerchant Api-php
=========

A PHP reference implementation of the Instant Merchant API. See the full docs at <https://advisantgroup.github.io/InstantMerchant/>

* Official
* REST API

## Installation
```bash
  npm install instantmerchant-php
```

## Configuration
```php

```

## API Overview

Every resource method returns a promise, so you don't have to use the regular callback. E.g.

```php
$params = array(
	"version" => 'v1',
	"name" => 'xyz',
	"username" => 'xyz123',
	"email" => 'xyz123@test.com',
	"address" => 'abc',
	"city" => 'albama',
	"zip" => 78689,
	"state" => 'hg',
	"country" => 'US'
	);
$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
```
### Available resources & methods

 * invoice
  * [`create(params)`](https://advisantgroup.github.io/InstantMerchant/#invoice)
  * [`send(params)`](https://advisantgroup.github.io/InstantMerchant/#send-invoice)
  * [`charge(params)`](https://advisantgroup.github.io/InstantMerchant/#charge-invoice)
  * [`capture(params)`](https://advisantgroup.github.io/InstantMerchant/#capture-invoice)
  * [`refund(params)`](https://advisantgroup.github.io/InstantMerchant/#refund)
 * direct
  * [`charge(params)`](https://advisantgroup.github.io/InstantMerchant/#direct-payment)
  * [`capture(params)`](https://advisantgroup.github.io/InstantMerchant/#capture-charge)
  * [`refund(params)`](https://advisantgroup.github.io/InstantMerchant/#refund11)
 * customer
  * [`create(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
 * subscription
  * [`renew(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`updateCard(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`cancel(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
 * card
  * [`add(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`get(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)


## Release History
```
* 1.0.0 Initial release
* 1.0.1 Subscription api's added
```
