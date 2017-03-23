<?php
require_once 'src/Invoices.php';
// use \Instantmerchant\Invoices;
class InvoicesTest extends \PHPUnit_Framework_TestCase
{
	/*public function testCreate()
	{
		$params = array(
				'customer' => '534',
				'name' => '',
				'username' => '',
				'email' => '',	
				'description' => 'product',
				'date_due' => '03/15/2017',
				'items[]' => 'mango',
				'items_price[]' => 5,
				'send_now' => '',
				'payment_mode' => 'auth_and_capture',
				'cardholder_name' => 'sarath',
				'card_number' => 4111111111111111,
				'exp_month' => 10,
				'exp_year' => 2012,
				'cvc' => 231,
				'currency' => 'usd',
				'invoice_to_staff' => '',
				'send_invoice_to' => '', 
				'address' => '',
				'city' => '',
				'state' => '',
				'zip' => '',
				'country' => '',
				'payment_type' => 'recurring',
				'interval' => 'daily',
				'allowed_cycles' => 2,
				'save_card' => 1,
				'is_default' => '',
				'card_id' => '',
			);
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->create($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "create invoice unsuccessful"); 
	}*/

	public function testSend()
	{
		$params = array('invoice_num' => '506');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->send($params);
    	// $result = \Instantmerchant\Invoices::send($params);
    	// $account = \Stripe\Account::create($account_data);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "send unsuccessful"); 
	}

	/*public function testArchive()
	{
		$params = array('invoice_num' => '503');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->archive($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "archive unsuccessful"); 
	}

	public function testUnarchive()
	{
		$params = array('invoice_num' => '503');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->unarchive($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "unarchive unsuccessful"); 
	}

	public function testRetrieve()
	{
		$params = array('invoice_num' => '503');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->retrieve($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "retrieve unsuccessful"); 
	}

	public function testPaid()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->paid();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "paid unsuccessful"); 
	}

	public function testUncaptured()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->uncaptured();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "uncaptured unsuccessful"); 
	}

	public function testRefund()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->refund();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "refund unsuccessful"); 
	}

	public function testChargeback()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->chargeback();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "chargeback unsuccessful"); 
	}

	public function testVoid()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->void();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "void unsuccessful"); 
	}

	public function testPending()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->pending();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "void unsuccessful"); 
	}

	public function testDraft()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->draft();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "void unsuccessful"); 
	}

	public function testListInvoices()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->listInvoices();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "void unsuccessful"); 
	}

	public function testListArchived()
	{
		$params = array('archived' => 1);
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Invoices();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->listArchived($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "void unsuccessful"); 
	}
*/

}