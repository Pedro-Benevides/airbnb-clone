<?php

namespace App\Repositories;

require_once dirname(dirname(dirname(__FILE__))) . '\database\config\connection.php';
require_once dirname(dirname(__FILE__)) . '\Models\Usuario.php';
require_once dirname(dirname(__FILE__)) . '\Repositories\PaisRepo.php';
require_once 'BaseRepository.php';

use App\Models\Usuario;
use App\Repositories\BaseRepository;
use App\Repositories\PaisRepo;
use Connection;
use PDO;

class UsuarioRepo extends BaseRepository
{
    private $paisRepo;

    public function __construct()
    {
        $this->paisRepo = new PaisRepo();
        parent::__construct('usuario');
    }

    public function create(array $userForm)
    {
        $db = Connection::Connect();
        $columns = array_keys($userForm);
        $values = array_values($userForm);

        return
            $db->query(
                $this->insert($columns, $values)
            );
    }

    public function auth(array $credentials): ?Usuario
    {
        $db = Connection::Connect();
        $result = $db->query(
            $this->search(
                ' email ',
                ' = ',
                $credentials['email']
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

        $user = $this->buildUsuario($result);

        return $user;
    }

    private function buildUsuario($queryResult)
    {
        $userPais = $this->paisRepo->whereId($queryResult['pais_id']);

        $queryResult['pais'] = $userPais;

        return new Usuario(
            $queryResult['nome'],
            $queryResult['cpf'],
            $queryResult['email'],
            $queryResult['senha'],
            $queryResult['pais'],
            $queryResult['telefone'],
            $queryResult['anfitriao'],
            $queryResult['locatario'],
        );
    }
}
