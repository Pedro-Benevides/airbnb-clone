<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
	$url =  strtoupper($_GET['url']);
	// echo $url;
	switch ($url) {
		case "LOGIN":
			require "App/Controllers/AuthController.php";
			$auth = new AuthController();
			$auth->login();
			break;
		case "AUTH":
			require "App/Controllers/AuthController.php";
			$authController = new AuthController();
			$authController->auth($_POST);
			break;
		case "USERPAGE":
			require "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->getUser();
			break;
		default:
			break;
	}
} else {
	//senão, vai para uma página padrão, neste caso a home do site
	$url = 'App/Views/pages/notFound.php';
}