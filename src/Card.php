<?php
// namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Card extends Api_resource
{
	/**
	 * [create - It describe that it create the new card for the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function create($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/card";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [retrieve - It describe that it retrieve the card details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function retrieve($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/card?customer=".$params['customer']."&card_id=".$params['card_id'];
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;	
	}

	/**
	 * [update - It describe that it update the existing card details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function delete($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/card";
		$curl= $this->curlCall($url, http_build_query($params),'delete');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;	
	}

	/**
	 * [list - It describe that it list the cards for the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function list($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/card?customer=".$params['customer'];
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