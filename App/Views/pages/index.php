<?php
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '\database\config\Connection.php';
require_once dirname(dirname(dirname(__FILE__))) . '\Controllers\AuthController.php';

$auth = new AuthController($_SESSION['CONNECTION']);

//Autenticação do usuario na sessao
$auth->login($_POST);
$_SESSION['AUTH'] = $auth;

if ($_SESSION['AUTH']->getUser()) {
    echo 'Bem vindo ao site do Airbnb ' . ($_SESSION['AUTH']->getUser()->getNome());
} else {
    echo "Não encontrado";
}
