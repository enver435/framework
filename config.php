<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-17 17:42:49
	
	$config = array();

	/* DATABASE SETTINGS */
	$config['db'] = array(
		'host'   => 'localhost',
		'dbname' => 'mysql',
		'user'	 => 'root',
		'pass'   => ''
	);

	/* LANGUAGE SETTINGS */
	$config['defaultLanguage'] = 'az'; // default language

	/* ADMIN SETTINGS */
	$config['adminSettings']['color']                 = '#fff';
	$config['adminSettings']['headerBackground']      = '#333';
	$config['adminSettings']['preloaderColor']        = '#333';
	$config['adminSettings']['sidebarColor']          = '#333';
	$config['adminSettings']['buttonBackground']      = '#333';
	$config['adminSettings']['buttonHoverBackground'] = '#333';
	$config['adminSettings']['buttonColor']           = '#fff';
	$config['adminSettings']['borderColor']           = '#333';
	$config['adminSettings']['breadcrumbColor']       = '#333';
	$config['adminSettings']['alertSuccess']          = '#4CAF50';
	$config['adminSettings']['alertDanger']           = '#F44336';
	$config['adminSettings']['pagination']            = '#333';

	/* EMAIL SETTINGS */
	$config['emailSetting']['host']     = 'host';
	$config['emailSetting']['port']     = 465;
	$config['emailSetting']['secure']   = 'ssl';
	$config['emailSetting']['email']    = 'no-reply@sitename.com';
	$config['emailSetting']['pass']     = 'pass';
	$config['emailSetting']['siteName'] = 'Site Name';

	/* URL SETTINGS */
	$secure            = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on');
	$hostname          = str_replace('/:(.*)$/', "", $_SERVER['HTTP_HOST']);
	$servername 	   = empty($_SERVER['SERVER_NAME']) ? $hostname : $_SERVER['SERVER_NAME'];
	$config['hostURL'] = $secure ? 'https' : 'http' . '://' . $servername; // site base url

	/* SITE SETTINGS */
	define('SITE_URL', $config['hostURL'] . '/framework');
	define('SITE_ADMIN', 'admin');
	define('SITE_NAME', 'Simple Framework');
	define('DESC', 'Sayt açıqlaması');
	define('KEYS', 'Sayt açar sözləri');
	define('AUTHOR', 'Enver Abbasov | https://www.facebook.com/enverabbasov435');

?>
