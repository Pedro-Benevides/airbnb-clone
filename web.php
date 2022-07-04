<?php

//testa a variável url que veio lá do htaccess
if (isset($_GET['url'])) //se estiver preenchida, pega o valor
{
	$url =  strtoupper($_GET['url']);
	// echo $url;
	switch ($url) {
		case "USERFORM":
			require "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->form();
			break;
		case "USERREGISTER":
			require "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->create();
			break;
		case "LOGIN":
			require "App/Controllers/AuthController.php";
			$auth = new AuthController();
			$auth->login();
			break;
		case "AUTH":
			require "App/Controllers/AuthController.php";
			$authController = new AuthController();
			$authController->auth();
			break;
		case "USERPAGE":
			require "App/Controllers/UserController.php";
			$userController = new UserController();
			$userController->getUser();
			break;
		case "ACCOMMODATIONFORM":
			require "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->form();
			break;
		case "ACCOMMODATIONREGISTER":
			require "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->create();
			break;
		case "ACCOMMODATIONPAGE":
			require "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->getAcomodacao();
			break;
		case "ACCOMMODATIONLIST":
			require "App/Controllers/AcomodacaoController.php";
			$acomodacaoController = new AcomodacaoController();
			$acomodacaoController->list();
			break;
		case "CARDFORM":
			require "App/Controllers/CartaoController.php";
			$cartaoController = new CartaoController();
			$cartaoController->form();
			break;
		case "CARDREGISTER":
			require "App/Controllers/CartaoController.php";
			$cartaoController = new CartaoController();
			$cartaoController->create();
			break;
		case "PURCHASEDETAILS":
			require "App/Controllers/LocacaoController.php";
			$locacaoController = new LocacaoController();
			$locacaoController->confirm();
			break;
		case "RENTREGISTER":
			require "App/Controllers/LocacaoController.php";
			$locacaoController = new LocacaoController();
			$locacaoController->create();
			break;
		case "CHECKINRENT":
			require "App/Controllers/LocacaoController.php";
			$locacaoController = new LocacaoController();
			$locacaoController->checkin();
			break;
		case "CANCELRENT":
			require "App/Controllers/LocacaoController.php";
			$locacaoController = new LocacaoController();
			$locacaoController->cancel();
			break;
		default:
			require "App/Views/pages/index.php";

			break;
	}
} else {
	$url = 'Home';
}
