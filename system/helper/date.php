<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2017-07-31 15:05:52

	function timeAgo($date, $format) 
	{
	    $timestamp = strtotime($date);
	    $currentDate = new DateTime('@' . $timestamp);
	    $nowDate = new DateTime('@' . time());
	    return $currentDate
	        ->diff($nowDate)
	        ->format($format); // %y %m %d %h %i %s
	}

?>
