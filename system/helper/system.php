<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-17 17:26:16

	function checkAdmin()
	{
		global $path;
		$explodePath = explode('/', $path);

		return (@$explodePath[1] == SITE_ADMIN) ? true : false;
	}

	function controller($name, $params = array()) 
	{
		global $global, $lang, $smarty;
		extract($global);
		extract($params);

		$requireFile = (checkAdmin() === false ? ROOT . 'app/controller/' . $name . '.php' : 'app/controller/admin/' . $name . '.php');

		require_once $requireFile;

		// tpl variables
		$returnArray         = $params;
		$returnArray['lang'] = $lang;

		getController($name, $returnArray);
	}

	function getController($name, $returnArray)
	{
		global $global, $smarty;

		getHeader();
			$smartyTpl = (checkAdmin() === false ? $name . '.tpl' : 'admin/' . $name . '.tpl');
			$smarty->assign('return', $returnArray);
			$smarty->display($smartyTpl);
		getFooter();
	}

	function getHeader()
	{
		global $global, $lang, $smarty;
		$global['lang'] = $lang;
		
		$smartyTpl = (checkAdmin() === false ? 'static/header.tpl' : 'admin/static/header.tpl'); 

		$smarty->assign('global', $global);
		$smarty->display($smartyTpl);
	}

	function getFooter()
	{
		global $global, $lang, $smarty;
		$global['lang'] = $lang;
		
		$smartyTpl = (checkAdmin() === false ? 'static/footer.tpl' : 'admin/static/footer.tpl');

		$smarty->assign('global', $global);
		$smarty->display($smartyTpl);
	}

	function getParams($params)
	{
		return $params->app->request->args;
	}

	function siteUrl($page = null) 
	{
		$siteUrl = (checkAdmin() === false ? SITE_URL . '/' . $page : SITE_URL . '/' . SITE_ADMIN . '/' . $page);
		return $siteUrl;
	}

	function uploadUrl($folder, $size, $image, $type = 'jpg')
	{
		return SITE_URL . '/files/' . $folder . '/' . $size . '/' . $image . '.' . $type;
	}

	function getUrl($index)
	{
		global $path;

		$explodePath = explode('/', $path);
		$explodePath = (checkAdmin() === true ? $explodePath[($index == 0) ? 1 : ($index+1)] : $explodePath[$index+1]);

		return $explodePath;
	}

	function publicUrl($path)
	{
		$publicUrl = (checkAdmin() === false ? SITE_URL . '/public/' . $path : SITE_URL . '/public/admin/' . $path);
		return $publicUrl;
	}

	function redirect($url = null) 
	{
		$redirectUrl = ($url == 'referer') ? $_SERVER['HTTP_REFERER'] : (checkAdmin() === false ? SITE_URL . '/' . $url : SITE_URL . '/' . SITE_ADMIN . '/' . $url);
		header('Location: ' . $redirectUrl);
	}

	function refresh($url = null, $time = 3) 
	{
		$refreshUrl = ($url == 'referer') ? $_SERVER['HTTP_REFERER'] : (checkAdmin() === false ? SITE_URL . '/' . $url : SITE_URL . '/' . SITE_ADMIN . '/' . $url);
		header('Refresh: ' . $time . ';url=' . $refreshUrl);
	}

	function show404()
	{
		$file404 = (checkAdmin() === false ? ROOT . 'app/controller/404.php' : ROOT . 'app/controller/admin/404.php');
		require_once $file404;
	}

?>
