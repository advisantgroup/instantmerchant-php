<?php 
namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Customer extends Api_resource
{
	/**
	 * [create -It describe that it create the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function create($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/customers";
		$curl= $this->curlCall($url, http_build_query($params),'POST');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [retrieve -It describe that it retrieve the customer details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function retrieve($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/customers?id=".$params['customer_id'];
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [update -It describe that it update the customer details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function update($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/customers";
		$curl= $this->curlCall($url, http_build_query($params),'PUT');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [list -It describe that it list all the customers]
	 * @return [void] [Return notification only if it is true,else throw exception]
	 */
	public function list()
	{
		$url = $this->url ."/customers";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		// return $json_obj;
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}
?>