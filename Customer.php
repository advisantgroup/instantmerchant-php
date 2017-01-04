<?php 
require_once "Api_resource.php";

class Customer extends Api_resource
{
	/**
	 * [create_customer -It describe that it create the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function create($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/customer";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}
}
?>