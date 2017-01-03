<?php
require_once "Api_resource.php";
class Direct_payment extends Api_resource
{

	/**
	 * [charge - It describes that the amount is charged for customer]
	 * @param  [array] $params     [It has array of data]
	 * @param  [string] $api_secret [The api secret key for authentication]
	 * @param  [string] $api_key    [The api key for authentication]
	 * @return [void]             [Return notification whether it is success or not]
	 */
	public function charge($params, $api_secret, $api_key)
	{
		if(!$params || !$api_secret || !$api_key)
		{
			echo "Need to send the params, secret key and api key";
			die();
		}
		if($params['version'] == 'v2')
		{
			$url = $this->base_url . "/v2/charge";
		}
		else
		{
			$url = $this->base_url . "/v1/charge";
		}
		$curl= $this->curlCall($url, http_build_query($params), $api_key, $api_secret,'post');
		echo $curl;
	}

	/**
	 * [capture -It describe that it capture the amount]
	 * @param  [array] $params     [It has array of data]
	 * @param  [string] $api_secret [The api secret key for authentication]
	 * @param  [string] $api_key    [The api key for authentication]
	 * @return [void]             [Return notification whether it is success or not]
	 */
	public function capture($params, $api_secret, $api_key)
	{
		if(!$params || !$api_secret || !$api_key)
		{
			echo "Need to send the params, secret key and api key";
			die();
		}
		if($params['version'] == 'v2')
		{
			$url = $this->base_url . "/v2/capture";
		}
		else
		{
			$url = $this->base_url . "/v1/capture";
		}
		$curl= $this->curlCall($url, http_build_query($params), $api_key, $api_secret,'post');
		echo $curl;
	}

	/**
	 * [refund -It describe that it refund the amount to the customer]
	 * @param  [array] $params     [It has array of data]
	 * @param  [string] $api_secret [The api secret key for authentication]
	 * @param  [string] $api_key    [The api key for authentication]
	 * @return [void]             [Return notification whether it is success or not]
	 */
	public function refund($params, $api_secret, $api_key)
	{
		if(!$params || !$api_secret || !$api_key)
		{
			echo "Need to send the params, secret key and api key";
			die();
		}
		if($params['version'] == 'v2')
		{
			$url = $this->base_url . "/v2/refund";
		}
		else
		{
			$url = $this->base_url . "/v1/refund";
		}
		$curl= $this->curlCall($url, http_build_query($params), $api_key, $api_secret,'post');
		echo $curl;
	}
}

?>