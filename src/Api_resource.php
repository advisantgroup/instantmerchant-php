<?php
// namespace Instantmerchant;

require_once "Error_handler.php";
class Api_resource
{
	/* Api test url */
	public $test_url='https://api-staging.instantmerchant.io/api/v1';
	/*Api live url https://dev1.instantmerchant.io*/
	public $url='http://api.instantmerchant.dev/api/v1';
	/*Initialise the api key*/
	protected $api_key=false;
	/*Initialise api secret key*/
	protected $api_secret=false;
	/*Initialise the version*/
	public $version;
	/*Initialise the test*/
	public $test;

	/**
	 * [init description]
	 * @param  [type] $api_key    [The api key for authentication]
	 * @param  [string] $api_secret [The api secret key for authentication]
	 * @return [void]             [return the value of api secret and api key]
	 */
	public function init($api_key, $api_secret, $status)
	{
		if(empty($api_secret) || empty($api_key))
		{
			throw new Img_Missing_Auth_For_Request();
		}
		$this->api_key = $api_key;
		$this->api_secret = $api_secret;
		// $this->version = $version;
		$this->test = $status;
		
		if($this->test == false)
		{
			$this->url = $this->url;
		}
		else
		{
			$this->url = $this->test_url;
		}
	}
	
	/**
	 * [curlCall - It describes that it request the variables to access]
	 * @param  string  $url        [The url describes that where the method is run]
	 * @param  boolean $params     [It has an boolean value]
	 * @param  string  $api_key    [The api key for authentication]
	 * @param  string  $api_secret [The api secret key for authentication]
	 * @param  string  $http_verb  ['post']
	 * @return [type]              [returns the message what returns]
	 */
	public function curlCall($url='', $params=FALSE, $http_verb='')
	{
		$ch = curl_init($url);
	    if(isset($http_verb))
	    {
	    	if($http_verb=='post') {
		    	curl_setopt($ch, CURLOPT_POST,1);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
				curl_setopt($ch, CURLOPT_URL, $url);
	    	}elseif($http_verb=='get') {
	    		//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($http_verb));
	    		curl_setopt($ch, CURLOPT_URL, "$url");
	    	}else{
	    		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($http_verb));
				curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
	    		curl_setopt($ch, CURLOPT_URL, $url);
	    	}
	    } else {
			curl_setopt($ch, CURLOPT_URL, $url);
	    }
	    
		curl_setopt($ch,CURLOPT_HTTPHEADER,array("X-Api-Key: " . $this->api_key,"X-Api-Secret: " . $this->api_secret));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$results = curl_exec($ch);
		$info = curl_getinfo($ch);
		return $results;
	}

}
?>