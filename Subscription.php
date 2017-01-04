<?php

class Subscription extends Api_resource
{
	/**
	 * [renewal - It describe that it renewal the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function renewal($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/subscription/renew";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	/**
	 * [cancel - It describe that it cancel the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function cancel($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/subscription/cancel";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}
}
?>