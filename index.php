<?php

	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-17 18:33:18

	require_once 'app/init.php';
	require_once 'system/route/startup.php';

	ob_start();

	$route     = $app->route; // start route
	$path      = app('request')->path;
	$method    = app('request')->method;
	$actualUrl = app('request')->actualUrl;

	/* GLOBAL VARIABLES */
	$global              = array();
	$global['smarty']    = $smarty;
	$global['path']      = $path;
	$global['method']    = $method;
	$global['actualUrl'] = $actualUrl;

	/* ADD GLOBAL VARIABLE CLASSES */
	foreach ($AutoloaderModels['objectArraySite'] as $key => $value) 
	{
		$global[$key] = $value;
	}

	foreach ($AutoloaderModels['objectArraySiteAdmin'] as $key => $value) 
	{
		$global[$key] = $value;
	}

	/* ADD GLOBAL VARIABLE ADMIN SETTINGS */
	foreach ($config['adminSettings'] as $key => $value) 
	{
		$global['adminSetting'][$key] = $value;
	}

	require_once ROOT . 'app/routes/admin.php';
	require_once ROOT . 'app/routes/site.php';

	$route->end(); // end route

?>
