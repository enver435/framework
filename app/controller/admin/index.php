<?php

    # @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-10-18 13:24:24
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-05 18:34:26
	
	if(!session('login'))
	{
		if(issetPost('login'))
		{
			$user = post('user');
			$pass = post('pass');

			if($user != '' AND $pass != '')
			{
				$login = $AdminLogin->login($user, md5($pass));

				if($login !== false)
				{
					redirect();
				}
			}
		}
	}

?>
