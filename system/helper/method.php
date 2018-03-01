<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-17 17:45:28

	function get($name, $filter = true) 
	{
		if(isset($_GET[$name]))
		{
			return ($filter === true ? cleanInput($_GET[$name]) : $_GET[$name]);
		}
		return false;
	}

	function issetGet($name)
	{
		if(isset($_GET[$name]))
		{
			return true;
		}
		return false;
	}

	function post($name, $filter = true) 
	{
		if(isset($_POST[$name]))
		{
			return ($filter === true ? cleanInput($_POST[$name]) : $_POST[$name]);
		}
		return false;
	}

	function issetPost($name)
	{
		if(isset($_POST[$name]))
		{
			return true;
		}
		return false;
	}

	function files($name) 
	{
		if(isset($_FILES[$name])) 
		{
			return $_FILES[$name];
		} 
		return false;
	}

	function curlPost($url, $param) 
	{
		$ch = curl_init();
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_REFERER, $url);
	    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	    curl_setopt($ch, CURLOPT_POST, TRUE);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
	    $response = curl_exec($ch);
	    $response = json_decode($response);
	    return $response;
	}

?>
