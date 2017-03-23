<?php
require_once 'src/Card.php';

class CardTest extends \PHPUnit_Framework_TestCase
{
    // tests
    /*public function testCardCreation()
    {
        $params = array(
                'customer' => 547,
                'description' => '',
                'cardholder_name' => 'swetha',
                'card_number' => 4111111111111111,
                'exp_month' => 10,
                'exp_year' => 2020,
                'cvc' => 458,
                'save_card' => 'true',
                'is_default' => 'true'
                 );
        $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
        $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
        $status = false;
        $url = new Card();
        $url->init($api_key,$api_secret,$status);
        $result = $url->create($params);
        $obj = json_decode($result);
        $this->assertTrue($obj->status,"Card creation failed");
    }*/

    /*public function testRetrieve()
    {
        $params = array(
                'card_id' => 'card_58cfcd751847d',
                'customer' => 547
                );
        $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
        $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
        $status = false;
        $url = new Card();
        $url->init($api_key,$api_secret,$status);
        $result = $url->retrieve($params);
        $obj = json_decode($result);
        $this->assertTrue($obj->status, "retrieve data unsuccessful");  
    }

    public function testDelete()
    {
        $params = array(
                'card_id' => 'card_58cfcd751847d',
                'customer' => 547
                );
        $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
        $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
        $status = false;
        $url = new Card();
        $url->init($api_key,$api_secret,$status);
        $result = $url->delete($params);
        $obj = json_decode($result);
        $this->assertTrue($obj->status, "delete data unsuccessful");  
    }*/

    public function testList()
    {
        $params = array(
                'customer' => 537
                );
        $api_key = 'D7ydiqzOF0weBCsd9zMGes9iyh1Mtqow';
        $api_secret ='FMSOZJGhIfnDMeW6twEOWdcNf52CwuSe';
        $status = false;
        /*$url = new Card();
        $url->init($api_key,$api_secret,$status);
        $result = $url->list($params);*/
        $test = new \Instantmerchant\Card;
        $test->init($api_key,$api_secret,$status);
        $result = $test->list($params); 
        $obj = json_decode($result);
        $this->assertTrue($obj->status, "delete data unsuccessful");  
    }
}
