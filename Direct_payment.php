<?php
require_once "Api_resource.php";
class Direct_payment extends Api_resource
{

	/**
	 * [charge - It describes that the amount is charged for customer]
	 * @param  [array] $params     [It has array of data]
	 * @return [void]             [Return notification with true or false status]
	 */
	public function charge($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/charge";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	/**
	 * [capture -It describe that it capture the amount]
	 * @param  [array] $params     [It has array of data]
	 * @return [void]             [Return notification with true or false status]
	 */
	public function capture($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/capture";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	/**
	 * [refund -It describe that it refund the amount to the customer]
	 * @param  [array] $params     [It has array of data]
	 * @return [void]             [Return notification with true or false status]
	 */
	public function refund($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/refund";
		$curl= $this->curlCall($url, http_build_query($params), 'post');
		return $curl;
	}
}
?>