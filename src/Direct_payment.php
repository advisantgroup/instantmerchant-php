<?php
namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";
class Direct_payment extends Api_resource
{

	/**
	 * [charge - It describes that the amount is charged for customer]
	 * @param  [array] $params     [It has array of data]
	 * @return [void]             [Return notification only if it is true,else throw exception]
	 */
	public function charge($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charge";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [capture -It describe that it capture the amount]
	 * @param  [array] $params     [It has array of data]
	 * @return [void]             [Return notification only if it is true,else throw exception]
	 */
	public function capture($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/capture";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [refund -It describe that it refund the amount to the customer]
	 * @param  [array] $params     [It has array of data]
	 * @return [void]             [Return notification only if it is true,else throw exception]
	 */
	public function refund($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/refund";
		$curl= $this->curlCall($url, http_build_query($params), 'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}
?>