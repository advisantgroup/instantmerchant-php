<?php
namespace InstantMerchant;

require_once "Api_resource.php";
require_once "Error_handler.php";

class Invoices extends Api_resource
{
	/**
	 * [create -It describe that it create the invoice to the existing and new customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function create($params)
	{
		if(!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/invoices";
		$curl= $this->curlCall($url, http_build_query($params),'POST');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
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
			throw new error\Img_params_missing();
		}
		$url = $this->url ."/invoices/send";
		$curl= $this->curlCall($url, http_build_query($params),'POST');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}
	
	/**
	 * [archive - It describe that it archive the invoice]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function archive($params)
	{
		if (!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url."/invoices/".$params['invoice_num']."/archive";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [unarchive - It describe that it unarchive the archive invoice]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function unarchive($params)
	{
		if (!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url."/invoices/".$params['invoice_num']."/unarchive";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [retrieve - It describe that it retrieve the invoice details for the given invoice number]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function retrieve($params)
	{
		if (!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url."/invoices?invoice_num=".$params['invoice_num'];
		$curl= $this->curlCall($url, http_build_query($params),'get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [paid - It describe that it list the paid status of invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function paid()
	{
		$url = $this->url."/invoices/paid";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [uncaptured - It describe that it list the uncaptured invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function uncaptured()
	{
		$url = $this->url."/invoices/uncaptured";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [refund - It describe that it list the refund invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function refund()
	{
		$url = $this->url."/invoices/refunds";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [chargeback - It describe that it list the chargeback]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function chargeback()
	{
		$url = $this->url."/invoices/chargebacks";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [void - It describe that it list the void invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function void()
	{
		$url = $this->url."/invoices/voids";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [pending - It describe that it list the pending invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function pending()
	{
		$url = $this->url."/invoices/pending";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [draft - It describe that it list the draft invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function draft()
	{
		$url = $this->url."/invoices/draft";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);		
		}
		return $curl;
	}

	/**
	 * [listInvoices - It describe that it list all the invoice]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function listInvoices()
	{
		$url = $this->url."/invoices";
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);	
		}
		return $curl;
	}

	/**
	 * [listArchived - It describe that it list the archive invoice whn archived=1]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification only if it is true,else throw exception]
	 */
	public function listArchived($params)
	{
		if (!$params)
		{
			throw new error\Img_params_missing();
		}
		$url = $this->url."/invoices?archived=".$params['archived'];
		$curl= $this->curlCall($url, '','get');
		$json_obj = json_decode($curl);
		if($json_obj->status == false)
		{
			throw new error\Img_false_status($json_obj->message);		
		}
		return $curl;
	}
}
?>