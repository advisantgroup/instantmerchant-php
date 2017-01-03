<?php 
require_once "Api_resource.php";

class Customer extends Api_resource
{
	public function create_customer($params, $api_secret, $api_key)
	{
		if(!$params || !$api_secret || !$api_key)
		{
			echo "Need to send the params, secret key and api key";
			die();
		}
		if($params['version'] == 'v2')
		{
			$url = $this->base_url . "/v2/customer";
		}
		else
		{
			$url = $this->base_url . "/v1/customer";
		}
		$curl= $this->curlCall($url, http_build_query($params), $api_key, $api_secret,'post');
		echo $curl;
	}
}