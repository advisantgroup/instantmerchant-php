<?php

class Api_resource
{
	/**
	 * The API base url
	 */
	public $base_url = "https://dev1.instantmerchant.io/api";
	
	/**
	 * [curlCall - It describes that it request the variables to access]
	 * @param  string  $url        [The url describes that where the method is run]
	 * @param  boolean $params     [It has an boolean value]
	 * @param  string  $api_key    [The api key for authentication]
	 * @param  string  $api_secret [The api secret key for authentication]
	 * @param  string  $http_verb  ['post']
	 * @return [type]              [returns the message what returns]
	 */
	public function curlCall($url='', $params=FALSE, $api_key='', $api_secret='', $http_verb='')
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
	    
		curl_setopt($ch,CURLOPT_HTTPHEADER,array("X-Api-Key: " . $api_key,"X-Api-Secret: " . $api_secret));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$results = curl_exec($ch);
		return $results;
	}

}