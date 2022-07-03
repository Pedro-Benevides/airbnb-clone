<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
	$url =  strtoupper($_GET['url']);
	// echo $url;
	switch ($url) {
		case "USERFORM":
			require_once "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->form();
			break;
		case "USERREGISTER":
			require_once "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->create();
			break;
		case "LOGIN":
			require_once "App/Controllers/AuthController.php";
			$auth = new AuthController();
			$auth->login();
			break;
		case "AUTH":
			require_once "App/Controllers/AuthController.php";
			$authController = new AuthController();
			$authController->auth();
			break;
		case "USERPAGE":
			require_once "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->getUser();
			break;
		case "ACCOMMODATIONFORM":
			require_once "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->form();
			break;
		case "ACCOMMODATIONREGISTER":
			require_once "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->create();
			break;
		case "ACCOMMODATIONPAGE":
			require_once "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->getAcomodacao();
			break;
		case "ACCOMMODATIONLIST":
			require_once "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->list();
			break;
		case "CARDFORM":
			require_once "App/Controllers/CartaoController.php";
			$CartaoController = new CartaoController();
			$CartaoController->form();
			break;
		case "CARDREGISTER":
			require_once "App/Controllers/CartaoController.php";
			$CartaoController = new CartaoController();
			$CartaoController->create();
			break;
		default:
			break;
	}
} else {
	//senão, vai para uma página padrão, neste caso a home do site
	$url = 'App/Views/pages/notFound.php';
}
