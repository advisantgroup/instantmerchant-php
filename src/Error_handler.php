<?php
// namespace Instantmerchant;

class Img_params_missing extends Exception 
{
	protected $message = "Need to send the params";
}

class Img_Missing_Auth_For_Request extends Exception
{
	protected $message = "All requests must need the both api_key and api_secret_key";
}

class Img_false_status extends Exception
{
	public function __construct($value)
	{
		$this->message = $value;
	}
	public function returnMessage() 
	{
		return $this->message;
	}
}
?>