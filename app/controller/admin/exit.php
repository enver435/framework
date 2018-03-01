<?php

    # @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-10-18 13:46:04
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-05 18:29:07

	if(session('login'))
	{
		$AdminLogin->_exit();
	}

	redirect();

?>
