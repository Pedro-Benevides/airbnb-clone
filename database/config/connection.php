<?php
require_once dirname(dirname(dirname(__FILE__))) . '\env.php';

// Create connection
$servername = $_SESSION['DB_HOSTNAME'];
$dbname = $_SESSION['DB_DATABASE'];
$username = $_SESSION['DB_USER'];
$password = $_SESSION['DB_PASSWORD'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $_SESSION['CONNECTION'] = $conn;
    echo "conectado com sucesso";
} catch (PDOException $e) {
    echo "erro na conexao" . $e->getMessage();
}
