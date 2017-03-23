<?php
namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Charges extends Api_resource
{

	/**
	 * [create - It describe that it create the charge for invoices and also the direct payment]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function create($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/charges";
		$curl= $this->curlCall($url, http_build_query($params),'POST');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [archive - It describe that it archive the payment details for given unique id]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function archive($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['unique_id']."/archive";
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [unarchive - It describe that it unarchive the details for the archived payments]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function unarchive($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['unique_id']."/unarchive";
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [paid - It describe that it list only the paid status]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function paid()
	{
		$url = $this->url ."/charges/paid";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [uncaptured - It describe that it list only the uncaptured status]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function uncaptured()
	{
		$url = $this->url ."/charges/uncaptured";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [chargebacks - It describe that it list only the chargeback status]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function chargebacks()
	{
		$url = $this->url ."/chargebacks";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [voids - It describe that it list only the void status]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function voids()
	{
		$url = $this->url ."/voids";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [partialRefund - It describe that it list the partial_refund status]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function partialRefund()
	{
		$url = $this->url ."/charges/partial_refund";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [refundCharge - It describe that it list the refund status for a given charge id]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function refundCharge($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['charge_id']."/refunds";
		// return $url;
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [capture - It describe that it capture the payments for uncaptured payments]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function capture($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['charge_id']."/capture";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [refund - It describe that it refund the payment for given charge id and the amount]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function refund($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/refunds";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [listCharges - It describe that it list all the status of payments]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function listCharges()
	{
		$url = $this->url ."/charges";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [listArchived - It describe that it list the archived status of payments when it is 1 or 0]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function listArchived($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/charges?archived=".$params['archived'];
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}