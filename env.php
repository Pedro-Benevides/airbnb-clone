<?php
session_start();

$_SESSION["DB_DATABASE"] = "airbnb-dev";
$_SESSION["DB_HOSTNAME"] = "127.0.0.1";
$_SESSION["DB_PORT"] = 3306;
$_SESSION["DB_USER"] = "root";
// $_SESSION["DB_PASSWORD"] = 123456;

header("Location: db\config\connection.php");
