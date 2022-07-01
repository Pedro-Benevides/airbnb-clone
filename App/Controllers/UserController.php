<?php
// require_once '../Models/Usuario.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\UsuarioRepo.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\PaisRepo.php';

use App\Models\Usuario;
use App\Repositories\PaisRepo;
use App\Repositories\UsuarioRepo;

class UserController
{

    private $usuarioRepo;
    private $paisRepo;

    public function __construct()
    {
        $this->usuarioRepo = new UsuarioRepo();
        $this->paisRepo = new PaisRepo();
    }

    public function getForm()
    {
        $paises = $this->paisRepo->all();
        require dirname(dirname(__FILE__)) . '\Views\pages\register.php';
    }

    public function create()
    {
        $user = $this->usuarioRepo->create($_POST);

        if ($user) {
            require dirname(dirname(__FILE__)) . '\Views\pages\login.php';
        } else {
            return dirname(dirname(__FILE__)) . '\Views\pages\error500.php';;
        }
    }

    public function getUser()
    {
        $userAuth = $this->usuarioRepo->whereId($_SESSION['AUTH']);

        require dirname(dirname(__FILE__)) . '\Views\pages\index.php';
    }
}
