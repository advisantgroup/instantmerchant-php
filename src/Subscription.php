<?php
namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Subscription extends Api_resource
{
	/**
	 * [renew - It describe that it renewal the subscription for the subscription id]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function renew($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/renew";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		// return $json_obj;
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
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
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/cancel";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [suspend - It describe that it suspend the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function suspend($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/suspend";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [resume - It describe that it resume the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function resume($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/resume";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [updateCard -It describe that it update the card]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function updateCard($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id']."/update_card";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [updateAmount - It describe that it update the amount for the subscription]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function updateAmount($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/".$params['subscription_id'];
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [retrieve - It describe that it retrieve the subscription details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function retrieve($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/subscriptions/?id=".$params['subscription_id'];
		$curl= $this->curlCall($url, http_build_query($params),'get');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [list - It describe that it list all the subscription]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function list()
	{
		$url = $this->url ."/subscriptions";
		$curl= $this->curlCall($url, '','get');
		return $curl;
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}
?>