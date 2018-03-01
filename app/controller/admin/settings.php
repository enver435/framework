<?php

    # @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-11-21 10:50:41
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-06 00:28:04
	
	if(session('login'))
	{
		// update user and pass
		if(issetPost('update'))
		{
			$user = post('user');
			$pass = post('pass');

			if($user != '')
			{
				if($pass == '')
				{
					$updateArray = array(
						'user' => $user
					);
				}
				else
				{
					$updateArray = array(
						'user' => $user,
						'pass' => md5($pass)
					);
				}

				$update = $AdminLogin->update($updateArray);

				if($update === true)
				{
					$messageType = 'success';
					$message     = 'Admin panel məlumatları yeniləndi';
				}
				else
				{
					$messageType = 'error';
					$message     = 'Bir xəta baş verdi. Zəhmət olmasa bir az sonra yenidən cəhd edin';
				}
			}
			else
			{
				$messageType = 'error';
				$message     = 'Zəhmət olmasa bütün xanaları doldurub yenidən cəhd edin';
			}

			$returnArray['messageType'] = $messageType;
			$returnArray['message']     = $message;
		}

		$returnArray['getLoginInfo'] = $AdminLogin->getLoginInfo();
	}
	else
	{
		redirect();
	}

?>
