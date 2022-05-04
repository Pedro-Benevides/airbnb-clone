<?php
require_once dirname(dirname(__FILE__)) . '\Repositories\UsuarioRepo.php';

use App\Models\Usuario;
use App\Repositories\UsuarioRepo;

class AuthController
{
    private $usuarioRepo;
    private $user;

    public function __construct(mysqli $db)
    {
        $this->usuarioRepo = new UsuarioRepo($db);
    }

    public function getUser(): ?Usuario
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
     * @return null usuario não encontrado
     */
    public function login(array $requestData)
    {
        $canLogin = $this->validate($requestData);

        if ($canLogin) {
            $user = $this->usuarioRepo->auth($requestData);

            if ($user) {
                $this->setUser($user);

                return "Login efetuado";
            } else {
                return "Não encontrado";
            }
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
