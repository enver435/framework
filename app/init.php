<?php
	
	# @Author: Enver Abbasov | https://www.facebook.com/enverabbasov435
	# @Date:   2017-07-31 15:02:45
	# @Email:  abbasovenver1999@gmail.com
	# @Last Modified time: 2018-02-17 17:35:34

	/* DEFINE ROOT */
	define('ROOT', str_replace('app', '', str_replace(DIRECTORY_SEPARATOR, '/', dirname(__FILE__))));

	/* START SESSION */
	session_start();

	/* REQUIRE CONFIG */
	require_once ROOT . '/config.php';

	/* REQUIRE AUTOLOADER */
	require_once ROOT . '/system/autoloader/autoloader.php';

	/* REQUIRE PLUGINS */
	require_once ROOT . '/system/plugin/smarty/SmartyBC.class.php';
	require_once ROOT . '/system/plugin/mail/class.phpmailer.php';
	require_once ROOT . '/system/plugin/mail/class.smtp.php';
	require_once ROOT . '/system/plugin/upload/class.upload.php';
	require_once ROOT . '/system/plugin/upload/SimpleImage.php';
	require_once ROOT . '/system/plugin/db/db.php';

    /* CONNECTION DB */
	$db = new DB($config['db']['host'], $config['db']['dbname'], $config['db']['user'], $config['db']['pass']);

	/* SMARTY SETTINGS */
	$smarty = new SmartyBC;
    $smarty->template_dir 	 = ROOT . '/app/view';
    $smarty->compile_dir  	 = ROOT . '/system/tmp';
    $smarty->error_reporting = E_ALL & ~E_NOTICE;

	/* AUTOLOADER */
	$AutoloaderModels = Autoloader::AutoloaderModels($db);
	$AutoloaderHelper = Autoloader::AutoloaderHelper();

	/* EXTRACT AUTOLOADS MODELS */
	extract($AutoloaderModels['objectArraySite']);
    extract($AutoloaderModels['objectArraySiteAdmin']);

    /* LANGUAGE */
    require_once ROOT . 'app/language/' . (!session('lang') ? $config['defaultLanguage'] : session('lang')) . '.php';
    (!session('lang') ? setSession('lang', $config['defaultLanguage']) : null); // set default language

?>
