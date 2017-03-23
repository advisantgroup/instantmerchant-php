<?php
require_once 'src/Charges.php';

class ChargeTest extends \PHPUnit_Framework_TestCase
{
	/*public function testCreate()
	{
		$params = array(
				'name' => 'sai',
				'email' => 'sai@kjfhd.cm',
				'description' => 'sdf',
				'amount' => 5,
				'address' => 'sfs',
				'city' => 'sfd',
				'zip' => 'wwwwwwwww',
				'state' => 'fgdf',
				'country' => 'gdf',
				'invoice_num' => '',
				'payment_mode' => '',
				'payment_type' => '',
				'cardholder_name' => 'sarath',
				'card_number' => '4111111111111111',
				'exp_month' => '02',
				'exp_year' => '2019',
				'cvc' => '251',
				'send_email' => '',
				'currency' => 'usd',
				'customer' => '',
				'create_customer' => '',
				'interval' => '',
				'save_card' => '',
				'is_default' => '',
				'card_id' => ''
				);
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->create($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "create charge unsuccessful"); 
	}*/

	public function testArchive()
	{
		$params = array('unique_id' => 'cha_58c98f90ab17f1');
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->archive($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "archive unsuccessful"); 
	}

	public function testUnArchive()
	{
		$params = array('unique_id' => 'cha_58c98f90ab17f1');
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->unarchive($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "unarchive unsuccessful"); 
	}

	public function testPaid()
	{
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	/*$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->paid();*/
        $test = new \Instantmerchant\Charges;
        $test->init($api_key,$api_secret,$status);
        $result = $test->paid();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "paid unsuccessful"); 
	}

	public function testUncaptured()
	{
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->uncaptured();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "uncaptured unsuccessful"); 
	}

	public function testChargebacks()
	{
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->chargebacks();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "chargebacks unsuccessful"); 
	}

	public function testVoids()
	{
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->voids();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "chargebacks unsuccessful"); 
	}

	public function testPartialRefund()
	{
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->partial_refund();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "partial refund unsuccessful"); 
	}

	public function testRefundCharge()
	{
		$params = array('charge_id' => 'cha_58d0cdba119ba1');
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->refund_charge($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "Refund charge unsuccessful"); 
	}

	public function testCapture()
	{
		$params = array('charge_id' => 'cha_58cbc5f9770f51');
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->capture($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "capture charge unsuccessful"); 
	}

	public function testRefund()
	{
		$params = array('charge_id' => 'cha_58d0cdba119ba1', 'amount' => 1);
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->refund($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "refund charge unsuccessful"); 
	}

	public function testListCharge()
	{
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->listCharges();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "List charge unsuccessful"); 
	}

	public function testListArchived()
	{
		$params = array('archived' => 1);
    	$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Charges();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->listArchived($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "List charge unsuccessful"); 
	}
}