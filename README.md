# Instantmerchant API-PHP
=========

A PHP reference implementation of the Instant Merchant API. See the full docs at <https://advisantgroup.github.io/InstantMerchant/>

* Official
* REST API

##Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require stripe/stripe-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

##Instantiation
```php
\Instantmerchant::init('D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow', 'FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe', 'v1', false);
$params = array("payment_mode" => 'auth_and_capture', "invoice_num" => 82, "cardholder_name" => 'Jim', "card_number" => '4111111111111111', "exp_month"=> 11, "exp_year" => 2019, "cvc" => 123, "send_email" => 1, "save_card" => true, "is_default" => true, "card_id" => 'card_586cbfd8a3042' );
try{
$charge = \Instantmerchant::charge(array('params' => $params));
echo $charge;
}catch(Exception $e)
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
