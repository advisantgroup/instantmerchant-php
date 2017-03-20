<?php
// namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Subscription extends Api_resource
{
	/**
	 * [renewal - It describe that it renewal the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function renew($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/renew";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		// return $json_obj;
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [cancel - It describe that it cancel the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function cancel($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/cancel";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function suspend($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/suspend";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function resume($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/resume";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [update -It describe that it update the card]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function updateCard($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/update_card";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function updateAmount($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id'];
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function retrieve($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/subscriptions/?id=".$params['subscription_id'];
		$curl= $this->curlCall($url, http_build_query($params),'get');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function list()
	{
		$url = $this->url ."/subscriptions";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}
?>