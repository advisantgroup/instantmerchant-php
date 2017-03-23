<?php
require_once 'src/Customer.php';

class CustomerTest extends \PHPUnit_Framework_TestCase
{
  /*public function testCreate()
  {
  	$params = array(
				'name' => 'vishnu',
				'email' => 'vishnu@tets.com',
				'username' => 'vishnu123',
				'address' => '',
				'city' => '',
				'zip' => '',
				'state' => '',
				'country' => '',
				'cardholder_name' => '',
				'card_number' => '',
				'exp_month' => '',
				'exp_year' => '', 
				'cvc' => '',
				'save_card' => 'true',
				'is_default' => ''
			  );
    $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    $status = false;
    $url = new Customer();
    $url->init($api_key,$api_secret,$status);
    $result = $url->create($params);
    $obj = json_decode($result);
    $this->assertTrue($obj->status, "create data unsuccessful"); 
  }
*/
  public function testRetrieve()
  {
  	$params = array('customer_id' => 506);
    $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    $status = false;
    $url = new Customer();
    $url->init($api_key,$api_secret,$status);
    $result = $url->retrieve($params);
    $obj = json_decode($result);
    $this->assertTrue($obj->status, "create data unsuccessful"); 
  }

  public function testUpdate()
  {
  	$params = array(
					'id' => '546',
					'name' => '',
					'password' => '',
					'address' => '',
					'city' => 'cbe',
					'state' => '',
					'zip' => '',
					'active' => ''
					 );
    $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    $status = false;
    $url = new Customer();
    $url->init($api_key,$api_secret,$status);
    $result = $url->update($params);
    $obj = json_decode($result);
    $this->assertTrue($obj->status, "create data unsuccessful"); 
  }

  public function testList()
  {
  	
    $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
    $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
    $status = false;
    $url = new Customer();
    $url->init($api_key,$api_secret,$status);
    $result = $url->list();
    $obj = json_decode($result);
    $this->assertTrue($obj->status, "create data unsuccessful"); 
  }
}