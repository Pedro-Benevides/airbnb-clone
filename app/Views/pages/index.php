<?php
require '../../../db/config/connection.php';
require '../../Controllers/AuthController.php';
// session_start();

$auth = new AuthController($_SESSION['CONNECTION']);

// Usuário não forneceu a senha ou o login
if (!isset($_POST["email"]) || !isset($_POST["password"])) {
    echo "Você deve digitar sua senha e login!";
    exit;
}

//Autenticação do usuario na sessao
$auth->login($_POST);
$_SESSION['AUTH'] = $auth;

echo 'Bem vindo ao site do Airbnb ' . ($_SESSION['AUTH']->getUser()->getNome());
