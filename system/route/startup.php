<?php
	
	require_once 'App.php';
	require_once 'Request.php';
	require_once 'Route.php';
	require_once 'RouteFunction.php';

	$app            = System\App::instance();
	$app->request   = System\Request::instance();
	$app->route     = System\Route::instance($app->request);

?>
