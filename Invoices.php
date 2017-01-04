<?php

class Invoices extends Api_resource
{
	/**
	 * [create_invoice -It describe that it create the invoice to the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function create($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/invoice";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	/**
	 * [send_invoice -It describe that it send the invoice to the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function send($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/invoice/send";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	/**
	 * [charge_invoice -It describe that it charges the amount from the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function charge($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/invoice/charge";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		echo $curl;
	}

	/**
	 * [capture_invoice -It describe that it capture the amount from the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function capture($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/invoice/capture";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	public function refund($params)
	{
		if(!$params)
		{
			return "Need to send the params";;
		}
		$url = $this->url ."/invoice/refund";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}
}
?>