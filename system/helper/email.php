<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-17 17:40:25

	function validateEmail($email) 
	{
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}

    function sendEmail($smtp, $email, $subject, $content)
    {
	    global $config;

	    // smtp settings
	    $smtpSetting  = array(
			'host'   => $config['emailSetting']['host'],
			'port'   => $config['emailSetting']['port'],
			'secure' => $config['emailSetting']['secure'],
			'email'  => $config['emailSetting']['email'],
			'pass'   => $config['emailSetting']['pass']
		);

	    $mail = new PHPMailer();
		$mail->IsSMTP();                              
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = $smtpSetting['secure'];                
		$mail->Host       = $smtpSetting['host'];      
		$mail->Port       = $smtpSetting['port'];                   
		$mail->Username   = $smtpSetting['email'];
		$mail->Password   = $smtpSetting['pass'];
		$mail->SetFrom($mail->Username, $config['emailSetting']['siteName']);
		$mail->Subject    = $subject;
		$mail->MsgHTML($content);
		$mail->AddAddress($email, $config['emailSetting']['siteName']);
		$mail->CharSet    = 'UTF-8';
		if(!$mail->Send()) 
		{
		    //echo "Mailer Error: " . $mail->ErrorInfo;
		    return false;
		}
		else
		{
		   	return true;
		}

    }

?>
