<?php

use app\models\Usuario;

class AuthController
{

    private $usuarioRepo;

    public function __construct(Usuario $usuarioRepo)
    {
        $this->usuarioRepo = $usuarioRepo;
    }

    public function login(array $requestData)
    {
        $canLogin = $this->validate($requestData);

        if ($canLogin) {
            return $this->usuarioRepo->whereQuery(
                'email',
                '=',
                $requestData['email']
            ) . $this->usuarioRepo->whereQuery(
                'senha',
                '=',
                password_hash(trim($requestData['senha']), PASSWORD_BCRYPT),
                'AND'
            );
        } else {
            return '422';
        }
    }

    private function validate($requestData)
    {
        return strlen($requestData['senha']) <= 6
            && !strpos($requestData['senha'], '=')
            && strpos($requestData['email'], '@');
    }
}
