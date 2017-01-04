<?php

class Card extends Api_resource
{
	/**
	 * [create_card - It describe that it create the new card for the customer]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function create($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/card";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;
	}

	/**
	 * [retrieve_card - It describe that it retrieve the card details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function retrieve($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/card";
		$curl= $this->curlCall($url, http_build_query($params),'get');
		return $curl;	
	}

	/**
	 * [update_card - It describe that it update the existing card details]
	 * @param  [array] $params [array of data]
	 * @return [void]         [Return notification with true or false status]
	 */
	public function update($params)
	{
		if(!$params)
		{
			return "Need to send the params";
		}
		$url = $this->url ."/subscription/update_card";
		$curl= $this->curlCall($url, http_build_query($params),'post');
		return $curl;	
	}
}
?>