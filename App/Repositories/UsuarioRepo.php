<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\PaisRepo.php';
require_once 'BaseRepository.php';

use App\Entities\Locatario;
use App\Models\Usuario;
use App\Repositories\BaseRepository;
use App\Repositories\PaisRepo;
use Connection;
use PDO;

class UsuarioRepo extends BaseRepository
{
    public function __construct()
    {
        parent::__construct('usuario');
    }

    public function create(array $userForm)
    {
        $userForm['senha'] = $this->encrypt($userForm['senha']);

        $db = Connection::Connect();
        $columns = array_keys($userForm);
        $values = array_values($userForm);

        $db->query(
            $this->insert($columns, $values)
        );

        return $db->lastInsertId();
    }

    public function auth(array $credentials): ?Usuario
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' email ',
                ' = ',
                $credentials['email'],
                '*',
                true
            ) . $this->where(
                ' senha ',
                ' = ',
                md5(
                    htmlspecialchars(
                        stripslashes(
                            trim(
                                $credentials['password']
                            )
                        )
                    )
                ),
                ' and '
            )
        )->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $user = $this->buildUsuario($result);

            return $user;
        } else {
            return null;
        }
    }

    /**
     * Consulta um usuario no banco pelo ID
     * 
     * @param int id
     * @param int option valor para configurar o retorno, default: 0 traz um usuario padrão, 1 retorna um Locatario, 2 retorna um Anfitriao
     * 
     */
    public function whereId(int $id, $option = 0)
    {
        $usuario = null;
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' id ',
                ' = ',
                $id
            )
        )->fetch(PDO::FETCH_ASSOC);

        switch ($option) {
            case 1:
                $usuario = $this->buildLocatario($result);
                break;
            case 2:
                // $usuario = $this->buildAnfitriao($result);
                break;
            default:
                $usuario = $this->buildUsuario($result);
                break;
        }

        return $usuario;
    }

    private function buildUsuario($queryResult)
    {
        $paisRepo = new PaisRepo();
        $userPais = $paisRepo->whereId($queryResult['pais_id']);

        $queryResult['pais'] = $userPais;

        $user = new Usuario(
            $queryResult['nome'],
            $queryResult['cpf'],
            $queryResult['email'],
            $queryResult['senha'],
            $queryResult['pais'],
            $queryResult['telefone'],
            $queryResult['anfitriao'],
            $queryResult['locatario'],
        );

        $user->setId($queryResult['id']);

        return $user;
    }

    private function buildLocatario($queryResult)
    {
        $paisRepo = new PaisRepo();
        $userPais = $paisRepo->whereId($queryResult['pais_id']);

        $queryResult['pais'] = $userPais;

        $user = new Usuario(
            $queryResult['nome'],
            $queryResult['cpf'],
            $queryResult['email'],
            $queryResult['senha'],
            $queryResult['pais'],
            $queryResult['telefone'],
            $queryResult['anfitriao'],
            $queryResult['locatario'],
        );

        $user->setId($queryResult['id']);

        $cartaoRepo = new CartaoRepo();
        $cartao = $cartaoRepo->whereUsuarioId($queryResult['id']);

        $locatario = new Locatario($user, $cartao);

        return $locatario;
    }

    private function encrypt($password)
    {
        return md5(
            htmlspecialchars(
                stripslashes(
                    trim(
                        $password
                    )
                )
            )
        );
    }
}
