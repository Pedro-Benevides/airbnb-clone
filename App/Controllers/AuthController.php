<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\UsuarioRepo.php';

use App\Models\Usuario;
use App\Repositories\UsuarioRepo;

class AuthController
{

    public function __construct()
    {
    }

    /**Autentica o usuario no banco
     * 
     * @return userId id do usuario no banco
     */
    public function auth()
    {
        $usuarioRepo = new UsuarioRepo();

        $canLogin = $this->validate($_POST);
        if ($canLogin) {
            $user = $usuarioRepo->auth($_POST);

            if (!empty($user)) {
                $_SESSION['AUTH'] = $user->getId();
            }
        }

        header('Location:userPage', true, 302);
    }

    public function login()
    {
        require dirname(dirname(__FILE__)) . '\Views\pages\login.php';
    }

    public function logout()
    {
        $_SESSION['AUTH'] = null;
    }

    private function validate($requestData)
    {
        return strlen($requestData['password']) <= 6
            && !strpos($requestData['password'], '=');
    }
}
