<?php

    # @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-08-16 22:57:56
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-05 22:49:33

	require_once '../app/init.php';

	$show = true;

	$size     = get('size');
	$folder   = get('folder');
	$hash     = get('imageHash');
	$fileType = get('fileType');

	$fileDirectory = $folder . '/' . $hash . '.' . $fileType;

	if(file_exists($fileDirectory)) 
	{
		$image = new SimpleImage($fileDirectory);

		if($size != '')
		{
			if($folder == 'foldername')
			{
				if($size == 'big')
				{
					//$image->cutFromCenter(1080, 610);
				}
				elseif($size == 'medium')
				{
					//$image->cutFromCenter(790, 365);
				}
				elseif($size == 'thumb')
				{
					//$image->resize(210, 165);
				}
				else
				{
					$show = false;
				}
			}

			if($show === true)
			{
				$image->output();
				exit();
			}
			else
			{
				show404();
			}
		}
		else
		{
			show404();
		}
	}
	else
	{
		show404();
	}

?>