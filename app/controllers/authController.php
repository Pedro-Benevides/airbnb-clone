<?php
require 'C:\xampp\htdocs\airbnb-clone-full\app\Support\BaseQuery.php';
require 'C:\xampp\htdocs\airbnb-clone-full\app\Models\Usuario.php';

use app\Support\BaseQuery;
use app\Models\Usuario;


class AuthController
{

    private $usuarioRepo;
    private $db;
    private $user;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
        $this->usuarioRepo = new BaseQuery('usuario');
    }

    public function getUser(): Usuario
    {
        return $this->user;
    }

    public function setUser(Usuario $user = null)
    {
        $this->user = $user;
    }

    /**Autentica o usuario no banco
     * @param array $requestData Array associativo com as credenciais do usuario
     * 
     * @return Usuario usuario cadastrado no banco
     * @return null
     */
    public function login(array $requestData)
    {
        $canLogin = $this->validate($requestData);

        if ($canLogin) {
            $dbUser = $this->db->query(
                $this->usuarioRepo->searchQuery(
                    ' email ',
                    ' = ',
                    $requestData['email']
                ) . $this->usuarioRepo->whereQuery(
                    ' senha ',
                    ' = ',
                    md5(htmlspecialchars(stripslashes(trim($requestData['password'])))),
                    ' and '
                )
            )->fetch_all(MYSQLI_ASSOC);

            $dbUser = array_map(function ($row) {
                return new Usuario(
                    $row['nome'],
                    $row['cpf'],
                    $row['email'],
                    $row['senha'],
                    $row['pais'],
                    $row['telefone'],
                    $row['cartao_id'], //TODO: puxar relacionamento com cartao
                    $row['anfitriao'],
                    $row['locatario']
                );
            }, $dbUser);

            $dbUser = array_shift($dbUser);

            $this->setUser($dbUser);

            return $dbUser;
        } else {
            return null;
        }
    }

    public function logout()
    {
        $this->setUser(null);
        $_SESSION['AUTH'] = null;
    }

    private function validate($requestData)
    {
        return strlen($requestData['password']) <= 6
            && !strpos($requestData['password'], '=');
    }
}
