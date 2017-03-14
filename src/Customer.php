<?php 
// namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Customer extends Api_resource
{
	/**
	 * [create_customer -It describe that it create the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function create($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/customer";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
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
			throw new Img_params_missing();
		}
		$url = $this->url ."/customer/customer/?id=".$params['customer_id'];
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
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
			throw new Img_params_missing();
		}
		$url = $this->url ."/customer/update";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [delete -It describe that it delete the customer details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function delete($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/customer";
		$curl= $this->curlCall($url, http_build_query($params),'delete');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [customer -It describe that it list all the customers]
	 * @return [void] [Return notification only if it is true,else throw exception]
	 */
	public function customer()
	{
		$url = $this->url ."/customer/customer";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}
?>