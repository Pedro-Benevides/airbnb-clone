<?php

use app\models\BaseQuery;
use app\models\Usuario;

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

    public function login(array $requestData): ?Usuario
    {
        $canLogin = $this->validate($requestData);

        if ($canLogin) {
            $dbUser = $this->db->query(

                $this->usuarioRepo->whereQuery(
                    'email',
                    '=',
                    $requestData['email']
                ) . $this->usuarioRepo->whereQuery(
                    'senha',
                    '=',
                    password_hash(htmlspecialchars(stripslashes(trim($requestData['senha']))), PASSWORD_BCRYPT),
                    'AND'
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
                    $row['cartaoId'], //TODO: puxar relacionamento com cartao
                    $row['anfitriao'],
                    $row['locatario']
                );
                printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
            }, $dbUser)->array_shift;

            $this->setUser($dbUser);

            return $dbUser;
        } else {
            return null;
        }
    }

    public function logout()
    {
        $this->setUser(null);
    }

    private function validate($requestData)
    {
        return strlen($requestData['senha']) <= 6
            && !strpos($requestData['senha'], '=')
            && strpos($requestData['email'], '@');
    }
}
