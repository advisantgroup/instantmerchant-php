<?php
require_once 'src/Subscription.php';

class SubscriptionTest extends \PHPUnit_Framework_TestCase
{
	public function testRenew()
	{
		$params = array('subscription_id' => 'sub_58c6724584d171');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->renew($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "renewal unsuccessful"); 
	}

	public function testCancel()
	{
		$params = array('subscription_id' => 'sub_58c6724584d171');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->cancel($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "cancel unsuccessful"); 
	}

	public function testSuspend()
	{
		$params = array('subscription_id' => 'sub_58c7c916ad85a1');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->suspend($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "suspend unsuccessful"); 
	}

	public function testResume()
	{
		$params = array('subscription_id' => 'sub_58c7c916ad85a1');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->resume($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "suspend unsuccessful"); 
	}

	public function testUpdateCard()
	{
		$params = array(
				'subscription_id' => 'sub_58c7c916ad85a1',
				'cardholder_name' => 'abi',
				'card_number' => 4111111111111111,
				'exp_month' => 07,
				'exp_year' =>  2012,
				'cvc' => 145,
				'save_card' => '',
				'is_default' => '' 
				);
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->updateCard($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "suspend unsuccessful"); 
	}

	public function testupdateAmount()
	{
		$params = array('subscription_id' => 'sub_58c8191e92c581','amount' => 2);
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->updateAmount($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "suspend unsuccessful"); 
	}

	public function testRetrieve()
	{
		$params = array('subscription_id' => 'sub_58c8191e92c581');
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->retrieve($params);
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "suspend unsuccessful"); 
	}

	public function testList()
	{
		$api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    	$api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    	$status = false;
    	$url = new Subscription();
    	$url->init($api_key,$api_secret,$status);
    	$result = $url->list();
    	$obj = json_decode($result);
    	$this->assertTrue($obj->status, "suspend unsuccessful"); 
	}
}