<?php
// namespace Instantmerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Invoices extends Api_resource
{
	/**
	 * [create -It describe that it create the invoice to the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function create($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/invoices";
		$curl= $this->curlCall($url, http_build_query($params),'POST');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [send -It describe that it send the invoice to the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function send($params)
	{
		if(!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url ."/invoices/send";
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
		if (!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url."/invoices/".$params['invoice_num']."/archive";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function unarchive($params)
	{
		if (!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url."/invoices/".$params['invoice_num']."/unarchive";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function retrieve($params)
	{
		if (!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url."/invoices?invoice_num=".$params['invoice_num'];
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function paid()
	{
		$url = $this->url."/invoices/paid";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function uncaptured()
	{
		$url = $this->url."/invoices/uncaptured";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function refund()
	{
		$url = $this->url."/invoices/refunds";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function chargeback()
	{
		$url = $this->url."/invoices/chargebacks";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function void()
	{
		$url = $this->url."/invoices/voids";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function pending()
	{
		$url = $this->url."/invoices/pending";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	public function draft()
	{
		$url = $this->url."/invoices/draft";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);		
		}
		return $curl;
	}

	public function listInvoices()
	{
		$url = $this->url."/invoices";
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
		if (!$params)
		{
			throw new Img_params_missing();
		}
		$url = $this->url."/invoices?archived=".$params['archived'];
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new Img_false_status($json_obj->message);		
		}
		return $curl;
	}
}
?>