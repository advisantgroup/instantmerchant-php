<?php
// namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Charges extends Api_resource
{
	public function create($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charges";
		$curl= $this->curlCall($url, http_build_query($params),'POST');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function archive($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['unique_id']."/archive";
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function unarchive($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['unique_id']."/unarchive";
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function paid()
	{
		$url = $this->url ."/charges/paid";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function uncaptured()
	{
		$url = $this->url ."/charges/uncaptured";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function chargebacks()
	{
		$url = $this->url ."/chargebacks";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function voids()
	{
		$url = $this->url ."/voids";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function partial_refund()
	{
		$url = $this->url ."/charges/partial_refund";
		$curl= $this->curlCall($url, '','GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function refund_charge($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['charge_id']."/refunds";
		// return $url;
		$curl= $this->curlCall($url, http_build_query($params),'GET');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function capture($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charges/".$params['charge_id']."/capture";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function refund($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/refunds";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function listCharges()
	{
		$url = $this->url ."/charges";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function listArchived($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/charges?archived=".$params['archived'];
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}
}