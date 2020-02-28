# Instantmerchant API-PHP
=========

A PHP reference implementation of the Instant Merchant API. See the full docs at <https://advisantgroup.github.io/InstantMerchant/>

* Official
* REST API

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require instantmerchant/instantmerchant-php
```

## Instantiation
```php
$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
$status = false;
$params = array('name' => 'test','email' => 'test@gmail.com','description' => 'abc','amount' => '5','address' => 'xyz','city' => 'mno','state' => 'AL','country' => 'US','zip' => 641901,'invoice_num' => '','payment_mode' => 'auth_and_capture','payment_type' => 'recurring','cardholder_name' => 'test','card_number' => '4111111111111111','exp_month' => '02','exp_year' => '2020','cvc' => '251','send_email' => 1,'currency' => 'usd','customer' => 'new','create_customer' => '','interval' => '2','save_card' => '','is_default' => '','card_id' => '');
try
{
  $test = new \Instantmerchant\Charges;
  $test->init($api_key,$api_secret,$status);
  $a = $test->create($params); 
  echo $a;
}
catch(Exception $e)
{
  echo $e->getMessage();
}
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
  * [`retrieve(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`update(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`customer(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`delete(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
 * subscription
  * [`renewal(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`updateCard(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`cancel(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
 * card
  * [`create(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`retrieve(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`delete(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)
  * [`card(params)`](https://advisantgroup.github.io/InstantMerchant/#create-customer)


## Release History
```
* 1.0.0 Initial release
```
