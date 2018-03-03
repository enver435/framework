<?php

	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2018-02-02 21:09:41
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-03-03 23:58:29
	
	$route->get('/', function()
	{
	    controller('index', getParams($this));
	});

	/* ROUTE LANGUAGE */
	$route->get('/{lang}?:isoCode2', function($lang)
	{
		if(file_exists(ROOT . 'app/language/' . $lang . '.php'))
		{
			setSession('lang', $lang);
		}
		redirect();
	});

?>