<?php 

	require_once("vendor/autoload.php");

	use \Slim\Slim;
	use \Hcode\Page;

	$app = new Slim();

	$app->config('debug', true);

	$app->get('/', function() {
	    
		$page = new Page();

		$page -> stTpl("index");

		//echo $_SERVER["DOCUMENT_ROOT"];

	});

	$app->run();

 ?>