<?php

	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2018-02-02 21:09:47
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-06 00:27:34
	
	$route->group('/' . SITE_ADMIN, function()
	{
	    $this->get_post('/', function()
	    {
	        controller('index');
	    });

	    $this->get_post('/settings', function()
	    {
	        controller('settings');
	    });

	    $this->get('/exit', function()
	    {
	        controller('exit');
	    });
	});

?>