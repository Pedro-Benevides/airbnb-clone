<?php
require_once dirname(dirname(dirname(__FILE__))) . '\env.php';
class Connection
{
    public static function Connect()
    {
        // Estabelece a conexão utilizando as variaveis de ambiente
        $servername = $_SESSION['DB_HOSTNAME'];
        $dbname = $_SESSION['DB_DATABASE'];
        $username = $_SESSION['DB_USER'];
        $password = $_SESSION['DB_PASSWORD'];

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "entrou no catch" . $e->getmessage();
            return null;
        }
    }
}
