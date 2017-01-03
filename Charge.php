<?php
include 'Direct_payment.php';
include 'Customer.php';

/*$params = array(
		"version" =>'v2',
				"name" => 'sai',
				"username" => 'sai123',
				"email" => 'sai123@test.com',
				"address" => 'xyz',
				"city" => 'cbe',
				"state" => 'tn',
				"zip" => '641030',
				"country" => 'us',
				"amount" => 300,
				"payment_mode"=> "auth_and_capture",
				"currency"=>"usd",
				"cardholder_name"=>"Jim",
				"description" => 'jdhgfs',
  				"card_number"=> "4111111111111111",
  				"exp_month"=> 12,
  				"exp_year"=>2012, 
  				"cvc"=>123
				);*/
/*$params = array(
	"version" =>'v3',
				"charge_id" => 'cha_586b7de9a4c371',				
				);*/
				/*$params = array(
					"charge_id" => 'cha_586b7de9a4c371',				
				);*/
				$params = array(
					"version" => 'v1',
					"name" => 'sai',
					"username" => 'sai123',
					"email" => 'sai123@test.com',
					"address" => 'xys',
					"city" => 'abc',
					"zip" => 78689,
					"state" => 'hg',
					"country" => 'US'
					);
				$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
$objCharge = new Customer;
//$apiCreate = new Api_resource($api_key,$api_secret);
$objCharge->create_customer($params, $api_secret, $api_key);

//$charge1 = charge();
?>
