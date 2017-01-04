<?php

class Api_resource
{
	/* Api base url */
	/*public $base_url = "https://api.instantmerchant.io/api";
	public $test_url = "https://api-staging.instantmerchant.io/api";*/
	public $test_url='https://api-staging.instantmerchant.io/api/';
	public $url='https://api.instantmerchant.io/api/';
	/*Initialise the api key*/
	protected $api_key=false;
	/*Initialise api secret key*/
	protected $api_secret=false;
	/*Initialise the version*/
	public $version;
	public $test;
	/**
	 * [init description]
	 * @param  [type] $api_key    [The api key for authentication]
	 * @param  [string] $api_secret [The api secret key for authentication]
	 * @return [void]             [return the value of api secret and api key]
	 */
	public function init($api_key, $api_secret, $version, $status)
	{
		$this->api_key = $api_key;
		$this->api_secret = $api_secret;
		$this->version = $version;
		$this->test = $status;
		
		if($this->test == false)
		{
			$this->url .= $this->version;
		}
		else
		{
			$this->url = $this->test_url . $this->version;
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
	    	}else {
	    		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($http_verb));
	    		if ($params)
	    			curl_setopt($ch, CURLOPT_URL, "$url?$params");
	    		else
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
		return $results;
	}

}
?>