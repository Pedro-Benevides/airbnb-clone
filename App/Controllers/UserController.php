<?php
// require_once '../Models/Usuario.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\UsuarioRepo.php';

use App\Models\Usuario;
use App\Repositories\UsuarioRepo;

class UserController
{

    private $usuarioRepo;

    public function __construct()
    {
        $this->usuarioRepo = new UsuarioRepo();
    }

    public function create(array $userForm)
    {
        $user = $this->usuarioRepo->create($userForm);

        if ($user) {
            return "<br> Usuario cadastrado com sucesso!";
        } else {
            return "Falha ao cadastrar usuario";
        }
    }

    public function getUser()
    {
        $user = $this->usuarioRepo->whereId($_SESSION['AUTH']);

        require dirname(dirname(__FILE__)) . '\Views\pages\index.php';
    }
}
