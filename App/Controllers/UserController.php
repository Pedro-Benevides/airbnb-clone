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
        $paises = $this->paisRepo->getAll();
        require dirname(dirname(__FILE__)) . '\Views\pages\register.php';
    }

    public function create()
    {
        $user = $this->usuarioRepo->create($_POST);

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
