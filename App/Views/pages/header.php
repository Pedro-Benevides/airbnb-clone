<!DOCTYPE html>
<html>

<!-- UNEB - Universidade do Estado da Bahia -->
<!-- Alunos- Rafael R C da Cruz, Pedro Victor-->
<!-- Sistema de Informação. LP3 -->

<head>
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/ookamyabyss/LP-3-FINAL/main/img/logo.png?token=GHSAT0AAAAAABWFLROESLZI47INA47EWVZYYWCKI6Q">
    <title>House Shop</title>
    <meta charset="utf-8" />
    <!-- Link Css -->
    <style type="text/css">
        <?php require dirname(dirname(__FILE__)) . '\styles\index.php';
        ?>
    </style>
    <!-- Link Css -->
    <link href="http://fonts.cdnfonts.com/css/nexa-bold" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header>
        <!-- Nav -->
        <nav class="flex-nav">
            <div class="container">
                <div class="grid menu">
                    <div class="column-xs-8 column-md-6">
                        <a href="home">
                            <p id="highlight">House Shop</p>
                        </a>
                    </div>
                    <div class="column-xs-4 column-md-6">
                        <ul>
                            <?php
                            if (isset($_SESSION) && $_SESSION['AUTH']) {
                            ?>
                                <li class="nav-item"><a href="accommodationList">Buscar</a></li>
                                <li class="nav-item"><a href="accommodationForm">Cadastro de acomodações</a></li>
                                <li class="nav-item"><a href="userPage">Meus Dados</a></li>
                            <?php
                            } else {
                            ?>
                                <li class="nav-item"><a href="accommodationList">Buscar</a></li>
                                <li class="nav-item"><a href="userform">Cadastro</a></li>
                                <li class="nav-item"><a href="login">Login</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>