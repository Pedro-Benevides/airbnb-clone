<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\UsuarioRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\PaisRepo.php';

use App\Repositories\PaisRepo;
use App\Repositories\UsuarioRepo;

class UserController
{

    public function __construct()
    {
    }

    public function form()
    {
        $paisRepo = new PaisRepo();

        $paises = $paisRepo->all();

        require dirname(dirname(__FILE__)) . '\Views\pages\userRegister.php';
    }

    public function create()
    {
        $usuarioRepo = new UsuarioRepo();

        $user = $usuarioRepo->create($_POST);

        if ($user) {
            require dirname(dirname(__FILE__)) . '\Views\pages\login.php';
        } else {
            return dirname(dirname(__FILE__)) . '\Views\pages\error500.php';
        }
    }

    public function getUser()
    {
        $usuarioRepo = new UsuarioRepo();

        $userAuth = $usuarioRepo->whereId($_SESSION['AUTH']);

        require dirname(dirname(__FILE__)) . '\Views\pages\index.php';
    }
}
